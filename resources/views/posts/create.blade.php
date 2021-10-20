@extends('layouts.app')
@section('title', 'Create Post')
@section('navbar')@endsection

@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Islam</option>
                    <option value="1">Islam</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success"> Add Post </button>
        </form>
    </div>

@endsection
