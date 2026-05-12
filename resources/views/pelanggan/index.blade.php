<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halo, Mau Makan Apa Hari Ini?') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-900">Rekomendasi Katering Terlaris</h3>
                <p class="text-gray-600">Pilihan menu sehat dan lezat untuk harimu.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Contoh Card Menu (Placeholder) -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                    <div class="h-40 bg-gray-200"></div>
                    <div class="p-4">
                        <span class="text-xs font-bold text-orange-500 uppercase tracking-wide">Nasi Box</span>
                        <h4 class="font-bold text-lg text-gray-800 mt-1 uppercase">Ayam Bakar Madu</h4>
                        <p class="text-gray-600 text-sm mt-1">Katering Bunda - Porsi Kenyang</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-orange-600 font-bold">Rp 25.000</span>
                            <button class="bg-gray-800 text-white text-xs px-3 py-1 rounded hover:bg-gray-700">Pesan</button>
                        </div>
                    </div>
                </div>
                <!-- Card lainnya bisa di-looping nantinya -->
            </div>
        </div>
    </div>
</x-app-layout>
