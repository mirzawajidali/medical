@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Top Nav</a></li>
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
                            <h4 class="card-title">Top Nav</h4>
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
                                <form action="{{ route('top_nav_updated') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                        <img src="{{ asset($header['logo']) }}" alt="">

                                    <div class="form-group">
                                        <input type="file" name="logo" class="form-control-file">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="email" value="{{ $header['email'] }}" name="email" value="" class="form-control input-default" placeholder="Email">
                                    </div>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="text" name="phone" value="{{ $header['phone'] }}" class="form-control input-default" placeholder="Phone">
                                    </div>
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <select class="form-control" name="city">
                                            <option selected>{{ $address[0] }}</option>
                                            @foreach ($cities as $city)
                                                <option>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <select class="form-control" name="country">
                                            <option selected>{{ $address[2] }}</option>
                                            @foreach ($countries as $country)
                                                <option>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <select class="form-control" name="state">
                                            <option selected>{{ $address[1] }}</option>
                                            @foreach ($states as $state)
                                                <option>{{ $state->name }}</option>
                                            @endforeach
                                        </select>
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
