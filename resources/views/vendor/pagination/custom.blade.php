@if ($paginator->hasPages())
    <div class="flex flex-col items-center my-10">
        <div class="flex text-gray-700">
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </a>
            @endif
            <div class="flex h-12 font-medium rounded-full bg-gray-200">
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">{{ $element }}</div>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-blue-500 text-white ">{{ $page }}</div>
                            @else
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  "><a href="{{ $url }}">{{ $page }}</a></div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
            @endif
        </div>
    </div>
@endif
