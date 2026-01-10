@props(['cardNameClass' => '', 'title' => '', 'iconName' => '', 'content' => ''])

<div class="col-lg-6 fade-up">
    <div class="{{$cardNameClass}}-card h-100">
        <div class="icon-wrapper mb-4">
            <i class="bi bi-{{$iconName}} text-warning"></i>
        </div>
        <h3 class="fw-bold mb-3">{{ $title }}</h3>
        <p class="text-muted">
           {{ $content }}
        </p>
    </div>
</div>
