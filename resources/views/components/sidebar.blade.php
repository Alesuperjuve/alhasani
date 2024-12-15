<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach($menu as $item)
            <li class="nav-item nav-category">{{ $item['title'] }}</li>

            @foreach($item['tombol'] as $tombol)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route($tombol['link']) }}">
                        <i class="{{ $tombol['icon'] }}"></i>
                        <span class="menu-title">{{ $tombol['nama'] }}</span>
                    </a>
                </li>
            @endforeach
        @endforeach
    </ul>
</nav>
