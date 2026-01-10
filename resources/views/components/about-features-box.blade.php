@props(['iconName' => '', 'title'=> '', 'content' => '', 'delayValue' => 0 ])

<div class="col-md-6 col-lg-4 fade-up" style="animation-delay: {{ $delayValue }}s;">
    <div class="feature-card text-center">
        <div class="feature-icon mb-3">
            <i class="bi bi-{{$iconName}}"></i>
        </div>
        <h4 class="fw-bold mb-3">{{$title}}</h4>
        <p class="text-muted">{{$content}}</p>
    </div>
</div>
