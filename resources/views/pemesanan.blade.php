<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <main class="bg-black">
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96 lg:h-[34em] opacity-90">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/slide1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="images/slide2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/slide3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </main>

        <section class="px-4 font-poppins bg-slate-100 py-10 lg:px-32 justify-center">
            <hr class="h-[2px] mb-3 border border-gray-900">
            <h1 class="font-semibold text-2xl uppercase mb-4">Mode Pemesanan</h1>

            <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-8 lg:grid-cols-3">
                @if ($menuItems->isEmpty())
                    <p>Pilih mode pemesanan yang tersedia</p>
                @else
                    @foreach ($menuItems as $item)
                        <div>
                            <div class="relative h-[20em]">
                                <img src="{{ asset('images/' . $item->photo) }}" alt="{{ $item->name }}"
                                    class="w-full h-[20em]">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <a href="{{ route('menu.show', $item->slug) }}"
                                        class="px-4 py-2 font-semibold text-slate-100 ring-1 ring-yellow-400 bg-transparent rounded hover:bg-yellow-400 duration-300">Lihat
                                        Detail</a>

                                </div>
                            </div>
                            <div class="mt-3">
                                <h1 class="text-2xl font-medium uppercase">{{ $item->name }}</h1>
                                <div class="flex items-center gap-x-2">
                                    <h1 class="text-xl font-medium text-yellow-400">Rp
                                        {{ number_format($item->price, 0, ',', '.') }}</h1>
                                    <h2 class="text-sm line-through">
                                        Rp{{ number_format($item->price * 1.2, 0, ',', '.') }}</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                <div
                    class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Box</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div class="text-lg space-y-2 font-poppins">
                            <div>Restoran kami menawarkan pengantaran makanan dalam bentuk box untuk kebutuhan sesuai porsi.</div>
                            <div>
                                <a href="/pesanbox" class="underline text-yellow-400 font-semibold">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Prasmanan</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div class="text-lg space-y-2 font-poppins">
                            <div>Restoran kami menawarkan pengantaran makanan dalam bentuk prasmanan untuk kepuasan bagi anda.</div>
                            <div>
                                <a href="/pesanprasmanan" class="underline text-yellow-400 font-semibold">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-layout>
