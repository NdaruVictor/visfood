<x-landing-layout>
    <section class="max-w-5xl p-6 mx-auto rounded-md">
        <div class="container px-6 py-12 mx-auto">
            <div class="text-center mt-10">
                <h1 class="mt-2 text-2xl font-bold text-gray-800 md:text-3xl">Contact Us</h1>
            </div>
            <div class="text-center mt-10">
                <p class="mt-2 text-base text-gray-600 md:text-sm">Here you can recommend places to eat, recipes and your favorite food !!!</p>
            </div>
            <div class="pt-10 mb-10">
                <form class="" action="{{ route('contact.send')}}" method="POST">
                    @csrf
                    <div class="-mx-2 md:items-center md:flex">
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm text-gray-600 font-semibold">Full
                                Name</label>
                            <input type="text" placeholder="Your Name" name="name"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-slate-50 border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                        <div class="flex-1 px-2 mt-4 md:mt-0">
                            <label class="block mb-2 text-sm text-gray-600 font-semibold">Email
                                address</label>
                            <input type="email" placeholder="youremail@gmail.com" name="email"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-slate-50 border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <label class="block mb-2 text-sm text-gray-600 font-semibold">Message</label>
                        <textarea name="message"
                            class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-slate-50 border border-gray-300 rounded-md md:h-56 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Message"></textarea>
                    </div>
                    <button
                        class="px-6 py-2 mt-5 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-lg  focus:outline-none focus:ring focus:ring-black focus:ring-opacity-80" style="background-color: #C5C171">
                        SUBMIT
                    </button>
                </form>
            </div>
            <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4446869103876!2d111.71097837500778!3d-8.056040091971452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791b2b0606b7a5%3A0x4a928b26bb669a9b!2sSMKN%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1698128814507!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </section>
</x-landing-layout>
