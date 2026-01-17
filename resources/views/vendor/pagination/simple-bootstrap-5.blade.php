@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{!! __('pagination.previous') !!}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">{!! __('pagination.next') !!}</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">{!! __('pagination.next') !!}</span>
                </li>
            @endif
        </ul>
    </nav>
@endif



{{--<div class="row align-items-center">--}}
{{--    <div class="col-md-6">--}}
{{--        <p class="mb-0 text-muted">Showing 1 to 3 of 3 entries</p>--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <nav>--}}
{{--            <ul class="pagination justify-content-md-end mb-0">--}}
{{--                <li class="page-item disabled">--}}
{{--                    <a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a>--}}
{{--                </li>--}}
{{--                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                <li class="page-item disabled">--}}
{{--                    <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</div>--}}
