@extends('layouts.master')

@section('content')
 
    <div>
        <h1 class="text-4xl font-medium text-opacity-75 font-sans mt-8 ml-32">Publish a Post</h1>
        <hr class="mx-32 my-4">

        <form method="POST" action="{{ route('posts.store') }}" class="w-full max-w-6xl">
          @csrf
          
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="text-xl block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-12 font-sans" for="inline-title">
                  Title:
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="font-sans bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="title" type="text" placeholder="Enter your title's blog">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-12 font-sans" for="inline-password">
                  Body:
                </label>
              </div>
              <div class="md:w-2/3">
                <textarea class="font-sans bg-gray-200 appearance-none focus:bg-white focus:border-purple-500 w-full px-3 py-2 text-gray-700 border border-gray-200 rounded-lg focus:outline-none" name="body" placeholder="Message" rows="4"></textarea>
              </div>
            </div>
        
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-1 px-4 rounded font-sans" type="submit">
                  Publish
                </button>
              </div>
            </div>

            @include('layouts.errors')
          </form>

    </div>
@endsection