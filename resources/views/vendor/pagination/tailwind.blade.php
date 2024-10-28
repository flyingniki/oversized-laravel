@if ($paginator->hasPages())
    <div class="pagination all-services__pagination">
        <ul class="pagination__list clear-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination__item">
                    <a class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-left-control.svg" alt="previous">
                    </a>
                </li>
            @else
                <li class="pagination__item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-left-control.svg" alt="previous">
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination__item">
                            <a class="pagination__link pagination__link--active">{{ $page }}</a>
                        </li>
                    @else
                        <li class="pagination__item">
                            <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-right-control.svg" alt="next">
                    </a>
                </li>
            @else
                <li class="pagination__item">
                    <a class="pagination__link">
                        <img class="pagination__img" src="/img/icons/arrow-right-control.svg" alt="next">
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif
