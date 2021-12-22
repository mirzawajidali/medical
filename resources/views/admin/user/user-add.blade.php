@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add User</a></li>
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
                            <h4 class="card-title">Add New User</h4>
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
                            <a href="{{ route('users') }}" class="btn btn-primary float-right">Users List</a>
                            <div class="basic-form">
                                <form action="{{ route('user_add') }}" method="POST">
                                    @csrf
                                    <br><br><br>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control input-default" placeholder="Name">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control input-default" placeholder="Email">
                                    </div>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control input-default" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">De-Activate</option>
                                        </select>
                                    </div>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control input-default" placeholder="Address">
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-default" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn mb-1 btn-dark">Add User</button>
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
