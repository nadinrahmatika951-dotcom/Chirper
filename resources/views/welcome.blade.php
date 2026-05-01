<x-layout>
        <x-slot:tittle>
            Welcome
        </x-slot:tittle>
        <div class="max-w-2xl mx-auto">
            @foreach ($chirps as $chirps )
                <div class="card bg-red-200 shadow mt-8">
                    <div class="card-body">
                        <h2 class="text-xl font-bold">{{ $chirps['author'] }}</h2>
                        <p class="mt-1">{{ $chirps['message'] }}</p>
                        <p class="text-sm  text-gray-500 mt-2">{{ $chirps['time'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-layout>