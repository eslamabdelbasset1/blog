@extends('layouts.app')
@section('title', 'Create Post')
@section('navbar')@endsection

@section('content')
    <div class="container">
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger mt-2">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{$error}}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

        <form action="{{route('posts->update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                       placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                          rows="3" ></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-select form-control" aria-label="Default select example">
{{--                    @foreach ($users as $user)--}}
{{--                        <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--                    @endforeach--}}
                </select>
            </div>
            <button type="submit" class="btn btn-success"> Add Post </button>
        </form>
    </div>

@endsection
