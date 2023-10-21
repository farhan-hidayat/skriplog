<div class="border-right" id="sidebar-wrapper">
    <div class="text-center sidebar-heading">
        <img src="/images/logo.png" alt="" class="my-4" style="max-width: 125px" />
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}"
            class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('faculties.index') }}"
            class="list-group-item list-group-item-action {{ request()->is('faculties*') ? 'active' : '' }}">
            Data Fakultas
        </a>
        <a href="{{ route('majors.index') }}"
            class="list-group-item list-group-item-action {{ request()->is('majors*') ? 'active' : '' }}">
            Data Jurusan
        </a>
        <a href="{{ route('skripsi') }}"
            class="list-group-item list-group-item-action {{ request()->is('skripsi') ? 'active' : '' }}">
            Data Skripsi
        </a>
        <a href="{{ route('tesis') }}"
            class="list-group-item list-group-item-action {{ request()->is('tesis') ? 'active' : '' }}">
            Data Tesis
        </a>
        <a href="{{ route('disertasi') }}"
            class="list-group-item list-group-item-action {{ request()->is('disertasi') ? 'active' : '' }}">
            Data Disertasi
        </a>
        {{-- <a href="/dashboard-account.html" class="list-group-item list-group-item-action">
            My Account
        </a> --}}
    </div>
</div>
