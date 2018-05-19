<div class="sm:w-full mb-2 lg:w-1/3 bg-white lg:mr-4">

    <h3 class="text-center text-purple-darker my-2">Recent Posts</h3>
    <div class="content p-4 leading-normal">
        @foreach ($posts as $post)
        <div class="flex items-center mb-4">
            <!-- Avatar -->
            <a href="{{route('profile', $post->author)}}">
                <img class="w-10 h-10 rounded-full mr-4" src="{{$post->author->avatar}}" alt="{{$post->author->name}}'s Avatar">
            </a>
            <!-- / Avatar -->
            <!-- Blog Content -->
            <div class="text-sm">
                <p class="text-black leading-none">
                    <a href="{{ route('frontend.posts.show', [$post->post_type, $post]) }}" class="no-underline text-grey-darkest hover:text-purple-darkest ">
                        {{ str_limit($post->title, 40) }}
                    </a>
                </p>
                <p class="text-grey-dark">{{$post->created_at->format('jS F Y')}}</p>
                <!-- Tags -->
                @foreach ($post->tags as $tag)
                <a href="{{route('frontend.posts.tags.show', $tag)}}" class="no-underline hover:text-purple-darkest">
                    @if (!$loop->last)
                        {{$tag}},
                    @else
                        {{$tag}}
                    @endif
                </a>
                @endforeach
                <!-- / Tags -->
            </div>
            <!-- / Blog Content -->
        </div>    
        @endforeach
        <div class="more-posts text-center mt-2">
            Read more posts from our <a href="{{ url('/blog') }}"class="no-underline text-grey-darkest hover:text-purple-darkest mb-2">Blog</a>
        </div>
    </div>
</div>
