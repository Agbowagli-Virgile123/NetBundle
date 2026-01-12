@props([
    'path' => '',
    'title' => '',
    'icon' => '',
    'badge' => '',
    'badgeClass' => '',
])

{{-- active --}}

<li @class(['nav-item'])>
    <a href="{{ $path }}" class="nav-link ">
        <i class="bi bi-{{$icon}}"></i>
        <span>{{$title}}</span>
        @if(filled($badge))
            <span @class(["nav-badge" ,'badge-success' => $badgeClass])>{{$badge}}</span>
        @endif
    </a>
</li>
