@props([
    'delayValue' => 0,
    'icon' => '',
    'title' => '',
    'content' => '',
])

<div class="col-md-6 col-lg-3 fade-up" style="animation-delay: {{ $delayValue }}s;">
    <div class="why-card text-center">
        <div class="why-icon mb-3">
        <i class="bi bi-{{ $icon }}"></i>
        </div>
        <h5 class="fw-bold mb-2">{{ $title }}</h5>
        <p class="text-muted small">{{ $content }}</p>
    </div>
</div>
