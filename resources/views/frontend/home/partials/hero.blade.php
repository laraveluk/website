<section class="flex flex-col hero bg-cover bg-center bg-no-repeat">
	<div class="md:p-6">
    	<navbar current-route="{{Route::currentRouteName()}}"></navbar>
    </div>
    <div class="flex flex-col justify-center items-center text-white text-center p-6 -mt-nav md:-mt-nav-md min-h-75">
        <h1 class="mb-2 text-4xl md:text-5xl">Welcome to Laravel UK</h1>
        <h2 class="mb-4 text-xl opacity-75 font-light md:text-3xl">The most exciting developer group in the United Kingdom</h2>
        @guest
        <a href="{{route('login.slack')}}">
            <img src="https://api.slack.com/img/sign_in_with_slack.png">
        </a>
        @endguest
    </div>
</section>
