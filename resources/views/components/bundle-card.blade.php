@props([
    'tag' => '',
    'size' => 0,
    'valididy' => '',
    'amount' => 0,
    'originalPrice' => 0,
    'delayValue' => 0
])

<div class="col-md-6 col-lg-4 fade-up" style="animation-delay: {{ $delayValue }}s;">
    <div class="bundle-card">
        @if(!empty($tag))
            <div class="bundle-badge">{{$tag}}</div>
        @endif

        <div class="bundle-data">
        <h3 class="bundle-size">{{ $size }}GB</h3>
        <p class="bundle-validity">Valid for {{$valididy}}</p>
        </div>
        <div class="bundle-price">
        <span class="price-amount">GH₵ {{ $amount }}.00</span>
        <span class="price-original">GH₵ {{ $originalPrice }}.00</span>
        </div>
        <ul class="bundle-features">
        <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
        </ul>
        <button class="btn btn-primary w-100 btn-lg fw-bold">
        <i class="bi bi-cart-plus me-2"></i>Buy Now
        </button>
    </div>
</div>
