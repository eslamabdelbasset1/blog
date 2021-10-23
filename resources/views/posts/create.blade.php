@extends('layouts.app')
@section('title', 'Create Post')
@section('navbar')@endsection

@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-select" aria-label="Default select example">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success"> Add Post </button>
        </form>
    </div>

@endsection
