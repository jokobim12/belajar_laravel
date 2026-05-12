<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Merchant Dashboard - Panel Katering') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-800">Daftar Menu Makanan Anda</h3>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm transition font-bold">
                        + Tambah Menu Baru
                    </button>
                </div>
                
                <div class="bg-orange-50 border-l-4 border-orange-400 p-4 mb-6">
                    <p class="text-sm text-orange-700">
                        <strong>Info:</strong> Anda memiliki 3 pesanan baru yang perlu diproses hari ini!
                    </p>
                </div>

                <div class="text-center py-10 border-2 border-dashed border-gray-200 rounded-xl">
                    <p class="text-gray-500">Belum ada menu yang ditambahkan. Mulai jualan sekarang!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
