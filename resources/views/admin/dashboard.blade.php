@extends('layouts.global-admin')
@section('title')
    Innox-Admin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col g-0">
                @include('layouts.sidebar')
                @include('layouts.navbar')
            </div>
        </div>
    </div>
@endsection
