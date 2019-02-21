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

                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card mb-3">Lorem ipsum</div>
                    <div class="card">Lorem ipsum</div>
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