@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add State</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Country</h4>
                            @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>{{ Session::get('error') }}</div>
                            @endif
                            <a href="{{ route('states') }}" class="btn btn-primary float-right">View States</a>
                            <div class="basic-form">
                                <form action="{{ route('state_added') }}" method="POST">
                                    @csrf
                                    <br><br><br>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control input-default" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">De-Activate</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn mb-1 btn-dark">Add State</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Main Content End --}}
@endsection
