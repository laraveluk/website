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

            <form class="hero__form">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ullam cupiditate earum impedit quibusdam. Iusto dicta cumque amet cum, voluptatum, quas nemo vel rem qui nam perferendis cupiditate atque quibusdam.</p>
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
            @for ($i = 0; $i < 3; $i++)
                <article class="speaker">
                    <div class="speaker__image" style="background-image: url(https://pbs.twimg.com/profile_images/1012406703265124352/eggpA4H6_400x400.jpg)"></div>
                    <strong class="speaker__name">Mikey Burton</strong>
                    <p class="speaker__about">Lead Developer / <a href="">Fifteen</a></p>
                    <p class="speaker__meta"><a href="https://twitter.com/madmikeyb"><i class="fab fa-twitter"></i> @madmikeyb</a></p>
                </article>
            @endfor
        </div>
    </section>
    {{-- / Speakers --}}
    {{-- Sponsors --}}
    <section class="sponsors">
        <div class="sponsors__container">
            <h2 class="sponsors__title">Sponsors</h2>
            <p class="sponsors__intro">Thanks to our sponsors</p>
        </div>
        <div class="sponsors__flex-container">
            @for ($i = 0; $i < 3; $i++)
                <article class="sponsor">
                    <div class="sponsor__image">
                        <img src="https://www.google.com/logos/doodles/2015/googles-new-logo-5078286822539264.3-hp2x.gif" alt="Sponsor">
                    </div>
                </article>
            @endfor
        </div>
    </section>
    {{-- / Sponsors --}}
    {{-- Map --}}
    <section class="map">
        <div class="map__container">
            <h2 class="map__title">Venue</h2>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4966.120152445886!2d-0.1283616718053107!3d51.512113818543526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cb878e81b3%3A0x91f10fa364452046!2sCovent+Garden%2C+London!5e0!3m2!1sen!2suk!4v1555346559942!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
