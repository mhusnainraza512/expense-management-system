<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LogbookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if(isset($_SESSION['authUser'])){
    $is_admin = $_SESSION['authUser']->is_admin;
}else{
    $is_admin = '';
}

Route::get('/clear', function(){
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('storage:link');
    return "All cache has been cleared!";
});

Route::get('/pdf', [VoucherController::class, 'generatePdf']);
Route::get('/downloadZip/{id}', [VoucherController::class, 'downloadZip'])->name('downloadZip');

// auth routes
Route::group(['prefix' => '/auth'], function () {
    Route::get('/index', [AuthController::class, 'index'])->name('auth.index')->middleware('auth');

    Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate')->middleware('guest');

    Route::get('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('auth', 'can:admin');
    Route::post('/register', [AuthController::class, 'store'])->name('auth.store')->middleware('auth', 'can:admin');

    Route::get('/edit/{id}', [AuthController::class, 'edit'])->name('auth.edit')->middleware('auth', 'can:admin');
    Route::post('/update/{id}', [AuthController::class, 'update'])->name('auth.update')->middleware('auth', 'can:admin');

    Route::post('/destroy/{id}', [AuthController::class, 'destroy'])->name('auth.destroy')->middleware('auth', 'can:admin');
    Route::post('/activate/{id}', [AuthController::class, 'activate'])->name('auth.activate')->middleware('auth', 'can:admin');

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
});

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/wallet', [EmployeeController::class, 'wallet'])->name('employee.wallet');
});

