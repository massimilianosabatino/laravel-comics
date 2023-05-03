<footer>
    {{-- <section class="bg">
        <div class="secondary-menu">
            <div class="menu container">
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
    </section> --}}
    <section class="bg">
        <div class="secondary-menu container">
            <div class="menu h-100">
                <div class="category  h-100">
                    <div class="row flex-column h-100">
                        @foreach ($menu as $item)    
                        <div class="col-4">
                            <a href="{{$item['link']}}" target="{{$item['target']}}">
                                {{ $item['section'] }}
                            </a>
                            <div class="link">
                                
                                @foreach ($item['linkList'] as $link)    
                                <div>
                                    <a href="{{$link['link']}}" target="{{$link['target']}}">
                                        {{$link['name']}}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="disclaimer">
                        <p>
                            All Site Content TM and &copy 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All right reserved. <a href="#">Cookies Settings</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="logo-img">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
            </div>
        </div>
    </section>
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