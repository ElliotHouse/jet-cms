<div class="divide-y divide-red-200" x-data="{ show: false }">

    <nav class="flex items-center bg-gray-100 px-3 py-2 shadow-lg sticky">
        <div>
            <button @click="show =! show" class="block h-8 mr-3 text-gray-200 items-center hover:text-gray-200 focus:text-gray-200 focus:outline-none sm:hidden">
                <svg class="w-8 fill-current" viewBox="0 0 24 24">                            
                    <path x-show="!show" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    <path x-show="show" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                </svg>
            </button>
        </div>
        <div class="h-12 w-full flex items-center">
            <a href="{{ url('/')}}" class="w-full">
                <span class="text-4xl">🪴</span>
                <h1 class="inline text-2xl font-bold uppercase font-mono">
                    {{ config('app.name') }}
                </h1>
            </a>
        </div>
        <div class="flex justify-end sm:w-8/12">
            {{-- Top Navigation --}}
            <ul class="hidden sm:flex sm:text-left text-gray-600 text-xs">
                @foreach ($topNavLinks as $item)
                    <a href="{{ url('/'.$item->slug) }}">
                        <li class="cursor-pointer px-2 py-2 hover:bg-gray-100 hover:shadow rounded">{{ $item->label }}</li>
                    </a>
                @endforeach 
            </ul>
        </div>
    </nav>

    <div class="sm:flex sm:min-h-screen">

        <aside class="bg-gray-100 text-gray-700 shadow-lg divide-y divide-gray-700 divide-dashed sm:w-4/12 md:w-3/12 lg:w-2/12">
            {{-- Desktop Web View --}}
            <ul class="hidden text-gray-600 text-xs sm:block sm:text-left">
                @foreach ($sideBarLinks as $item)
                    <a href="{{ url('/'.$item->slug) }}">
                        <li class="cursor-pointer px-2 py-2 hover:bg-gray-100 hover:shadow rounded">{{ $item->label }}</li>
                    </a>
                @endforeach                
            </ul>

            {{-- Mobile Web View --}}
            <div :class="show ? 'block' : 'hidden'" class="pb-3 divide-y divide-gray-800 block sm:hidden">
                <ul class="text-gray-200 text-xs">
                    @foreach ($sideBarLinks as $item)
                        <a href="{{ url('/'.$item->slug) }}">
                            <li class="cursor-pointer px-2 py-2 hover:bg-gray-100 hover:shadow rounded">{{ $item->label }}</li>
                        </a>
                    @endforeach      
                </ul>

                {{-- Top Navigation Mobile Web View --}}
                <ul class="text-gray-200 text-xs">
                    @foreach ($topNavLinks as $item)
                        <a href="{{ url('/'.$item->slug) }}">
                            <li class="cursor-pointer px-2 py-2 hover:bg-gray-100 hover:shadow rounded">{{ $item->label }}</li>
                        </a>
                    @endforeach 
                </ul>
            </div>
        </aside>

        <main class="container mx-auto max-w-4xl min-h-screen bg-gray-100 mt-8 p-12">
            <section class="divide-y text-gray-900">    
                <h1 class="text-3xl font-bold">{{ $title }}</h1>
                <article>
                    <div class="mt-5 text-sm">                        
                         {!! $content !!}
                    </div>
                </article>
            </section>
        </main>

    </div>    
</div>
