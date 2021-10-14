@extends('layouts.app')

@section('title', 'Posts')
@section('navbar') @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="w-75 m-auto">
            <div class="pull-left text-center">
            </div>
            <div class="pull-right text-center">
                <a class="btn btn-success" href=""> Create Post</a>
            </div><br>
        </div>
    </div>
    {{--        <div class="alert alert-success">--}}
    {{--            <span>message</span>--}}
    {{--        </div>--}}
    <table class="table table-bordered w-75 m-auto">
        <tr>
            <th>No</th>
            <th>PostedBy</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Islam</td>
            <td>20/8/2021</td>
            <td>
                <form action="" method="POST">
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
                </form></td>
        </tr>
    </table>
</div>
@endsection
