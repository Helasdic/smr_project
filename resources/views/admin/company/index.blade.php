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
            @if (Auth::user()->hasRole('Super Admin'))
                <div class="col-md-10 text-end mb-2 mt-5">
                    <a href="{{ route('create') }}" class="btn btn-green text-white">Create Product</a>
                </div>
            @endif
            <div class="col-md-10 align-items-center mt-2 ms-2 overflow-hidden">
                <table class="table table-bordered bg-light shadow-sm">
                    <thead>
                        <tr>
                            <th><b>No</b></th>
                            <th><b>Company Name</b></th>
                            <th><b>Company Address</b></th>
                            <th><b>Join Date</b></th>
                            <th><b>Jobdesk</b></th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->company_address }}</td>
                                <td>{{ $company->join_date }}</td>
                                <td>{{ $company->jobdesk }}</td>
                                <td>
                                    {{-- <a href="{{ route('download', $company->id) }}" class="btn btn-sm btn-success">Download</a>
                                <a href="{{ route('edit', $company->id) }}"
                                    class="btn btn-sm btn-warning text-white">Edit</a>
                                <form action="{{ route('delete', $company->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" value="DELETE" name="_method">
                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <tfoot>
                    <tr>
                        <td colspan=10>
                            {{ $companies->links() }}
                        </td>
                    </tr>
                </tfoot>
            </div>
        </div>
    </div>
@endsection