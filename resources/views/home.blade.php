@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">لوحة التحكم</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        تسجيل دخول!
    </div>
</div>

@endsection