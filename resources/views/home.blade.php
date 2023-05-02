@extends('layout.app')

@section('page.main')
<section id="jumbo"></section>
<section id="content">
    <div class="container-home">
        <div class="tag">CURRENT SERIES</div>
        <section class="current">
            @foreach ($comics as $comic)
                <div class="single">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    <h2>{{ $comic['title'] }}</h2>
                </div>
            @endforeach
        </section>        
        <button type="button" class="load-more">LOAD MORE</button>
    </div>
</section>
<section>
    <div class="sub-menu">
        <div class="wrapper">
                @foreach ($cards as $item)    
                <a href="{{ $item['target'] }}">
                    <div>
                        <img src="{{ $item['url'] }}" alt="Icon {{ $item['name'] }}">
                        <div class="text">{{ $item['name'] }}</div>
                    </div>
                </a>
                @endforeach
        </div>
        <!-- </div> -->
    </div>
</section>
@endsection