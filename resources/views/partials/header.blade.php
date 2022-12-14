
<header class="container d-flex justify-content-between align-items-center">
    <img src="images/dc-logo.png" alt="DC Logo">
    <ul class="">
        @foreach (config('headerLinks') as $link)
            <li class="d-inline-block mx-3" class="({{$link['active']}} == true)?'active':''">
                <a href="{{route($link['text'])}}" class="({{$link['active']}} == true)?'active':''">
                    {{$link['text']}}
                </a>
            </li>

        @endforeach

    </ul>
</header>
<div id="jumbo">
        <img src="images/jumbo.jpg" alt="">
</div>

