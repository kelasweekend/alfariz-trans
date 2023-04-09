<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Armada</li>

        <li class="sidebar-item {{ request()->is('admin/armada') ? 'active' : '' }}">
            <a href="{{ route('admin.armada.index') }}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Armada</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('admin/armada/create') ? 'active' : '' }}">
            <a href="{{ route('admin.armada.create') }}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Armada</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Lainnya</li>

        <li class="sidebar-item {{ request()->is('admin/order*') ? 'active' : '' }}">
            <a href="{{ route('admin.orderan.index') }}" class='sidebar-link'>
                <i class="bi bi-cart-fill"></i>
                <span>Invoice Order</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('admin/jadwal*') ? 'active' : '' }}">
            <a href="{{ route('admin.jadwal') }}" class='sidebar-link'>
                <i class="bi bi-star-fill"></i>
                <span>Jadwal Bus</span>
            </a>
        </li>
    </ul>
</div>
