@extends('layouts.app')
@section('content')
    <header class="flex items-end justify-between mb-8">
        <p class="text-grey text-small font-normal">
            <a href="/projects" class="text-grey text-small font-normal no-underline">My projects</a> / {{ $project->title }}
        </p>
        <a href="{{ $project->path().'/edit' }}" class="button">Edit project</a>
    </header>

    <main>
        <div class="flex flex-wrap items-start -mx-3">
            <div class="w-3/4 px-3">
                <div class="mb-8">
                    <h2 class="text-grey text-lg font-normal mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf
                                <div class="flex items-center">
                                    <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input type="text" name="body" placeholder="Add a new task..." class="w-full">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-grey text-lg font-normal mb-3">General notes</h2>
                    <form action="{{ $project->path() }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <textarea
                            name="notes"
                            class="card w-full h-48 resize-none mb-4" 
                            placeholder="Write your notes here..."
                        >{{ $project->notes }}</textarea>
                        <button type="submit" class="button">Save</button>
                    </form>
                </div>
            </div>
            <div class="w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
@endsection