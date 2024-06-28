<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
    </h1>

    <div>

        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            @foreach($movies as $movie)
                <div class="flex flex-col pb-5">
                    <dd class="text-lg font-semibold mb-4 p-2" wire:click="selectMovie({{ $movie['id'] }})">{{ $movie['title'] }}</dd>
                    <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">{{ $movie['overview'] }}</dt>
                    <dt><button type="button" wire:click="selectMovie({{ $movie['id'] }})" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">View details</button></dt>
                </div>
            @endforeach
        </dl>

    </div>

</div>

