<x-header>
    <div class="bg-gray-900 py-15 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Galeri Kegiatan
                </h2>
                <p class="mt-2 text-lg/8 text-gray-300">Learn how to grow your business with our expert advice.</p>
            </div>
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700  sm:mt-10  lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- @foreach ($berandas as $beranda) --}}
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative grow">
                        <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                            <span class="absolute inset-0"></span>
                            judul {{-- {{ $beranda->judul }} --}}
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">
                            deskipsi {{-- {{ $beranda->deskripsi }} --}}
                        </p>
                    </div>

                    <!-- Gambar penuh ke samping -->
                    <div class="relative mt-8 w-full">
                        <img src="img/t.jpeg" alt="" class="w-full h-48 object-cover rounded-lg bg-gray-800" />
                    </div>
                </article>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</x-header>
