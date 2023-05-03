@extends('layout.app')

@section('page.main')
{{-- Jumbo --}}
<section id="jumbo"></section>
{{-- /Jumbo --}}
{{-- Main content --}}
<section id="content">
    <div class="container-card container">
        {{-- Tag serie name --}}
        <div class="tag">CURRENT SERIES</div>
        {{-- /Tag serie name --}}
        {{-- Comics card --}}
        <div class="row row-cols-1 row-cols-md-6 g-4 current">
            @foreach ($comics as $comic)
            <div class="col">
                {{-- Single comic --}}
                <div class="card bg-transparent border-0 h-100">
                    {{-- Comic image --}}
                    <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt="{{ $comic['title']}}">
                    {{-- /Comic image --}}
                    <div class="card-body">
                        {{-- Comic title --}}
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        {{-- /Comic title --}}
                    </div>
                </div>
                {{-- /Single comic --}}
            </div>
            @endforeach
        </div>
        {{-- /Comics card --}}
        {{-- Pagination --}}
        <button type="button" class="load-more">LOAD MORE</button>
        {{-- /Pagination --}}
    </section>
</section>
{{-- /Main content --}}
{{-- Secondary menu --}}
<section>
    <div class="sub-menu">
        <div class="wrapper container">
            <div class="row h-100">
            @foreach ($cards as $item)    
            <a href="{{ $item['target'] }}" class="col d-flex align-items-center">
                    <img src="{{ $item['url'] }}" alt="Icon {{ $item['name'] }}" class="">
                    <div class="text">{{ $item['name'] }}</div>
            </a>
            @endforeach
            </div>
        </div>
    </div>
</section>
{{-- /Secondary menu --}}
@endsection