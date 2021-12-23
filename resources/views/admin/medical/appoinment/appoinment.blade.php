@extends('admin.admin-layout')
@section('admin')
{{-- Main Content Start --}}
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Appoinment</a></li>
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
                        <h4 class="card-title">Appointment</h4>
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
                            <form action="{{ route('appoinmentpage_update') }}" method="POST">
                                @csrf

                                @error('upper_heading')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="" class="text-dark"><strong>Upper Heading</strong></label>
                                    <input type="text" value="{{ $appoinment['upper_heading'] }}" name="upper_heading" value="" class="form-control input-default" placeholder="Sub Heading">
                                </div>
                                @error('lower_heading')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="" class="text-dark"><strong>Lower Heading</strong></label>
                                    <input type="text" value="{{ $appoinment['lower_heading'] }}" name="lower_heading" value="" class="form-control input-default" placeholder="Sub Heading">
                                </div>
                                @error('main_heading')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="" class="text-dark"><strong>Main Heading</strong></label>
                                    <input type="text" value="{{ $appoinment['main_heading'] }}" name="main_heading" class="form-control input-default" placeholder="Title">
                                </div>
                                @error('paragraph')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="" class="text-dark"><strong>Paragraph</strong></label>
                                   <textarea name="paragraph" class="form-control input-default" cols="30" rows="6">{{ $appoinment['paragraph'] }}</textarea>
                                </div>
                                @error('button')
                                <span class="text-danger"></span>
                                @enderror
                                <div class="form-group">
                                    <label for="" class="text-dark"><strong>Button Name</strong></label>
                                    <input type="text" value="{{ $appoinment['btn'] }}" name="button" class="form-control input-default" placeholder="Button Name">
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
