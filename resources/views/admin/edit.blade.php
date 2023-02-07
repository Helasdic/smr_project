@extends('layouts.global-admin')
@section('title')
    Smr Admin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col g-0">
                @include('layouts.sidebar')
                @include('layouts.navbar')
            </div>
        </div>
        <div class="p-1 my-container active-cont">
            {{-- dashboard with role --}}
            <h1 class="mt-5">Dashboard {{ Auth::user()->name }}</h1>
            {{-- content main --}}
            <div class="col-md-5 text-start ms-2 mt-5">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert"></button>
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            {{-- edit  --}}
            <div class="mt-5 ms-2 overflow-hidden">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"
                            action="{{ route('update', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" value="PUT" name="_method">
                            <label for="name">Name Product</label> <br>
                            @if ($product->name)
                                <a href="{{ asset('storage/' . $product->name) }}">Current File</a> <br>
                                <input type="file" name="name" accept="application/pdf,application/vnd.ms-excel" />
                            @else
                                <input type="file" name="name" accept="application/pdf,application/vnd.ms-excel" />
                            @endif
                            <br>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                            <br>
                            <label for="description" class="mt-3">Description</label>
                            <input value="{{ $product->description }}"
                                class="form-control {{ $errors->first('description') ? 'is-invalid' : '' }}"
                                placeholder="description for Product" type="text" name="description" id="description" />
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                            <br>
                            <input class="btn btn-primary mt-4" type="submit" value="Save" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
