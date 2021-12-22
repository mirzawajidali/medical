@extends('admin.admin-layout')
@section('admin')
    {{-- Main Content Start --}}
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Cites</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fas fa-users"></i> Countries </h4>
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
                            <a href="{{ route('country_add') }}" class="btn btn-primary float-right">Add country</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Countries Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($countries as $key=>$country)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>
                                                @if ($country->status == 1)
                                                <span class="badge badge-success px-2">Active</span>
                                                @else
                                                <span class="badge badge-danger px-2">DeActive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/country-delete/'.$country->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Countries Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    {{-- Main Content End --}}
@endsection
