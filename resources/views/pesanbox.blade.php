<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start Main --}}
        <main class="h-screen bg-catering font-poppins flex items-center">
            <div class="absolute inset-0 bg-black opacity-40 z-0 h-screen"></div>
            <div class="relative text-slate-100 z-10 flex flex-col items-start pl-4">
                <h2 class="text-xl md:text-3xl">Pesan Box</h2>
                <h1 class="text-3xl font-semibold text-yellow-400 md:text-5xl">Pondora Catering</h1>
                <p class="text-md md:text-lg">Menyediakan kebutuhan catering sejak 2022</p>
            </div>
        </main>
        {{-- End Main --}}

        {{-- Start Menu Section --}}
        <section class="bg-slate-100 font-poppins py-10 lg:px-32">
            <div class="text-center pb-6">
                <h1 class="text-4xl font-euphoria">Daftar Menu Box</h1>
            </div>

            <div class="grid grid-cols-1 gap-y-6 md:grid-cols-2 lg:grid-cols-3 md:gap-x-8">
                @foreach ($menuItems as $item)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="overflow-hidden rounded-lg mb-4">
                            <img src="{{ asset('images/' . $item->photo) }}" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110" alt="{{ $item->name }}">
                        </div>
                        <h2 class="text-xl font-semibold">{{ $item->name }}</h2>
                        <p class="text-gray-700 mt-2">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <div class="flex justify-between items-center mt-4">
                            <button class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500" onclick="addToFavorites('{{ $item->id }}')">Tambah ke Favorit</button>
                            <span id="favorites-count-{{ $item->id }}" class="text-gray-600">{{ $item->favorites_count }} Favorit</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- End Menu Section --}}

        {{-- Start Cart Section --}}
        <section class="bg-slate-100 font-poppins py-10 lg:px-32">
            <div class="text-center pb-6">
                <h1 class="text-4xl font-euphoria">Keranjang Pemesanan</h1>
            </div>

            <div id="cart-items" class="grid grid-cols-1 gap-y-6">
                <!-- Cart items will be dynamically inserted here -->
            </div>

            <div class="text-center pt-6">
                <h2 class="text-2xl font-semibold">Total Harga: Rp <span id="total-price">0</span></h2>
                <button class="mt-4 px-6 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Pesan Sekarang</button>
            </div>
        </section>
        {{-- End Cart Section --}}
    @endsection

    @push('scripts')
        <script>
            let cart = [];
            let totalPrice = 0;

            function addToFavorites(menuId) {
                // Implement the logic to add the menu item to favorites
                // Update the favorites count display
                const countElement = document.getElementById(`favorites-count-${menuId}`);
                countElement.textContent = parseInt(countElement.textContent) + 1 + ' Favorit';
            }

            function addToCart(menuId, name, price) {
                cart.push({ id: menuId, name, price });
                totalPrice += price;
                updateCartDisplay();
            }

            function updateCartDisplay() {
                const cartItemsContainer = document.getElementById('cart-items');
                cartItemsContainer.innerHTML = '';
                cart.forEach(item => {
                    const cartItem = document.createElement('div');
                    cartItem.className = 'bg-white p-4 rounded-lg shadow-md flex justify-between items-center';
                    cartItem.innerHTML = `<span>${item.name}</span><span>Rp ${item.price.toLocaleString()}</span>`;
                    cartItemsContainer.appendChild(cartItem);
                });
                document.getElementById('total-price').textContent = totalPrice.toLocaleString();
            }
        </script>
    @endpush
</x-layout>