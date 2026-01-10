@props(['path' => '','image' => '','name' => '', 'shortDesc' => ''])

<div class="col-12 col-sm-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
    <a href="{{ $path }}" class="text-decoration-none">
        <div class="card network-card h-100 border-0">
            <div class="card-body text-center p-4">
                <div class="network-logo-wrapper mb-4">
                    <img src="assets/networks/{{$image}}" alt="{{$name}}" class="img-fluid">
                    <div class="network-badge">
                        <i class="bi bi-check-circle-fill"></i> Available
                    </div>
                </div>
                <h4 class="network-title fw-bold mb-2">{{$name}}</h4>
                <p class="network-description text-muted mb-3">{{$shortDesc}}</p>
                <div class="network-arrow">
                    <span>View Bundles</span>
                    <i class="bi bi-arrow-right ms-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>
