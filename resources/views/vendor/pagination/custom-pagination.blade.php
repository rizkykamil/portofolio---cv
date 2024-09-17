@if ($paginator->hasPages())
    <ul class="list-unstyled">
        <!-- Tombol Sebelumnya -->
        @if ($paginator->onFirstPage())
            <li class="prev">
                <button disabled>
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path>
                    </svg>
                </button>
            </li>
        @else
            <li class="prev">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <button>
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path>
                        </svg>
                    </button>
                </a>
            </li>
        @endif

        <!-- Nomor Halaman -->
        @php
            $ellipsisCount = 0;
        @endphp
        @foreach ($elements as $element)
            @if (is_string($element))
                <li>
                    @php
                        $ellipsisCount++;
                    @endphp
                    @if($ellipsisCount == 1)
                    <!-- First Ellipsis, Special Link -->
                    <a href="{{ url('blog?page=' . 3) }}">
                        <button class="next-page-btn">
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                            <span class="next-page">
                                <svg class="icon icon-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 17l-5-5 5-5"></path>
                                    <path d="M11 17l-5-5 5-5"></path>
                                </svg>                                
                            </span>
                            <span class="next-page-number">
                                3
                            </span>
                        </button>
                    </a>
                    @else
                    <!-- Second Ellipsis, Normal Behavior -->
                    <a href="{{ url('blog?page=' . ($paginator->lastPage() - 2)) }}">
                        <button class="next-page-btn">
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                            <span class="next-page">
                                <svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 17 5-5-5-5"></path>
                                    <path d="m13 17 5-5-5-5"></path>
                                </svg>
                            </span>
                            <span class="next-page-number">
                                {{ $paginator->lastPage() - 2 }}
                            </span>
                        </button>
                    </a>
                    @endif
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><button class="active" style="border-color: #0d6efd; color: #0d6efd;">{{ $page }}</button></li>
                    @else
                        <li><a href="{{ $url }}"><button>{{ $page }}</button></a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Tombol Selanjutnya -->
        @if ($paginator->hasMorePages())
            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <button>
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                        </svg>
                    </button>
                </a>
            </li>
        @else
            <li class="next">
                <button disabled>
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
                    </svg>
                </button>
            </li>
        @endif
    </ul>
@endif
