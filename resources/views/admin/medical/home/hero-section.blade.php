@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Hero</a></li>
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
                            <h4 class="card-title">Hero Section</h4>
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
                                <form action="{{ route('hero_updated') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ asset($hero['banner']) }}" alt="" width="20%" height="20%">
                                    <div class="form-group">
                                        <input type="file" name="banner" class="form-control-file">
                                    </div>
                                    @error('sub_heading')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="" class="text-dark"><strong>Sub Heading</strong></label>
                                        <input type="text" value="{{ $hero['sub_heading'] }}" name="sub_heading" value="" class="form-control input-default" placeholder="Sub Heading">
                                    </div>
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="" class="text-dark"><strong>Title</strong></label>
                                        <input type="text" value="{{ $hero['title'] }}" name="title" class="form-control input-default" placeholder="Title">
                                    </div>
                                    @error('paragraph')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="" class="text-dark"><strong>Paragraph</strong></label>
                                       <textarea name="paragraph" class="form-control input-default" cols="30" rows="6">{{ $hero['paragraph'] }}</textarea>
                                    </div>
                                    @error('button')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="" class="text-dark"><strong>Button Name</strong></label>
                                        <input type="text" value="{{ $hero['btn'] }}" name="button" class="form-control input-default" placeholder="Button Name">
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
