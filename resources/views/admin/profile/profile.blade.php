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
                            <h4 class="card-title">Profile</h4>
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
                            <a href="" class="btn btn-primary float-right">Change Password</a>
                            <div class="basic-form">
                                <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="media align-items-center mb-4">
                                        <img class="mr-3 img-fluid rounded-circle" src="{{ asset($users->profile)}}" width="80" height="80" alt="">
                                        <div class="media-body">
                                            <h3 class="mb-0">{{ $users->name }}</h3>
                                            <p class="text-muted mb-0">{{ $users->address }}</p>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="profile" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $users->id }}" class="form-control input-default">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{ $users->name }}" class="form-control input-default" placeholder="Name">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ $users->email }}" class="form-control input-default" placeholder="Email">
                                    </div>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="phone" value="{{ $users->phone }}" class="form-control input-default" placeholder="Phone">
                                    </div>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="address" value="{{ $users->address }}" class="form-control input-default" placeholder="Address">
                                    </div>
                                    <button type="submit" class="btn mb-1 btn-dark">Update</button>
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
