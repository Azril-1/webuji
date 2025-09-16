 <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
 <x-header>

     <section class="bg-gray-800 pb-10 pt-14">
         <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-30">

             {{-- kasih jarak 2rem = 32px --}}
             <div>
                 <h2 class="text-white text-left px-6 py-3 font-semibold text-2xl">Profil</h2>

                 @foreach ($profils as $profil)
                     <table class=" min-w-full border-spacing-0 mx-auto mt-3">
                         <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                             <tr>
                                 <th
                                     class=" text-left w-56 px-6 py-3 font-medium align-top text-gray-500 dark:text-gray-400">
                                     {{ $profil->isi }}
                                 </th>
                                 <td class="px-6 py-3 text-sm font-medium text-shadow-gray-900 dark:text-gray-100">
                                     {{ $profil->deskripsi }}</td>
                             </tr>
                 @endforeach
                 </tbody>
                 </table>

             </div>
             <div class="pb-10 pt-3">
                 <h2 class="text-white text-xl font-bold  mb-4">Visi & Misi</h2>
                 <p class="text-gray-500 dark:text-gray-400 pt-5"><span class="font-semibold">Visi:</span>
                 <ul
                     class="list-disc list-inside text-sm font-medium text-shadow-gray-900 dark:text-gray-100 space-y-1">
                     <li> Menjadi sekolah unggul dalam prestasi, berkarakter, dan berdaya saing global.</li>

                     </p>
                     <p class="text-gray-500 dark:text-gray-400 font-semibold">Misi:</p>
                     <ul
                         class="list-disc list-inside text-sm font-medium text-shadow-gray-900 dark:text-gray-100 space-y-1">
                         <li>Meningkatkan kualitas pembelajaran berbasis teknologi.</li>
                         <li>Mengembangkan potensi siswa sesuai bakat dan minat.</li>
                         <li>Menumbuhkan sikap disiplin, tanggung jawab, dan religius.</li>
                         <li>Membangun kerjasama dengan dunia usaha dan industri.</li>
                     </ul>
             </div>

         </div>
         </div>
     </section>
 </x-header>
