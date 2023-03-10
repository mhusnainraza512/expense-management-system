@extends('adminlte::page')

@section('title', 'Create New Manager')

@section('content_header')
    <h1>Create New Manager</h1>
@stop

@section('content')

    <div class="card px-3 py-1">
        <form method="POST" action="{{ route('managers.store') }}">
            @include('managers.form')
        </form>

    </div>

@stop


@section('css')

@stop

@section('js')
    <script type="text/javascript" src="{{ asset('js/forms.js') }}"></script>
    <script type="text/javascript">
        $("#per_session_amount_div").hide();
    </script>
@stop
