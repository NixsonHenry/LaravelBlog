{{-- <ul>
    <li><a href="{{ route('welcome') }}">L'acceuil</a></li>
    <li><a href="{{ route('index.create') }}">Creer un nouveau post</a></li>
    <li><a href="{{ route('contact') }}">Contact </a></li>
</ul> --}}

<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
           
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-100 hover:bg-gray-700 hover:text-white px-0 py-0 rounded-md text-xl font-medium">Album</a>
                </div>
              </div>
          </div>
        </div>
        
        
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-10 w-10 rounded-full" src="https://avatars.githubusercontent.com/u/36969495?s=400&u=f0f969b1ee47dfefca592005297afb56489545b6&v=4" alt="Xondy Image">
              </button>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </nav>

<div class="mx-40">
  <div class="h-12 w-12 text-left flex mt-6">
    <img class="" src="/images/tailwind.png" alt="">
    <a href="#" class="text-3xl font-medium text-opacity-75 tracking-normal font-sans mt-1">Laravel</a>
    <a href="#" class="text-xl text-blue-300 font-bold text-opacity-100 font-medium mt-3">BLOG</a>  
  </div>
</div>