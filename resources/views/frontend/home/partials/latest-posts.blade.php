<div class="flex flex-col w-full rounded shadow border-t-4 border-blue-navy mb-8 p-4 bg-white md:w-1/3 md:mr-4 md:mb-0">
    <h3 class="text-center text-blue-navy border-b-2 border-grey pb-4">Recent Posts</h3>
    <div class="content leading-normal p-4">
        @foreach ($posts as $post)
        @if($loop->last)
        <div class="flex items-center">
        @else
        <div class="flex items-center pb-4 mb-4 border-b border-grey">
        @endif
            <!-- Avatar -->
            @if ($post->author)
            <a href="{{route('profile', $post->author)}}">
                <img class="w-10 h-10 rounded-full mr-4" src="{{$post->author->avatar}}" alt="{{$post->author->name}}'s Avatar">
            </a>
            @endif
            <!-- / Avatar -->
            <!-- Blog Content -->
            <div class="text-sm">
                <p class="text-blue-navy font-bold leading-none">
                    <a href="{{ route('frontend.posts.show', [$post->post_type, $post]) }}" class="no-underline text-grey-darkest hover:text-blue-navy ">
                        {{ str_limit($post->title, 40) }}
                    </a>
                </p>
                <p class="text-grey-dark">{{$post->created_at->format('jS F Y')}}</p>
                <!-- Tags -->
                @if ($post->tags)
                    @foreach ($post->tags as $tag)
                    <a href="{{route('frontend.posts.tags.show', $tag)}}" class="no-underline text-xs text-grey-darker hover:text-grey-darkest">
                        @if (!$loop->last)
                            {{$tag}},
                        @else
                            {{$tag}}
                        @endif
                    </a>
                    @endforeach
                @endif
                <!-- / Tags -->
            </div>
            <!-- / Blog Content -->
        </div>    
        @endforeach
    </div>
    @if(!$posts->count())
    <div class="text-xs text-center text-grey-darker pt-4 border-t border-grey">
        We haven't made any posts yet - check back soon!
    </div>
    @else
    <div class="text-xs text-center text-grey-darker pt-4 border-t border-grey">
        Read more posts from our <a href="{{ url('/blog') }}"class="no-underline text-grey-darkest hover:text-purple-darkest mb-2">Blog</a>
    </div>
    @endif
</div>
