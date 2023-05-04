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
        <div class="row">
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
                <div class="description">
                    <p>{{ $comics['description'] }}</p>
                </div>
                
            </div>
            {{-- Sidebar --}}
            <div class="col-4 adv">
                <h2 class="text-end">ADVERTISEMENT</h3>
                <div class="text-end"><img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt=""></div>
            </div>
        </div>

    </div>
</section>
{{-- /Main content --}}
@endsection