@extends('layout.app')

@section('page.main')
{{-- Jumbo --}}
@include('partials.jumbo')
{{-- /Jumbo --}}
{{-- Main content --}}
<section id="details">
    <div class="band">
        <div class="container">
            {{-- Tag serie name --}}
            <div class="tag-img">
                <img src="{{ $comics['thumb'] }}" alt="{{ $comics['title']}}">
            </div>
            {{-- /Tag serie name --}}
        </div>
    </div>
    <div class="container">
        <div class="row pt-5">
            <div class="col-8">
                {{-- Comic title --}}
                <h1>{{ $comics['title'] }}</h1>
                {{-- /Comic title --}}
                {{-- Price bar --}}
                <div class="d-flex align-items-center border-bottom stock">
                    {{-- Left container --}}
                    <div class="left-container d-flex justify-content-between flex-fill">
                        <div class="price px-4">
                            <span>U.S. Price:</span> {{ $comics['price'] }}
                        </div>
                        <div class="available px-4">
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    {{-- /Left container --}}
                    {{-- Right container - dropdown --}}
                    <div class="dropdown border-start ms-auto">
                        <button class="btn rounded-0 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Chech Availablity
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    {{-- /Right container - dropdown --}}
                </div>
                {{-- /Price bar --}}
                <div class="description py-3">
                    <p>{{ $comics['description'] }}</p>
                </div>
                
            </div>
            {{-- Sidebar --}}
            <div class="col-4 adv">
                <h3 class="text-end">ADVERTISEMENT</h3>
                <div class="text-end"><img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adv"></div>
            </div>
        </div>

    </div>
</section>
<section id="extra" class="border-top mt-5 pt-4">
    <div class="container">
        <div class="row gx-5">
            <div class="col-6 pe-4">
                <div class="border-bottom py-3">
                    <h2>Talent</h2>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-4">
                        <h3>Art by:</h3>
                    </div>
                    <div class="col-8 text-normal">
                        @foreach ($comics['artists'] as $artist)
                        @if ($loop->last)
                            <a href="#">{{ $artist }}</a>  
                        @else
                        <a href="#">{{ $artist }}</a>, 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-4">
                        <h3>Written by:</h3>
                    </div>
                    <div class="col-8">
                        @foreach ($comics['writers'] as $writer)
                            @if ($loop->last)
                                <a href="#">{{ $writer }}</a>
                            @else
                                <a href="#">{{ $writer }}</a>, 
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6 ps-4">
                <div class="border-bottom py-3">
                    <h2>Specs</h2>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-4">
                        <h3>Series:</h3>
                    </div>
                    <div class="col-8">
                        <a href="#" class="capital">{{ $comics['series'] }}</a>
                    </div>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-4">
                        <h3>U.S. Price:</h3>
                    </div>
                    <div class="col-8">
                        {{ $comics['price'] }}
                    </div>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-4">
                        <h3>On Sale Date:</h3>
                    </div>
                    <div class="col-8">{{ $comics['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </div>
    <div id="rapid-links" class="border-top mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3 border-start p-3">
                    <a href="#">
                        <div class="rapid-link-text col">Digital comics</div>
                        <div class="rapid-link-img col-1 ms-auto"><img class="a" src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt=""></div>
                    </a>
                </div>
                <div class="col-3 border-start p-3">
                    <a href="#">
                        <div class="rapid-link-text col">Shop DC</div>
                        <div class="rapid-link-img col-1 ms-auto"><img class="b" src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt=""></div>
                    </a>
                </div>
                <div class="col-3 border-start p-3">
                    <a href="#">
                        <div class="rapid-link-text col">Comic Shop Locator</div>
                        <div class="rapid-link-img col-1 ms-auto"><img class="c" src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt=""></div>
                    </a>
                </div>
                <div class="col-3 border-start border-end p-3">
                    <a href="#">
                        <div class="rapid-link-text col">Subscriptions</div>
                        <div class="rapid-link-img col-1 ms-auto"><img class="d" src="{{ Vite::asset('resources/img/cta-icons.png') }}" alt=""></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- /Main content --}}
@endsection