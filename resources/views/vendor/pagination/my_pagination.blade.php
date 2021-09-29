@dump($paginator-> currentPage())
@if ($paginator->hasPages())
    <ul>
        <li><a href="{{ $paginator->previousPageUrl() }}">prev</a></li>
        @foreach($elements as $element)
            @if (is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator-> currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

            @endif
        @endforeach
        <li><a href="{{ $paginator->nextPageUrl() }}">next</a></li>
    </ul>
@endif
