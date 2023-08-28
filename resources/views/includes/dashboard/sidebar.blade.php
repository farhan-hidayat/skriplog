<div class="border-right" id="sidebar-wrapper">
    <div class="text-center sidebar-heading">
        <img src="/images/logo.png" alt="" class="my-4" style="max-width: 125px" />
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}"
            class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : '' }}">
            Dashboard
        </a>
        <a href="{{ route('jurusan') }}"
            class="list-group-item list-group-item-action {{ request()->is('jurusan') ? 'active' : '' }}">
            Data Jurusan
        </a>
        <a href="/dashboard-transactions.html" class="list-group-item list-group-item-action">
            Data Skripsi
        </a>
        <a href="/dashboard-settings.html" class="list-group-item list-group-item-action">
            Data Tesis
        </a>
        <a href="/dashboard-account.html" class="list-group-item list-group-item-action">
            My Account
        </a>
    </div>
</div>
