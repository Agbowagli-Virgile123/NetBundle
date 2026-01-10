@props(['badge' => '', 'title' => '', 'subTitle' => ''])

<div class="text-center mb-5 fade-up">
    @if (!empty($badge))
        <span class="section-badge">{{$badge}}</span>
    @endif

    <h2 class="section-title fw-bold mb-3">{{$title}}</h2>

    @if(!empty($subTitle))
        <p class="section-subtitle text-muted">{{ $subTitle }}</p>
    @endif
</div>
