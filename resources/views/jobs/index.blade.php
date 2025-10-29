<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
                <a class=" block  px-4 py-6 shadow rounded border border-gray-200 " href="/jobs/{{$job['id']}}">
                   <div class="text-sm font-bold text-blue-500 hover:underline">
                       {{$job->employer->name}}
                   </div>
                    <div>
                       <strong>{{$job['title']}}</strong> - {{$job['salary']}}
                   </div>
                </a>
        @endforeach

        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>
