@extends('admin.layout')
@section("content_header")
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Student</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a class="btn btn-outline-primary" href="{{url("/studentPraticeExam/addStudent")}}">Add New Student</a>
    </div>
@endsection
@section("main_content")
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>address</th>
                    <th>telephone</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->telephone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
