@extends('layouts.app')
@section('title', 'Show')
@section('navbar')@endsection

@section('content')
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                Post Information
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$posts->title}}</h5>
                <p class="card-text">{{$posts->description}}</p>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-header">
                Post creator Information
            </div>
            <div class="card-body">
                <h5 class="card-title">Posted By: {{$posts->user ? $posts->user->name : 'Not Found'}}</h5>
                <p class="card-text">Email: {{$posts->user ? $posts->user->email : 'Not Found'}}</p>
            </div>
        </div>
    </div>
@endsection
