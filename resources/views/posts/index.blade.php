@extends('layouts.master')

@section('content')

    
  <div class="mx-32 my-8">
    <h1 class="text-5xl font-bold mb-1">The Tailwind Blog</h1>
    <p class="text-xl font-sans text-gray-600">An example blog template built with tailwind css 
  </div>
  <hr class="mx-32 mt-8">
 
    <div class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
        @foreach ($posts as $post)
            @include('posts.post')
        @endforeach

        <nav class="ml-32 mt-8">
            <a class="bg-blue-600 text-white py-2 px-4 rounded" href="">Older</a>
            <a class="border-solid border-2 border-gray-300 py-2 px-4 rounded text-gray-600 font-bold" href="">Newer</a>
        </nav>
    </div>
@endsection

