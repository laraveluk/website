@extends('backend.master')

@section('title_and_meta')
    <title>LaravelUK - Edit Post - {{$post->title}}</title>
    <meta name="title" content="LaravelUK - Edit Post - {{$post->title}}" />
    <meta name="description" content="LaravelUK - Edit Post - {{$post->title}}" />
    <meta name="og_title" content="LaravelUK - Edit Post - {{$post->title}}" />
    <meta name="og_description" content="LaravelUK - Edit Post - {{$post->title}}" />
@stop

@section('content')
    @include('backend.partials.nav')

    <article class="max-w-2xl mx-auto">
        <header class="p-8 text-center">
            <h1 class="tracking-tight text-5xl text-red">Edit Post: {{$post->title}}</h1>
        </header>

        <section class="flex max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg border border-red">
            <div class="w-full">
                <form method="POST" action="{{route('posts.update', $post)}}" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    {{-- @csrf --}}
                    {{-- @method('PATCH') --}}
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Title
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="title" name="title" type="text" value="{{$post->title}}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="body">
                            Content
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="body" name="body" type="body" rows="10">{{$post->body}}</textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </article>
@endsection
