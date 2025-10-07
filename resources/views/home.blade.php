@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<x-header>
    <div class="h-screen bg-cover bg-center flex items-center justify-center text-center"
        style="background-image: url('img/bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

        <div class="">
            <h1 class="text-gray-100 sm:text-5xl">Selamat Datang</h1>
            <h1 class="text-gray-100 sm:text-5xl">di SMK Sukapura</h1>
        </div>
    </div>

    {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/bg.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-2.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-3.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-4.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div> --}}


    {{-- profil --}}
    <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                    <div class="lg:max-w-lg">
                        <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Profil
                        </p>
                        @foreach ($profils as $profil)
                            <table class=" min-w-full border-spacing-0 mx-auto mt-3">
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <th
                                            class=" text-left w-56 px-6 py-3 font-medium align-top text-gray-500 dark:text-gray-400">
                                            {{ $profil->isi }}
                                        </th>
                                        <td
                                            class="px-6 py-3 text-sm font-medium text-shadow-gray-900 dark:text-gray-100">
                                            {{ $profil->deskripsi }}</td>
                                    </tr>
                        @endforeach
                        {{-- <tr>
                         
                            <td class="px-0 py-3 text-sm font-medium text-shadow-gray-900 dark:text-gray-100">
                                <a href="/profil">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Selengkapnya</button>
                                </a>
                            </td>
                        </tr> --}}
                        </tbody>
                        </table>

                    </div>
                </div>
                <img width="1442" height="1442" src="img/fotbar.jpg" alt="Product screenshot"
                    class="w-full h-auto rounded-xl shadow-xl ring-1 ring-white/10" />

                {{-- jumlah siswa --}}

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-70 px-20 py-10">
                    <div
                        class="w-60 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        {{-- @foreach ($siswagurus as $siswaguru) --}}
                        {{-- jumlah siswa --}}
                        <div class="flex flex-col items-center p-6">
                            <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>

                            {{-- <img class="w-24 h-24 mb-3 shadow-lg" src="img/logo.jpg" alt="Bonnie image" /> --}}
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jumlah Siswa</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $siswagurus->siswa }}</span>
                        </div>
                    </div>
                    {{-- jumlah siswi --}}
                    <div
                        class="w-60 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center p-6">
                            <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>

                            {{-- <img class="w-24 h-24 mb-3 shadow-lg" src="img/logo.jpg" alt="Bonnie image" /> --}}
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jumlah Siswi</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $siswagurus->siswi }}</span>
                        </div>
                    </div>
                    {{-- jumlah murid --}}
                    <div
                        class="w-60 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center p-6">
                            <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>

                            {{-- <img class="w-24 h-24 mb-3 shadow-lg" src="img/logo.jpg" alt="Bonnie image" /> --}}
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jumlah Murid</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $siswagurus->murid }}</span>
                        </div>
                    </div>

                    <div
                        class="w-60 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 lg:grid-cols-3">
                        {{-- jumlah guru --}}
                        <div class="flex flex-col items-center p-6">
                            <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>

                            {{-- <img class="w-24 h-24 mb-3 shadow-lg" src="img/logo.jpg" alt="Bonnie image" /> --}}
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jumlah Guru</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $siswagurus->guru }}</span>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>

    {{-- galeri --}}
    <div class="bg-gray-900 py-15 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Galeri Kegiatan
                </h2>
                <p class="mt-2 text-lg/8 text-gray-300">Learn how to grow your business with our expert advice.</p>
            </div>
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700  sm:mt-10  lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($galeris as $galeri)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative grow">
                            <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                                <span class="absolute inset-0"></span>
                                {{ $galeri->judul }}
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">
                                {{ $galeri->deskripsi }}
                            </p>
                        </div>

                        <!-- Gambar penuh ke samping -->
                        <div class="relative mt-8 w-full">
                            <img src="img/t.jpeg" alt=""
                                class="w-full h-48 object-cover rounded-lg bg-gray-800" />
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</x-header>
