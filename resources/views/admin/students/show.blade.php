@extends('admin.layouts.master')
@section('title','One Student')
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Students</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('students.index') }}">All Students</a></li>
                            <li><a href="{{ route('students.create') }}">Add Student</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Students</strong>
            </div>
            <div class="card-body">
                <table class="table">
                   {{-- <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Department</th>
                    </tr>
                    </thead>--}}
                    <tbody>
                        <tr>
                            <th scope="row">code</th>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">name</th>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <th scope="row">email</th>
                            <td>{{ $student->email }}</td>
                        </tr>

                        <tr>
                            <th scope="row">phone</th>
                            <td>{{ $student->phone }}</td>
                        </tr>

                        <tr>
                            <th scope="row">department</th>
                            <td>{{ $student->department->name}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
