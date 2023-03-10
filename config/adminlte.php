<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'E-Wallet Expense Management System',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => 'EMS',
    'logo_img' => 'logo/logo.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => 'logo/logo.jpg',
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'EMS',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'auth/logout',
    'login_url' => 'auth/login',
    'register_url' => false,
    'password_reset_url' => false,
    'password_email_url' => false,
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => false,
            'topnav' => false,
        ],
        [
            'text'        => 'Dashboard',
            'url'         => '/',
            'icon'        => 'fas fa-fw fa-tachometer-alt',
            // 'label'       => 4,
            // 'label_color' => 'success',
        ],
        [
            'text'        => 'Draft Vouchers',
            'url'         => '/vouchers/draft',
            'icon'        => 'fas fa-fw fa-save',
            'can'         => 'employee',
        ],
        [
            'text'        => 'Open Vouchers',
            'url'         => '/vouchers',
            'icon'        => 'fas fa-fw fa-users-cog',
            'can'         => 'employee',
        ],
        [
            'text'        => 'Approval Requests',
            'url'         => '/employees/vouchers',
            'icon'        => 'fas fa-fw fa-list',
            'can'         => ['admin', 'manager'],
        ],
        [
            'text'        => 'Approved Vouchers',
            'url'         => '/employees/vouchers/approved',
            'icon'        => 'fas fa-fw fa-check-circle',
            'can'         => ['admin', 'employee', 'manager'],
        ],
        [
            'text'        => 'Rejected Vouchers',
            'url'         => '/employees/vouchers/rejected',
            'icon'        => 'fas fa-fw fa-times-circle',
            'can'         => ['admin', 'employee', 'manager'],
        ],
        [
            'text'        => 'Payments',
            'url'         => '/payments',
            'icon'        => 'fas fa-fw fa-file-invoice-dollar',
            'can'         => 'admin',
        ],
        [
            'text'        => 'Wallet',
            'url'         => '/wallet',
            'icon'        => 'fas fa-fw fa-money-bill-alt',
            'can'         => 'employee',
        ],
        [
            'text'        => 'Logbook',
            'url'         => '/logbook',
            'icon'        => 'fas fa-fw fa-money-bill-alt',
            'can'         => 'employee',
        ],

        [
            'text'        => 'Logbook',
            'url'         => '/employees/logbook',
            'icon'        => 'fas fa-fw fa-money-bill-alt',
            'can'         => ['admin', 'manager'],
        ],

        [
            'header' => 'Masters',
            'can' => 'admin',
        ],
        // [
        //     'text' => 'profile',
        //     'url'  => '/settings',
        //     'icon' => 'fas fa-fw fa-user',
        // ],
        // [
        //     'text'    => 'Jobs',
        //     'icon'    => 'fas fa-fw fa-briefcase',
        //     'submenu' => [
        //         [
        //             'text'        => 'List Jobs',
        //             'url'         => '/jobs',
        //             'icon'        => 'fas fa-fw fa-briefcase',
        //             'can'         => 'admin',
        //         ],
        //         [
        //             'text' => 'Create Job',
        //             'url'  => '/jobs/create',
        //             'icon'    => 'fas fa-fw fa-briefcase',
        //         ],
        //     ],
        //     'can'         => 'admin',
        // ],
        [
            'text'    => 'Expense Categories',
            'icon'    => 'fas fa-fw fa-file-invoice',
            'submenu' => [
                [
                    'text'        => 'List Expense Categories',
                    'url'         => '/expensecategories',
                    'icon'        => 'fas fa-fw fa-file-invoice',
                ],
                [
                    'text'    => 'Create Expense Category',
                    'url'     => '/expensecategories/create',
                    'icon'    => 'fas fa-fw fa-file-invoice',
                ],
            ],
            'can'         => ['admin', 'manager'],
        ],
        [
            'text'    => 'Managers',
            'icon'    => 'fas fa-fw fa-users',
            'submenu' => [
                [
                    'text'        => 'Lis Managers',
                    'url'         => '/managers',
                    'icon'        => 'fas fa-fw fa-users',
                ],
                [
                    'text'    => 'Create Managers',
                    'url'     => '/managers/create',
                    'icon'    => 'fas fa-fw fa-users',
                ],
            ],
            'can'         => 'admin',
        ],
        [
            'text'    => 'Employees',
            'icon'    => 'fas fa-fw fa-users',
            'submenu' => [
                [
                    'text'        => 'List Employees',
                    'url'         => '/employees',
                    'icon'        => 'fas fa-fw fa-users',
                ],
                [
                    'text' => 'Create Employee',
                    'url'  => '/employees/create',
                    'icon'    => 'fas fa-fw fa-users',
                ],
            ],
            'can'         => ['admin', 'manager'],
        ],
        [
            'text'    => 'Admin Users',
            'icon'    => 'fas fa-fw fa-users-cog',
            'submenu' => [
                [
                    'text'        => 'List Admin Users',
                    'url'         => '/auth/index',
                    'icon'        => 'fas fa-fw fa-users-cog',
                ],
                [
                    'text' => 'Create Admin Users',
                    'url'  => '/auth/register',
                    'icon'    => 'fas fa-fw fa-users-cog',
                ],
            ],
            'can'         => 'admin',
        ],
        // ['header' => 'labels'],
        // [
        //     'text'       => 'important',
        //     'icon_color' => 'red',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'warning',
        //     'icon_color' => 'yellow',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'information',
        //     'icon_color' => 'cyan',
        //     'url'        => '#',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@11',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
