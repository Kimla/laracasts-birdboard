<a href="{{ $project->path() }}" class="card h-full">
    <h3 class="font-normal text-xl py-4 pl-5 -ml-5 border-l-4 border-blue-light mb-3">{{ $project->title }}</h3>
    <div class="text-grey">{{ str_limit($project->description) }}</div>
</a>