<!-- Ganti bagian Navigation Links (sekitar baris 13-18) -->
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Beranda') }}
    </x-nav-link>   

    @if(Auth::user()->role === 'admin')
        <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
            Manage Catering
        </x-nav-link>
    @endif

    @if(Auth::user()->role === 'karyawan')
        <x-nav-link href="{{ route('karyawan.dashboard') }}" :active="request()->routeIs('karyawan.dashboard')">
            Pesanan Masuk
        </x-nav-link>
    @endif
</div>
