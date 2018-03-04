@extends('frontend.master')

@section('content')
    @include('frontend.partials.header')

    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-5xl text-red">About LaravelUK</h1>
            <!-- <h2 class="text-grey-dark font-normal">About Us</h2> -->
        </header>

        <section class="px-8 md:px-0 py-8 max-w-lg mx-auto text-lg leading-normal text-grey-darkest text-center">
            <p>"The most exciting coding group in the UK"</p>
            <p>"Everybody Teaches, Everybody Learns"</p>

        </section>

        <div class="py-8 mx-4 lg:mx-0">

            <!-- Section start -->

            <section class="flex flex-wrap md:flex-no-wrap justify-center md:justify-start max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg max-w-2xl">
                <section class="flex flex-col justify-between w-full md:w5">

                    <div class="p-4 text-lg leading-normal">
                        <p>LaravelUK is the brainchild of community owner and founder member Barry, better known in the LaravelUK community as <a class="red-link no-underline">@symfonycoda</a>. 
                        It is a large Slack community known for being extremely friendly and welcoming, and a place where good-humoured banter exists between coders of all levels whilst they help each other solve all kinds of problems.<br><br> 
                        
                        <p>Started in Feb 2017, LaravelUK soon began to grow and gain momentum,with an excellent reputation by word-of-mouth, as well as Social Media stunts such as this tweet:</p><br></br>

                        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/laravelphp?ref_src=twsrc%5Etfw">@laravelphp</a> <a href="https://twitter.com/laravelnews?ref_src=twsrc%5Etfw">@laravelnews</a> <a href="https://twitter.com/taylorotwell?ref_src=twsrc%5Etfw">@taylorotwell</a> <a href="https://twitter.com/jeffrey_way?ref_src=twsrc%5Etfw">@jeffrey_way</a> <a href="https://twitter.com/alexjgarrett?ref_src=twsrc%5Etfw">@alexjgarrett</a> Can somebody check my <a href="https://twitter.com/hashtag/laravel?src=hash&amp;ref_src=twsrc%5Etfw">#laravel</a> <a href="https://twitter.com/hashtag/php?src=hash&amp;ref_src=twsrc%5Etfw">#php</a> code for me please? 😄 <a href="https://t.co/MtqYAK8APc">pic.twitter.com/MtqYAK8APc</a></p>&mdash; barry (@SymfonyCoda) <a href="https://twitter.com/SymfonyCoda/status/837038353287630848?ref_src=twsrc%5Etfw">March 1, 2017</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br></br>

                        If you would like to know more about the origins and growth of LaravelUK, there is a great blog post <a href="https://laravelphp.uk/blog/post/the-origins-and-growth-of-the-laraveluk-community" class="red-link no-underline" target="_blank">here…</a><br></br>


                        <p>Inside the Slack, there are several popular channels that the community has become known for:</p><br>

                        <p>The #helpneeded channel is like a realtime StackOverflow, but members also help each other with #freelance and #finance questions about taxes, running and expanding their business and how to deal with clients. 
                            As a celebration for our 1st Birthday one of the members even created an online <a href="https://larahack.com" class="red-link no-underline" target="_blank">Larahack</a> event, with competitors from several countries. Click to find out about the next <a href="https://larahack.com" class="red-link no-underline" target="_blank">Larahack</a>.</p><br>

                        <p>The newest venture has been the <a href="https://laravelphp.uk" class="red-link no-underline" target="_blank">LaravelUK website</a>, a community-driven project to further bring members together. This is a place for members to write blog posts, and promote their own businesses or side projects. There will also be regular interviews with members as well as special guests on the site, and more features to be built, it is a fantastic extension to the original Slack platform that brought everybody together. The fact that the site is being built by the members of the LaravelUK community, and with Guest Commits from <a href="https://laravelphp.uk/laravel-people" class="red-link no-underline" target="_blank">top Laravellers</a>, just makes it even more special.</p><br>
                        
                        <p>The website hosting costs have kindly been covered by <a href="https://snapshooter.io" class="red-link no-underline" target="_blank">Snapshooter</a>, a company that helps you minimises the risk of losing data on a server by allowing you to take frequent reliable Digital Ocean snapshots. Simon Bennet, the owner and founder of <a href="https://snapshooter.io" class="red-link no-underline" target="_blank">Snapshooter</a> has been a member of the LaravelUK community since early on, and you can read his interview <a href="https://laravelphp.uk/blog/interviews/laravel-talks-to-simon-bennett-of-snapshooter-io-2" class="red-link no-underline" target="_blank">here…</a></p></br>                

                        <p>Although LaravelUK was started with UK devs in mind, we have already welcomed many overseas members, which adds to the huge diversity in talent. Our skill levels range from learner to decades of experience in PHP and many other languages, and from junior Dev to business owners, entrepreneurs, conference speakers and book authors.</p><br>

                        <p> To join our vibrant, friendly community, click on your choice of the links below:</p>

                        <br>


                    </div>



                    <div class="bg-red px-4 py-3 text-right">
                        <a href="https://twitter.com/uklaravel" class="text-white no-underline hover:underline p-2">Twitter</a>
                        <a href="https://laravelphp.uk" class="text-white no-underline hover:underline p-2">Website</a>
                        <a href="https://larahack.com" class="text-white no-underline hover:underline p-2">Larahack</a>                        
                        <a href="https://laraveluk.signup.team" class="text-white no-underline hover:underline p-2">Slack Signup</a>
                    </div>
                </section>
            </section>

            <!-- Section ends -->


        </div>

    </article>

@stop
