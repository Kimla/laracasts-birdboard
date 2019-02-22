@extends('layouts.app')
@section('content')
    <header class="flex items-end justify-between mb-8">
        <p class="text-grey text-small font-normal">
            <a href="/projects" class="text-grey text-small font-normal no-underline">My projects</a> / {{ $project->title }}
        </p>
        <a href="/projects/create" class="button">New project</a>
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
                    <textarea class="card w-full h-48 resize-none">Lorem ipsum</textarea>
                </div>
            </div>
            <div class="w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
@endsection