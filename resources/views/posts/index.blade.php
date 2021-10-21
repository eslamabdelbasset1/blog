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
                <a class="btn btn-success" href="{{route('posts.create')}}"> Create Post</a>
            </div><br>
        </div>
    </div>
    {{--        <div class="alert alert-success">--}}
    {{--            <span>message</span>--}}
    {{--        </div>--}}
    <table class="table table-bordered w-75 m-auto text-center bg-white">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>PostedBy</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
       <tbody>
           @foreach ($postCollection as $post)
               <tr>
                   <td>{{$post->id}}</td>
                   <td>{{$post->title}}</td>
                   <td>{{$post->description}}</td>
                   <td>{{$post->created_at}}</td>
                   <td>
                       <form action="" method="POST">
                           <a class="btn btn-info" href="{{route('posts.show', $post->id)}}">Show</a>
                           <a class="btn btn-primary" href="">Edit</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
                       </form></td>
               </tr>
           @endforeach
       </tbody>
    </table>
</div>
@endsection
