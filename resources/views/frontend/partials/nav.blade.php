<div id="nav" class="main-nav max-w-2xl mx-auto flex justify-between items-center">
    <a href="/" class="w-64 md:w-48 lg:w-64">
        @include('frontend.partials.logo')
    </a>
    <label for="mainNavTogger" class="text-blue-lightest hover:text-white w-8 md:hidden"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="fill-current"><path d="M25 3c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm0 16c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zm0 16c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6z"/></svg></label>
    <input type="checkbox" id="mainNavTogger" class="hidden">
    <nav class="invisible fixed pin flex flex-col md:visible md:static md:flex md:flex-row justify-center items-center text-center text-xl md:text-sm lg:text-base bg-blue md:bg-transparent z-10">
        <label for="mainNavTogger" class="w-10 h-10 flex items-center justify-center p-3 mt-8 mr-6 absolute pin-t pin-r text-2xl leading-none text-white bg-red rounded-full md:hidden">&times;</label>
        <a href="/" class="text-blue-lightest hover:text-white no-underline p-3 md:px-2">Home</a>
        <dropdown>
            <span slot="link" class="appearance-none flex items-center inline-block text-white font-medium bg-blue hover:bg-blue-dark px-4 py-2 rounded">
                <span class="mr-1">Blog</span>
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </span>
            <div slot="dropdown" class="bg-white shadow rounded border overflow-hidden">
                <a href="/blog" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue whitespace-no-wrap">Posts</a>
                <a href="/blog/interviews" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue whitespace-no-wrap">Interviews</a>
            </div>
        </dropdown>

        <a href="/laravel-people" class="text-blue-lightest hover:text-white no-underline p-3 md:px-2">LaraCelebs</a>

        <a href="/login" class="text-blue-lightest hover:text-white no-underline p-3 md:px-2">Log in</a>
        <a href="/join-slack" class="text-grey bg-red hover:bg-red-dark no-underline rounded-full border border-red-lighter px-4 py-2 lg:ml-2 shadow-lg">Join us on Slack</a>
    </nav>
</div>
