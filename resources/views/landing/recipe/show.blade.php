<x-landing-layout>
    <section class="container mx-auto">
        <div class="mx-auto md:px-6 p-8">
            <div class="h-3/4 rounded-lg bg-white shadow-lg p-8 flex flex-col">
                <div class="flex flex-col justify-center items-center">
                    <div class="text-center md:text-left mb-6">
                        <h2 class="text-2xl font-bold text-black">
                            {{ $post->title }}
                        </h2>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <div class="w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                            <img src="{{ asset('storage/posts/' . $post->image) }}" alt="..."
                                class="xl:w-full xl:h-3/6 rounded-lg" />
                        </div>
                        <div class="w-96 shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                            <div class="p-8 md:px-12">
                                <div style="max-height: 4.8em; overflow: hidden;">
                                    <p class="text-gray-800">
                                        {!! $post->content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-4/12 xl:ml-40 xl:mt-6">
                    <h1 class="text-xl font-bold text-black"># Recipe</h1>
                    <div class="pt-2">
                        @foreach ($post->recipes as $recipe)
                            <p>{{ $recipe->recipe }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-4/12 xl:ml-32 xl:mt-56">
                    <h1 class="text-xl font-bold text-black"># How to cook</h1>
                    <div class="pt-2 ">
                        @foreach ($post->recipes as $recipe)
                            <p>{{ $recipe->cara_memasak }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
           <div class="mt-5 xl:ml-40 xl:mt-20">
            <h1 class="text-xl font-bold text-black"># Recommended Places to Eat</h1>
            <div class="mt-2 ml-1">
                @foreach ($post->alamats as $alamat)
                <h1 class="text-black text-lg font-bold pt-2">- {{ $alamat->nama_tempat}}</h1>
                <div class="ml-3 text-blue-400">
                    <p><a href="https://www.google.com/maps?q={{ urlencode($alamat->nama_tempat . ' ' . $alamat->alamat) }}" target="_blank">{{ $alamat->alamat }}</a></p>
                </div>
                <hr class="py-1 w-full border-gray-500">
            @endforeach
            </div>
           </div>
        </div>
    </section>
</x-landing-layout>