Route::group(['prefix' => '/jobs', 'middleware' => ['auth', 'can:admin']], function () {
    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/store', [JobController::class, 'store'])->name('jobs.store');

    Route::get('/edit/{id}', [JobController::class, 'edit'])->name('jobs.edit');
    Route::post('/update/{id}', [JobController::class, 'update'])->name('jobs.update');

    Route::post('/destroy/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

Route::group(['prefix' => '/managers', 'middleware' => ['auth', 'can:admin']], function () {
    Route::get('/', [ManagerController::class, 'index'])->name('managers.index');
    Route::get('/create', [ManagerController::class, 'register'])->name('managers.create');
    Route::post('/store', [ManagerController::class, 'store'])->name('managers.store');

    Route::get('/edit/{id}', [ManagerController::class, 'edit'])->name('managers.edit');
    Route::post('/update/{id}', [ManagerController::class, 'update'])->name('managers.update');

    Route::post('/destroy/{id}', [ManagerController::class, 'destroy'])->name('managers.destroy');
});

Route::group(['prefix' => '/expensecategories', 'middleware' => ['auth', $is_admin == 1 ? 'can:admin': 'can:manager']], function () {
    Route::get('/', [ExpenseCategoryController::class, 'index'])->name('expensecategories.index');
    Route::get('/create', [ExpenseCategoryController::class, 'create'])->name('expensecategories.create');
    Route::post('/store', [ExpenseCategoryController::class, 'store'])->name('expensecategories.store');

    Route::get('/edit/{id}', [ExpenseCategoryController::class, 'edit'])->name('expensecategories.edit');
    Route::post('/update/{id}', [ExpenseCategoryController::class, 'update'])->name('expensecategories.update');

    Route::post('/destroy/{id}', [ExpenseCategoryController::class, 'destroy'])->name('expensecategories.destroy');
});

Route::group(['prefix' => '/employees', 'middleware' => ['auth', $is_admin == 1 ? 'can:admin': 'can:manager']], function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');

    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employees.update');

    Route::get('/addbalance/{id}', [EmployeeController::class, 'addbalance'])->name('employees.addbalance');
    Route::post('/addbalance/{id}', [EmployeeController::class, 'addbalance'])->name('employees.addbalance');
    Route::get('/pay/amount/{id}', [EmployeeController::class, 'payamount'])->name('employees.payamount');


});

Route::group(['prefix' => '/employees', 'middleware' => ['auth']], function () {
    Route::post('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::post('/activate/{id}', [EmployeeController::class, 'activate'])->name('employees.activate');

    Route::get('/vouchers', [VoucherController::class, 'approvalRequests'])->name('employees.approvalRequests');
    Route::get('/vouchers/approved', [VoucherController::class, 'approvedVouchers'])->name('employees.approvedVouchers');
    Route::get('/vouchers/rejected', [VoucherController::class, 'rejectedVouchers'])->name('employees.rejectedVouchers');
    Route::get('/vouchers/details/{id}', [VoucherController::class, 'voucherDetails'])->name('employees.voucherDetails');
    Route::get('/vouchers/pdf/{id}', [VoucherController::class, 'voucherDetailsPdf'])->name('employees.voucherDetailsPdf');
    Route::post('/vouchers/approvereject', [VoucherController::class, 'voucherApproveReject'])->name('vouchers.voucherApproveReject');
    Route::post('/vouchers/savedraft', [VoucherController::class, 'voucherSaveDraft'])->name('vouchers.voucherSaveDraft');

    Route::post('/vouchers/expense/addbills', [VoucherController::class, 'addExpenseBills'])->name('vouchers.addExpenseBills');
    Route::get('/logbook', [LogbookController::class, 'employee_logbook'])->name('employee.logbook');
    Route::get('/logbook/{id}', [LogbookController::class, 'single_employee_logbook'])->name('single.employee.logbook');
});

Route::group(['prefix' => '/vouchers', 'middleware' => 'auth'], function () {
    Route::get('/', [VoucherController::class, 'index'])->name('vouchers.index')->middleware('can:employee');
    Route::get('/draft', [VoucherController::class, 'draft'])->name('vouchers.draft')->middleware('can:employee');
    Route::get('/create', [VoucherController::class, 'create'])->name('vouchers.create')->middleware('can:employee');
    Route::post('/store', [VoucherController::class, 'store'])->name('vouchers.store')->middleware('can:employee');

    Route::get('/edit/{id}', [VoucherController::class, 'edit'])->name('vouchers.edit')->middleware('can:employee');
    Route::post('/update/{id}', [VoucherController::class, 'update'])->name('vouchers.update')->middleware('can:employee');

    Route::post('/createExpense/{id}', [VoucherController::class, 'createExpense'])->name('vouchers.createExpense')->middleware('can:employee');
    Route::get('/editExpense/{id}', [VoucherController::class, 'editExpense'])->name('vouchers.editExpense')->middleware('can:employee');
    Route::post('/updateExpense/{id}', [VoucherController::class, 'updateExpense'])->name('vouchers.updateExpense')->middleware('can:employee');
    Route::post('/destroyExpense', [VoucherController::class, 'destroyExpense'])->name('vouchers.destroyExpense')->middleware('can:employee');
    Route::get('/deleteExpense/{expenseId}', [VoucherController::class, 'deleteExpense'])->name('vouchers.deleteExpense')->middleware('can:employee');
    Route::post('/attachAdditionalFiles/{id}', [VoucherController::class, 'attachAdditionalFiles'])->name('vouchers.attachAdditionalFiles');

    Route::get('/askForApproval/{id}', [VoucherController::class, 'askForApproval'])->name('vouchers.askForApproval')->middleware('can:employee');

    Route::get('/destroy/{id}', [VoucherController::class, 'destroy'])->name('vouchers.destroy')->middleware('can:employee');
    Route::get('/vouchers/expense/{id}/view', [VoucherController::class, 'viewExpenseBills'])->name('vouchers.viewExpenseBills')->middleware('can:employee');
    Route::post('/vouchers/expense/bill/{id}/delete', [VoucherController::class, 'deleteExpenseBills'])->name('vouchers.deleteExpenseBills')->middleware('can:employee');
});

Route::group(['prefix' => '/payments', 'middleware' => ['auth', 'can:admin']], function () {
    Route::get('/', [PaymentController::class, 'index'])->name('payments.index');
});


Route::group(['prefix' => '/logbook', 'middleware' => ['auth', 'can:employee']], function () {
    Route::get('/', [LogbookController::class, 'index'])->name('logbooks.index')->middleware('can:employee');

});
