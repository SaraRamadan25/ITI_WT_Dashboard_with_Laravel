@extends('admin.layouts.master')
@section('title','create Student')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Add Student</strong>
            </div>
            <div class="card-body card-block">
                @if(\Illuminate\Support\Facades\Session::has('msg'))
                    <div class="alert alert-success">
                        {{ \Illuminate\Support\Facades\Session::get('msg') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="id" placeholder="Code" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" placeholder="email" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Phone" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Department</label></div>
                        <div class="col-12 col-md-9">
                            <select name="department" id="select" class="form-control">
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name  }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="add">
                            <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
