@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
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
                            <h4 class="card-title">Change Password</h4>
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
                            <div class="basic-form">
                                <form action="{{ route('change_password') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $user->id }}" class="form-control input-default">
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-default" placeholder="Password">
                                    </div>
                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" class="form-control input-default" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="btn mb-1 btn-dark">Change Password</button>
                                    <a href="{{ route('profile') }}" class="btn mb-1 btn-danger">Cencel</a>
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
