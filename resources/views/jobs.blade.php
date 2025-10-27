<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
                <a class="text-blue-500 hover:underline block px-4 py-6 shadow rounded border border-gray-200 " href="/jobs/{{$job['id']}}">
                    {{$job['title']}} - {{$job['salary']}}
                </a>
        @endforeach
    </div>
</x-layout>
