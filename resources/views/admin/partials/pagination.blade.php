<ul class="pagination">
    <!-- Previous Page Link -->
    @if ($elements->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link page-link-nav" aria-hidden="true">&laquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link page-link-nav" href="{{ $elements->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $comments->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }} <span class="sr-only">(current)</span></span></li>
                @else
                    <li class="page-item"><a class="page-link page-link-nav" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($elements->hasMorePages())
        <li class="page-item">
            <a class="page-link page-link-nav" href="{{ $elements->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <span class="page-link page-link-nav" aria-hidden="true">&raquo;</span>
        </li>
    @endif
</ul>
