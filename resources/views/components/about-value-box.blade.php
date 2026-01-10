@props(['number' => 1, 'title'=> '', 'content' => '', 'delayValue' => 0 ])

<div class="col-md-6 col-lg-3 fade-up" style="animation-delay: {{ $delayValue }}s;">
    <div class="value-card">
        <div class="value-number">0{{ $number }}</div>
        <h5 class="fw-bold mb-2">{{$title}}</h5>
        <p class="text-muted small">{{ $content }}</p>
    </div>
</div>
