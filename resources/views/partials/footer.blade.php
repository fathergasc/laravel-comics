<footer>
    <div  id="footer_top">
        <div class="container">
            <ul class="product d-flex justify-content-center align-items-center">
                @foreach (config('footerTopLinks') as $link)
                <li class="my-5 mx-3 d-flex justify-space-around align-items-center">
                    <a href="{{$link['url']}}">
                        <img class="product-img" src="images/{{$link['image']}}" alt="{{$link['text']}}">
                        <span class="text-uppercase text-white px-3">{{$link['text']}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer_top">
        <div class="container d-flex justify-content-between">
            <div class="lists pt-5 pb-3 d-flex flex-column align-content-start flex-wrap">
            <ul>
                <span class="fs-5 fw-bold text-white">DC COMICS</span>
                @foreach(config('footerComicsLinks') as $link)
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
            <ul>
                <span class="fs-5 fw-bold text-white">SHOP</span>
                @foreach (config('footerShopLinks') as $link)
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
            <ul>
                <span class="fs-5 fw-bold text-white">DC</span>
                @foreach (config('footerDcLinks') as $link)
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
            <ul>
                <span class="fs-5 fw-bold text-white">SITES</span>
                @foreach (config('footerSitesLinks') as $link)
                <li>
                    <a href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="big-logo-footer">
        </div>
        </div>

    </div>

    <div class="footer_bot">
        <div class="container d-flex justify-content-between align-items-center p-5">
            <div class="footer_bot_l">
                <a href="#"><span id="sign-up">SIGN UP NOW!</span></a>
            </div>
            <div class="footer_bot_r d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-bold" id="follow">FOLLOW US</span>
                <ul class="contacts-list d-flex justify-content-between align-items-center">
                    @foreach (config('footerBotSocials') as $link)
                    <li class="px-2 scaleonhover">
                        <a href="{{$link['url']}}">
                            <img src="images/{{$link['image']}}" :alt="contact.text">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
