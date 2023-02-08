@extends('admin.layouts.master')
@section('title','All Departments')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $department)
                        <tr>
                            <th scope="row">{{ $department->id }}</th>
                            <td>{{ $department->name }}</td>
                            <td>
                                <a href="{{ route('departments.show',$department->id) }}" style="color:red">show</a>
                                <a href="#" style="color:red">delete</a>
                                <a href="{{ route('departments.edit',$department->id) }}" style="color:lightgreen">edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
