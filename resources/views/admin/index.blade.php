<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard - Master Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Statistik Ringkas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-blue-500 overflow-hidden shadow-xl sm:rounded-lg p-6 text-white">
                    <div class="text-sm opacity-75">Total Merchant</div>
                    <div class="text-3xl font-bold">12 Katering</div>
                </div>
                <div class="bg-green-500 overflow-hidden shadow-xl sm:rounded-lg p-6 text-white">
                    <div class="text-sm opacity-75">Total Pelanggan</div>
                    <div class="text-3xl font-bold">450 User</div>
                </div>
                <div class="bg-purple-500 overflow-hidden shadow-xl sm:rounded-lg p-6 text-white">
                    <div class="text-sm opacity-75">Total Pendapatan</div>
                    <div class="text-3xl font-bold">Rp 12.500.000</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Aktivitas Terkini</h3>
                <p class="text-gray-600 italic">Daftar login terakhir dan log sistem akan muncul di sini.</p>
            </div>
        </div>
    </div>
</x-app-layout>
