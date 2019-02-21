@extends('layouts.app')
@section('content')
    <header class="flex items-end justify-between mb-8">
        <h2 class="text-grey text-small font-normal">My projects</h2>
        <a href="/projects/create" class="button">New project</a>
    </header>

    <main class="flex flex-wrap -m-3">
        @forelse ($projects as $project)
            <div class="p-3 w-1/3">
                @include('projects.card')
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>

@endsection
