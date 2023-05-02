<footer>
    <div class="bg">
        <div class="secondary-menu">
            <div class="menu">
                @foreach ($menu as $item)    
                <ul class="category">
                    <li>
                        <a href="{{$item['link']}}" target="{{$item['target']}}">
                            {{ $item['section'] }}
                        </a>
                        <ul class="link">
                            
                            @foreach ($item['linkList'] as $link)    
                            <li>
                                <a href="{{$link['link']}}" target="{{$link['target']}}">
                                    {{$link['name']}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="logo-img">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
                
            </div>
        </div>
    </div>
    <div class="bg-actions">
        <div class="ms-container">
            <button type="button">SIGN-UP NOW!</button>
            <div class="wrapper">
                <div class="title">FOLLOW US</div>
                <div class="icons">
                    <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Logo Facebook"></a>
                    <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Logo Twitter"></a>
                    <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Logo Youtube"></a>
                    <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Logo Pinterest"></a>
                    <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Logo Periscope"></a>
                </div>
            </div>
        </div>
    </div>
</footer>