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
            @for ($i = 0; $i < 3; $i++)
                <article class="speaker">
                    <div class="speaker__image"></div>
                    <strong class="speaker__name">Mikey Burton</strong>
                    <p class="speaker__about">Lead PHP Developer</p>
                    <p class="speaker__meta"><i class="fab fa-twitter"></i> @madmikeyb</p>
                </article>
            @endfor
        </div>
    </section>
    {{-- / Speakers --}}
    {{-- Sponsors --}}
    <section class="sponsors">
        <div class="sponsors__container">
            <h2 class="sponsors__title">Venue</h2>
            <p class="sponsors__intro">Thanks to our sponsors</p>
            @for ($i = 0; $i < 3; $i++)
                <article class="sponsor">
                    <div class="sponsor__image">
                        <img src="//source.unsplash.com/random" alt="#">
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
    </section>
    {{-- / Map --}}
</body>
</html>
