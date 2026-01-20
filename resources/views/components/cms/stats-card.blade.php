@props([
    'bgColor' => '',
    'icon' => '',
    'statNumber' => 0,
    'label' => ''
])

<div class="col-12 col-md-3">
    <div class="stat-card">
        <div class="stat-icon bg-{{$bgColor}}">
            <i class="bi bi-{{$icon}}"></i>
        </div>
        <div class="stat-content">
            <h3 class="stat-number">{{$statNumber}}</h3>
            <p class="stat-label">{{$label}}</p>
        </div>
    </div>
</div>
