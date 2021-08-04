@extends('layouts.master')

@section('content')

    <div class="mx-32 mt-10 mb-4">
        <h1 class="text-5xl font-bold mb-1 pt-3">The Brand New Post</h1>
        {{-- <p class="text-xl font-sans text-gray-600">An example of brand new post built with tailwind css  --}}
    </div>
    <hr class="mx-32 mt-8">

    <div class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
        <div class="mx-32 mt-12">
            <h1 class="text-3xl font-bold mb-1">{{ $post->title }} </h1>

            <p class="mt-6">{{ $post->body }}</p>

            <hr class="my-4">

            <div>
                <ul>
                    @foreach ($post->comments as $comment)
                        <li class="border border-solid border-gray-200 rounded p-4 font-serif ">
                            <strong> {{-- toFormattedDateString() --}}
                                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                            </strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <hr class="my-3">
            {{-- Add a comment --}} 
            <div>
                <div class="border border-solid border-gray-200 rounded pt-3 px-4 font-serif mb-64">

                    
                    <form class="m-3" method="POST" action="{{ route('comments.store', $post->id) }}">
                        @csrf  

                        <textarea class="rounded font-serif appearance-none focus:border-blue-400 focus:outline-none text-gray-900 border border-gray-300  w-full px-3 py-2" name="body" placeholder="Your comment here" rows="3"></textarea>

                        <button class="shadow bg-blue-600 hover:bg-blue-500 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded font-serif text-md my-2" type="submit">
                            Add Comment
                          </button>
                    @include('layouts.errors')

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
 