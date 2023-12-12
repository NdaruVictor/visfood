<x-landing-layout>
    <div class="container mx-auto">
        <div
            class="h-screen w-full bg-cover bg-fixed bg-[url('https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')]">
            <div class="bg-black/40">
                <div class="w-full h-screen items-center flex flex-col justify-center">
                    <a href="#"
                        class="block max-w- p-6 bg-white/30 border border-black rounded-lg shadow hover:bg-white/50">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Welcome to our food review
                            blog!!!</h5>
                        <p class="font-normal text-black">Here you can look for recommendations for appetizers, main
                            dishes and desserts and you can get the recipes</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-slate-50 py-10" id="menu">
            <div class="w-full ">
                <div class="p-8">
                    <form action="{{ route('landing.search') }}" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Menus, Recipe..." name="search" ">
                            <button type="submit"
                                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="background-color: #C5C171">Search</button>
                        </div>
                    </form>
                </div>
                <div class="font-semibold text-2xl p-8 text-black">
                    <h2>Recommendations</h2>
                </div>
                <div class="pt-3">
                    <div class="grid md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-10">
                         @forelse ($post->take(6) as $p)
                            <x-content.card>
                                <a href="#">
                                    <img class="w-full h-60 md:h-72 object-cover "
                                        src="{{ asset('storage/posts/' . $p->image) }}" alt="" />
                                </a>
                                <div class="px-6 py-4">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $p->title }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                                        {!! $p->content !!}
                                    </p>
                                    <a href="{{ route('recipe.show', $p->id) }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                                        style="background-color: #C5C171">
                                        Read more
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </x-content.card>
                        @empty
                            <h1>null</h1>
                            @endforelse
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-landing-layout>
