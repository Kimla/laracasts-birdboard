@extends('layouts.app')
@section('content')
    <header class="flex items-center justify-between mb-8">
        <h2 class="text-grey text-small font-normal">My projects</h2>
        <a href="/projects/create" class="button">New project</a>
    </header>

    <main class="flex flex-wrap -m-3">
        @forelse ($projects as $project)
            <div class="p-3 w-1/3">
                <div class="bg-white rounded shadow p-5 h-full">
                    <h3 class="font-normal text-xl py-4 pl-5 -ml-5 border-l-4 border-blue-light mb-3">{{ $project->title }}</h3>
                    <div class="text-grey">{{ str_limit($project->description) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>

@endsection
