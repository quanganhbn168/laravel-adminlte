@php
    $menu = config('menu');
@endphp

<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
    @foreach ($menu as $item)
        @if (!empty($item['submenu']))
            @php
                $open = is_open_menu($item['submenu']);
            @endphp
            <li class="nav-item {{ $open }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon {{ $item['icon'] }}"></i>
                    <p>
                        {{ $item['title'] }}
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @foreach ($item['submenu'] as $sub)
                        <li class="nav-item">
                            <a href="{{ route($sub['route']) }}" class="nav-link {{ is_active_menu($sub['route']) }}">
                                <i class="nav-icon {{ $sub['icon'] }}"></i>
                                <p>{{ $sub['title'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="nav-item">
                <a
                    href="{{ $item['route'] ?? false ? route($item['route']) : ($item['url'] ?? '#') }}"
                    class="nav-link {{ isset($item['route']) ? is_active_menu($item['route']) : '' }}"
                >
                    <i class="nav-icon {{ $item['icon'] }}"></i>
                    <p>{{ $item['title'] }}</p>
                </a>
            </li>
        @endif
    @endforeach
</ul>
