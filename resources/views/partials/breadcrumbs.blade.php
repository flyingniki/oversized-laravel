@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list clear-list">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumbs__item">
                        <a href="{{ $breadcrumb->url }}" class="breadcrumbs__link">{{ $breadcrumb->title }}</a>
                    </li>
                @else
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__link">{{ $breadcrumb->title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endunless
