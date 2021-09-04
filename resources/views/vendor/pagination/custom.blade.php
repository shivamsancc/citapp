<div class="pagination_blog">
    @if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center ">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"> <a class="" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
            @else
               <li class="page-item"><a class="" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a></li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class=""><li class="page-item current">{{ $page }}</li></a>
                            @else
                                {{-- <li class="page-item current"><a class="" href="{{ $url }}">{{ $page }}</a></li> --}}
                            @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class='flaticon-right-arrow'></i></a></li>
            @else
                <li class="page-item disabled"><a class="" href="#"><i class='flaticon-right-arrow'></i></a>  </li>
            @endif
        </ul>
        @endif
</div>
