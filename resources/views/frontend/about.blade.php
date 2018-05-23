@extends('frontend.master')

@section('content')
    @include('frontend.partials.about.hero')
    
    <article class="w-full mx-auto bg-white p-12">
        <div class="flex flex-col text-center justify-center items-center bg-white">
            <div class="flex flex-col justify-center container md:w-3/4">
                <div class="flex justify-center flex-row text-lg">
                    <div class="font-light text-grey-darkest leading-normal text-left md:text-xl md:mr-12 md:w-2/3 md:p-12">
                        <h2 class="text-blue-navy mb-2 text-2xl md:text-3xl md:text-left">Our Story</h2>
                        <h3 class="mb-8 leading-normal text-grey-darker text-lg md:text-xl">
                            LaravelUK is the brainchild of community owner and founder member Barry, better known in the LaravelUK community as <a class="font-bold text-blue-navy no-underline">@symfonycoda</a>. 
                        </h3>
                        <p class="mb-6">Started in Feb 2017, LaravelUK soon began to grow and gain momentum, with an excellent reputation by word-of-mouth. Inside the Slack, there are several popular channels that the community has become known for.</p>
                        <p class="mb-6">The #helpneeded channel is like a realtime StackOverflow, but members also help each other with #freelance and #finance questions about taxes, running and expanding their business and how to deal with clients. As a celebration for our 1st Birthday one of the members even created an online <a href="https://larahack.com" class="text-blue-navy font-bold no-underline" target="_blank">Larahack</a> event, with competitors from several countries. Click to find out about the next <a href="https://larahack.com" class="text-blue-navy font-bold no-underline" target="_blank">Larahack</a>.</p>
                        <p class="mb-6">The newest venture has been the <a href="https://laravelphp.uk" class="text-blue-navy font-bold no-underline" target="_blank">LaravelUK website</a>, a community-driven project to further bring members together. This is a place for members to write blog posts, and promote their own businesses or side projects. There will also be regular interviews with members as well as special guests on the site, and more features to be built, it is a fantastic extension to the original Slack platform that brought everybody together. The fact that the site is being built by the members of the LaravelUK community, and with Guest Commits from <a href="https://laravelphp.uk/laravel-people" class="text-blue-navy font-bold no-underline" target="_blank">top Laravellers</a>, just makes it even more special.</p>
                        <p class="mb-6">Although LaravelUK was started with UK devs in mind, we have already welcomed many overseas members, which adds to the huge diversity in talent. Our skill levels range from learner to decades of experience in PHP and many other languages, and from junior Dev to business owners, entrepreneurs, conference speakers and book authors.</p>
                        <p class="mb-6">The website hosting costs have kindly been covered by Snapshooter, a company that helps you minimises the risk of losing data on a server by allowing you to take frequent reliable Digital Ocean snapshots. Simon Bennet, the owner and founder of Snapshooter has been a member of the LaravelUK community since early on, and you can read his interview <a href="http://laravel-uk.test/blog/interviews/laravel-talks-to-simon-bennett-of-snapshooter-io-2"></a>here.</p>
                        <p class="mb-6">Although LaravelUK was started with UK devs in mind, we have already welcomed many overseas members, which adds to the huge diversity in talent. Our skill levels range from learner to decades of experience in PHP and many other languages, and from junior Dev to business owners, entrepreneurs, conference speakers and book authors.</p>
                        <p>If you would like to know more about the origins and growth of LaravelUK, there is a great blog post <a href="https://laravelphp.uk/blog/post/the-origins-and-growth-of-the-laraveluk-community" class="text-blue-navy font-bold no-underline" target="_blank">here.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </article>

@stop
