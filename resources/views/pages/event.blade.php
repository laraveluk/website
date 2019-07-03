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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ mix('/css/event.css') }}">
</head>
<body class="event">
    {{-- Hero --}}
    <section class="hero">
        <div class="hero__container">
            <div class="hero__logo">
                <svg data-v-3ae455ef="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1409.44 406.89"><rect data-v-3ae455ef="" x="13.32" y="13.32" width="380.26" height="380.26" rx="40.69" ry="40.69" transform="rotate(-5.36 203.613 203.508)" fill="#293452" class="text-blue-navy fill-current"></rect> <path data-v-3ae455ef="" d="M372.07 190.65c-1.13-1.28-10.89-13.43-18.73-23.19-8.23-10.22-16-19.89-18.52-22.94-6.49-7.81-11.84-8.73-17.89-7.72l-.7.11c-3.4.5-42.25 7-45.77 7.62-6 1-9.88 3.59-11.56 7.67-.88 2.11-1.8 6.41 1.8 11.44 1.8 2.52 16.51 23.37 25.86 36.63L205 219.81 129.21 93.13l-.73-1.1c-3.77-5.64-7-9.3-17.59-8.82-7.54.34-65.48 5.16-66.07 5.21-6.63.55-9.89 3.76-11.46 6.35-1 1.58-3.85 6.37.34 16.25 2.75 6.49 32.74 71.28 52.58 114.15C94.51 243 101 257 101.52 258.14c3 6.78 9.61 13.12 19.71 13.12a27.59 27.59 0 0 0 6.45-.8c9.89-2.38 41.29-10.55 62.74-16.16 14.25 25.75 30.63 55 34.38 60.24 5.08 7.09 10.19 9.19 15.26 9.19 3.7 0 7.38-1.12 11-2.22l.32-.09c7-2.14 103.56-36.91 107.19-38.4 3.29-1.36 8.28-3.41 9.89-8.76 1-3.45.3-7.06-2.18-10.73-1.81-2.68-17.94-24.35-33.56-45.27 12.38-3.29 30.45-8.11 33-8.8 6.19-1.68 8.45-5.24 9.25-7.94.63-2.13 1.1-6.37-2.9-10.87zM85 111l22-2 68.33 118-20.39 4.87-27 6.45c-10.34-21.68-48.47-100.2-60.93-125.77zm135.57 135.41l84.08-21.88c2.84 4 8.6 11.86 18.31 25.12l7.92 10.83-26.27 8.9c-38 12.88-53.11 18-58.93 20-3.81-6.28-15.5-26.38-25.11-42.97zm73.95-79.72c8.31-1.48 19-3.41 23.74-4.31 3 3.89 10.18 13 19.92 25.35l-24 5.93z" fill="#edebe4" class="text-grey fill-current"></path> <path data-v-3ae455ef="" d="M367.91 192.61c-2.17-2.44-32.15-40-37.44-46.34s-7.85-5.21-11.11-4.74-41.18 6.84-45.59 7.59-7.18 2.51-4.47 6.3c2.41 3.37 27.35 38.73 32.84 46.52L203 225.69 124.14 93.86c-3.14-4.66-3.79-6.28-10.93-6s-61.86 4.87-65.76 5.2-8.17 2.06-4.27 11.26 66 143.1 67.76 147 6.24 10.22 16.78 7.69c10.8-2.6 48.26-12.37 68.73-17.73 10.81 19.58 32.87 59.31 37 65 5.45 7.6 9.19 6.34 17.55 3.81 6.53-2 102.15-36.36 106.45-38.13s7-3 4.06-7.35c-2.14-3.17-27.37-37-40.58-54.64 9.05-2.41 41.23-11 44.66-11.9 3.94-1.07 4.48-3.02 2.32-5.46zm-180.25 36.85c-1.19.26-56.72 13.55-59.68 14.23s-3 .34-3.3-.68-66-136.46-66.94-138.16-.87-3 0-3 52.44-4.61 54.27-4.71 1.63.29 2.3 1.44l74 127.78c1.3 2.17.53 2.85-.65 3.1zm156.57 29.35c.89 1.4 1.77 2.28-1 3.3s-94 31.79-95.76 32.55-3.17 1-5.45-2.28-31.95-54.65-31.95-54.65l96.68-25.15c2.41-.76 3.17-1.27 4.69 1.14s31.91 43.7 32.79 45.09zm6.2-68.64c-2.17.48-37.67 9.28-37.67 9.28l-29-39.83c-.81-1.15-1.49-2.3.54-2.57s35-6.24 36.52-6.58 2.77-.74 4.6 1.77 26.94 34.27 27.88 35.49-.7 1.97-2.87 2.44z" fill="#c1271f" class="text-red fill-current"></path> <path data-v-3ae455ef="" d="M470.16 278.12V126.5h32.15v125.07h61.5v26.55zM649.44 278.12l-6.12-15.77h-.83q-8 10.06-16.44 13.95t-22 3.89q-16.69 0-26.28-9.54t-9.6-27.17q0-18.45 12.91-27.22t38.94-9.7l20.12-.62v-5.08q0-17.62-18-17.63-13.9 0-32.67 8.4L579 170.27q20-10.49 44.38-10.48 23.34 0 35.78 10.17t12.44 30.9v77.26zm-9.34-53.72l-12.23.41q-13.8.42-20.54 5t-6.74 13.9q0 13.38 15.35 13.38 11 0 17.58-6.33t6.58-16.8zM752.57 160a51.12 51.12 0 0 1 10.68.93l-2.38 29.66a36.36 36.36 0 0 0-9.34-1q-15.13 0-23.59 7.77t-8.45 21.78v59h-31.63V162.18h24l4.66 19.49H718A43.63 43.63 0 0 1 732.61 166a36 36 0 0 1 19.96-6zM840.13 278.12L834 262.35h-.83q-8 10.06-16.44 13.95t-22 3.89q-16.69 0-26.29-9.54t-9.59-27.17q0-18.45 12.91-27.22t38.94-9.7l20.12-.62v-5.08q0-17.62-18-17.63-13.9 0-32.67 8.4l-10.47-21.36q20-10.49 44.38-10.48 23.34 0 35.78 10.17t12.44 30.9v77.26zm-9.33-53.72l-12.23.41q-13.8.42-20.54 5t-6.74 13.9q0 13.38 15.35 13.38 11 0 17.58-6.33t6.58-16.8zM904.26 278.12l-44.18-115.94h33.08l22.4 66.06A106.47 106.47 0 0 1 920 252h.83a89.19 89.19 0 0 1 4.66-23.74l22.3-66.06h33.08l-44.16 115.92zM1032.56 280.19q-28 0-43.76-15.45T973 221q0-29.14 14.57-45.06T1027.9 160q24.57 0 38.26 14t13.69 38.68V228h-74.77q.52 13.49 8 21.05t20.94 7.57a86.47 86.47 0 0 0 19.81-2.18 99.14 99.14 0 0 0 19.5-6.94V272a74.65 74.65 0 0 1-17.74 6.17 111.64 111.64 0 0 1-23.03 2.02zm-4.46-97.69q-10 0-15.76 6.38t-6.53 18.1h44.38q-.21-11.72-6.12-18.1t-15.97-6.38zM1122.84 278.12h-31.63V116.76h31.63zM1266 126.5v98.11q0 16.8-7.52 29.45a48.91 48.91 0 0 1-21.72 19.39q-14.2 6.75-33.6 6.74-29.25 0-45.42-15t-16.18-41V126.5h32v92.82q0 17.52 7.06 25.72t23.33 8.19q15.76 0 22.87-8.25t7.1-25.87V126.5zM1409.44 278.12h-36.5l-39.72-63.88-13.59 9.76v54.14h-32.14V126.5h32.14v69.38l12.66-17.88 41.06-51.54H1409l-52.89 67.1z" class="text-white fill-current"></path></svg>
            </div>
        </div>
        <div class="hero__flex-container">
            <article class="hero__content">
                <strong class="hero__intro">TICKETS NOW AVAILABLE! <i class="fas fa-arrow-right"></i></strong>
                <h1 class="hero__title">The LaravelUK Community Event</h1>
                <h2 class="hero__subtitle">We've been talking for years, <span>now let's meet the faces behind the usernames!</span></h2>
                <div class="hero__blurb">
                    <p>The LaravelUK group is proud to announce its first annual community event in Old Street, London. After running for almost 3 years, we are finally bringing this nationwide community together.</p>

                    <p>Socialising is the aim of the game here. This event is put together to put faces to names of the people who we have been connecting with online on a daily basis. Apart from this, we will have a few talks from people within and outside of the community followed later with an evening of drinks.</p>

                    <p>We hope to see as many people as possible there, so don’t hesitate to register your interest above to keep up to date with event info, ticket pricing and some great hotel deals we have lined up for you.</p>
                </div>

            </article>
            <aside class="hero__aside">

                <div class="hero__buttons">
                    <button type="button" id="eventbrite-widget-modal-trigger-61257708455" class="button button--primary"><span>Buy Your Ticket &mdash; (From &pound;53.89)</span> <i class="fas fa-arrow-right"></i></button>

                    <a href="https://calendar.google.com/calendar/r/eventedit?text=LaravelUK+Community+Event&dates=20190726T090000Z/20190726T163000Z&details=For+details,+link+here:+https://www.eventbrite.co.uk/e/laraveluk-community-event-tickets-61257708455&location=The+Flowerpot+Hoxton+-+4a+Orsman+Road+-+N1+5QJ+London+-+United+Kingdom&sf=true" target="_blank" class="button button--secondary">Friday 26th July &mdash; <small>Add To Calendar</small> <i class="fas fa-calendar-alt"></i></a>
                </div>
                <div class="newsletter-signup">
                    <h2 class="newsletter-signup__title">Can't make it? <span>Let's keep in touch!</span></h2>
                    <p class="newsletter-signup__sting">Enter your email below and we'll update you with any future events.</p>
                    <form class="newsletter-signup__form" method="POST" action="{{route('pages.event.store')}}">
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
            </aside>
        </div>
    </section>
    {{-- / Hero --}}
    {{-- Venue --}}
    <section class="venue">
        <div class="venue__container">
            <strong class="venue__intro">So, Where is it?</strong>
            <h2 class="venue__title">The Flowerpot - Hoxton</h2>
            <div class="venue__content-wrap">
                <article class="venue__content">
                    <p>The Flowerpot is a beautiful loft style space beside the canal in Hoxton.</p>
                    <strong class="venue__intro">On The Day</strong>
                    <p>The event starts at 10am and finishes at 5:30pm, all at The Flowerpot Hoxton.</p>
                    {{-- <p>The venue is a <strong>==XXX===</strong> minute <strong>==METHOD OF TRAVEL==</strong> from <strong>==TRAIN STATION NAME==</strong></p> --}}
                    <p>We have talks from <a href="https://twitter.com/harrysmessenger" target="_blank">Harry Messenger</a>, <a href="https://www.enovate.co.uk/about/team/seb-jones" target="_blank">Seb Jones</a> and <a href="https://twitter.com/stpopoola" target="_blank">Steve Pope</a>. Of course, we'll be hosting an after party and everyone is welcome.</p>
                    <p>In addition to standard tickets, we're also offering discounted hotel rooms bundled in with tickets at the <a href="https://www.travelodge.co.uk/hotels/340/London-Central-City-Road-hotel" target="_blank">Travelodge London Central City Road.</a></p>
                </article>
                <aside class="venue__image">
                    <div class="venue__image-slide" style="background-image:url('{{asset('images/event/venue-1.jpg')}}')"></div>
                    <div class="venue__image-slide" style="background-image:url('{{asset('images/event/venue-2.jpg')}}')"></div>
                    <div class="venue__image-slide" style="background-image:url('{{asset('images/event/travellodge.webp')}}')"></div>
                    {{-- <img src="{{asset('images/event/venue-1.jpg')}}" alt="The Flowerpot Hoxton"> --}}
                    {{-- <img src="{{asset('images/event/venue-2.jpg')}}" alt="The Flowerpot Hoxton"> --}}
                    {{-- <img src="{{asset('images/event/travellodge.webp')}}" alt="Travelodge London Central City Road"> --}}
                </aside>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9926.961519646988!2d-0.0782769!3d51.5363215!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f6f791530d5b70b!2sThe+Flowerpot+Hoxton!5e0!3m2!1sen!2suk!4v1556055749809!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    {{-- / Venue --}}
    {{-- Sponsors --}}
    <section class="sponsors">
        <div class="sponsors__container">
            <strong class="sponsors__intro">We Want To Thank</strong>
            <h2 class="sponsors__title">Our Generous Sponsors</h2>
        </div>
        <div class="sponsors__flex-container">
            <article class="sponsor">
                <a href="https://www.endclothing.com/?utm_source=laraveluk" target="_blank" class="sponsor__image">
                    <img src="{{asset('images/sponsors/END-logo.png')}}" alt="END">
                </a>
            </article>
{{--             <article class="sponsor">
                <a href="#" class="sponsor__image">
                    <img src="{{asset('images/sponsors/snapshooter.png')}}" alt="Snapshooter">
                </a>
            </article> --}}
            <article class="sponsor">
                <a href="https://www.linode.com/?utm_source=laraveluk" target="_blank" class="sponsor__image">
                    <img src="{{asset('images/sponsors/linode-logo_standard_light_medium.png')}}" alt="Linode">
                </a>
            </article>
        </div>
    </section>
    {{-- / Sponsors --}}
    {{-- Speakers --}}
    <section class="speakers">
        <div class="speakers__container">
            <h2 class="speakers__title">Speakers</h2>
        </div>
        <div class="speakers__flex-container">
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://pbs.twimg.com/profile_images/924005430464008192/FQfuRp3R_400x400.jpg)"></div>
                <strong class="speaker__name">Harry Messenger</strong>
                <p class="speaker__about">Web Developer / <a href="https://rhythm.digital/" target="_blank">Rhythm</a></p>
                <p class="speaker__meta"><a href="https://twitter.com/harrysmessenger" target="_blank"><i class="fab fa-twitter"></i>@harrysmessenger</a></p>
            </article>
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://pbs.twimg.com/profile_images/847816387082977281/7s2QbhTX_400x400.jpg)"></div>
                <strong class="speaker__name">Steve Pope</strong>
                <p class="speaker__about">Senior Developer / <a href="https://www.telummedia.com/" target="_blank">Telum Media UK</a></p>
                <p class="speaker__meta"><a href="https://twitter.com/stpopoola" target="_blank"><i class="fab fa-twitter"></i>@stpopoola</a></p>
            </article>
            <article class="speaker">
                <div class="speaker__image" style="background-image: url(https://ca1-eno.edcdn.com/team/_c240x240/seb_large.jpg)"></div>
                <strong class="speaker__name">Seb Jones</strong>
                <p class="speaker__about">PHP Developer / <a href="https://www.enovate.co.uk/" target="_blank">Enovate</a></p>
                <p class="speaker__meta"><a href="https://www.enovate.co.uk/about/team/seb-jones" target="_blank"><i class="fas fa-info-circle"></i> Info</a></p>
            </article>
        </div>
    </section>
    {{-- / Speakers --}}
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__content">
                Copyright © LaravelUK 2017 - {{ date('Y') }}
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.venue__image').slick({
            arrows: false,
            autoplay: true,
            dots: false
        });
    </script>
    <script src="https://www.eventbrite.co.uk/static/widgets/eb_widgets.js"></script>
    <script type="text/javascript">
        var exampleCallback = function() {
            console.log('Order complete!');
        };

        window.EBWidgets.createWidget({
            widgetType: 'checkout',
            eventId: '61257708455',
            modal: true,
            modalTriggerElementId: 'eventbrite-widget-modal-trigger-61257708455',
            onOrderComplete: exampleCallback
        });
    </script>
</body>
</html>
