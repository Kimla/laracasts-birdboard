@extends('layouts.app')
@section('content')
    <h1>Create a project</h1>

    <form method="POST" action="/projects">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
            <a href="/projects">Cancel</a>
        </div>
    </form>
@endsection