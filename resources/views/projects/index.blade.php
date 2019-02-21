@extends('layouts.app')
@section('content')
    <div class="mb-3">
        <a href="/projects/create">New project</a>
    </div>

    <div class="flex flex-wrap">
        @forelse ($projects as $project)
            <div class="bg-white mr-4 rounded shadow w-1/3 p-5">
                <h3 class="font-normal text-xl py-6">{{ $project->title }}</h3>
                <div class="text-grey">{{ str_limit($project->description) }}</div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </div>

@endsection
