<footer>
    <div class="bg">
        <div class="secondary-menu">
            <div class="menu">
                @foreach ($menu as $item)    
                <ul v-for="section in menu" class="category">
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
    <FooterActionsComponents />
</footer>