<footer>
    <section class="bg">
        {{-- Container menu and logo --}}
        <div class="secondary-menu container">
            {{-- Secondary menu --}}
            <div class="menu h-100">
                <div class="category  h-100">
                    {{-- Menu element --}}
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
                    {{-- /Menu element --}}
                    {{-- Disclaimer --}}
                    <div class="disclaimer">
                        <p>
                            All Site Content TM and &copy 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All right reserved. <a href="#">Cookies Settings</a>
                        </p>
                    </div>
                    {{-- /Disclaimer --}}
                </div>
            </div>
            {{-- /Secondary menu --}}
            <div class="logo-img">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
            </div>
        </div>
        {{-- /Container menu and logo --}}
    </section>
    <section class="bg-actions">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                {{-- Call to action --}}
                <button type="button" class="col-2">SIGN-UP NOW!</button>
                {{-- /Call to action --}}
                {{-- Social icons --}}
                <div class="social col-5">
                    <div class="title">FOLLOW US</div>
                    <div class="icons">
                        <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Logo Facebook"></a>
                        <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Logo Twitter"></a>
                        <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Logo Youtube"></a>
                        <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Logo Pinterest"></a>
                        <a href="#" target="_blank"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Logo Periscope"></a>
                    </div>
                </div>
                {{-- /Social icons --}}
            </div>
        </div>
    </section>
</footer>