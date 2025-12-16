<x-layout>
    @foreach ($jobs as $job)
        <p>{{ $job->title }} </p>
    @endforeach
</x-layout>
