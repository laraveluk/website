<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Add title and meta description  --}}
    <title>LaravelUK Community Event 2019 - Welcome To LaravelUK Community</title>
    <meta name="title" content="LaravelUK Community Event 2019 - Welcome To LaravelUK Community" />
    <meta name="description" content="A Community of web developers in the UK using Laravel and other technologies" />
    <meta name="og_title" content="LaravelUK Community Event 2019 - Welcome To LaravelUK Community" />
    <meta name="og_description" content="A Community of web developers in the UK using Laravel and other technologies" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('/css/event.css') }}">
</head>
<body class="event">
    {{-- Hero --}}
    <section class="hero">
        <div class="hero__container">
            <h1 class="hero__title">Laravel UK<br>Community Event</h1>
            <h2 class="hero__subtitle">Join our list</h2>
            <p class="hero__intro">Keep up to date with all our latest events</p>

            <form class="hero__form" method="POST" action="{{route('pages.event.store')}}">
                @csrf
                <div class="form__group form__group--has-addon">
                    <input 
                        id="email" 
                        type="email" 
                        class="form__input {{ $errors->has('email') ? 'form__input--has-errors' : '' }}" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Email Address" 
                    >
                    <div class="form__addon">
                        <button type="submit" class="form__submit">Sign Up</button>
                    </div>
                
                    @if ($errors->has('email'))
                        <span class="form__errors" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    @if (session()->has('message'))
                        <span class="form__message" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </span>
                    @endif

                    @if (session()->has('note'))
                        <span class="form__note" role="alert">
                            <strong>{{ session('note') }}</strong>
                        </span>
                    @endif
                </div>
            </form>
        </div>
    </section>
    {{-- / Hero --}}
    {{-- About --}}
    <section class="about">
        <div class="about__container">
            <h1 class="about__title"><span>Friday</span> 26th July 2019</h1>
            <div class="about__content">
                <p>The LaravelUK group is proud to announce its first annual community event in Old Street, London. After running for almost 3 year, we are finally bringing a nationwide community together.</p>
                <br>
                <p>Socialising is the aim of the game here. This event is put together to put faces to names of the people that we all speak to on a daily basis online. But amongst all this, we will have a few talks from people within and outside of the community. All this followed with an evening of drinks.</p>
                <br>
                <p>We hope to see as many people as possible there, so don’t hesitate to register your interest above to keep up to date with event info, ticket pricing and some great hotel deals we have lined up for you.</p>
            </div>
        </div>
    </section>
    {{-- / About --}}
    {{-- Speakers --}}
    <section class="speakers">
        <div class="speakers__container">
            <h2 class="speakers__title">Speakers</h2>
        </div>
        <div class="speakers__flex-container">
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://pbs.twimg.com/profile_images/924005430464008192/FQfuRp3R_400x400.jpg)"></div>
                <strong class="speaker__name">Harry Messenger</strong>
                <p class="speaker__about">Web Developer / <a href="https://rhythm.digital/">Rhythm</a></p>
                <p class="speaker__meta"><a href="https://twitter.com/harrysmessenger"><i class="fab fa-twitter"></i>@harrysmessenger</a></p>
            </article>
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://pbs.twimg.com/profile_images/847816387082977281/7s2QbhTX_400x400.jpg)"></div>
                <strong class="speaker__name">Steve Pope</strong>
                <p class="speaker__about">Senior Developer / <a href="https://www.telummedia.com/">Telum Media UK</a></p>
                <p class="speaker__meta"><a href="https://twitter.com/stpopoola"><i class="fab fa-twitter"></i>@stpopoola</a></p>
            </article>
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://ca1-eno.edcdn.com/team/_c240x240/seb_large.jpg)"></div>
                <strong class="speaker__name">Seb Jones</strong>
                <p class="speaker__about">PHP Developer / <a href="https://www.enovate.co.uk/">Enovate</a></p>
                <p class="speaker__meta"><a href="https://www.enovate.co.uk/about/team/seb-jones"><i class="fas fa-info-circle"></i>Info</a></p>
            </article>
        </div>
    </section>
    {{-- / Speakers --}}
    {{-- Sponsors --}}
    <section class="sponsors">
        <div class="sponsors__container">
            <h2 class="sponsors__title">Sponsors</h2>
            {{--<p class="sponsors__intro">Thanks to our sponsors</p>--}}
        </div>
        <div class="sponsors__flex-container">
            <p>Coming soon</p>
            {{--@for ($i = 0; $i < 3; $i++)--}}
            {{--<article class="sponsor">--}}
            {{--<a href="#" class="sponsor__image">--}}
            {{--<img src="https://www.google.com/logos/doodles/2015/googles-new-logo-5078286822539264.3-hp2x.gif" alt="Sponsor">--}}
            {{--</a>--}}
            {{--</article>--}}
            {{--@endfor--}}
        </div>
    </section>
    {{-- / Sponsors --}}
    {{-- Map --}}
    <section class="map">
        <div class="map__container">
            <h2 class="map__title">Venue</h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9926.961519646988!2d-0.0782769!3d51.5363215!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f6f791530d5b70b!2sThe+Flowerpot+Hoxton!5e0!3m2!1sen!2suk!4v1556055749809!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    {{-- / Map --}}
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__content">
                Copyright © LaravelUK 2017 - {{ date('Y') }}
            </div>
        </div>
    </footer>
</body>
</html>
