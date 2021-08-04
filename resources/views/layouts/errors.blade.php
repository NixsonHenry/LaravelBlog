            {{-- @if (count($errors)) 
            @endif --}}

            @if ($errors->any()) 
              <div class="md:flex md:items-center mb-6 my-1" role="alert">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3 border border-0 border-red-100 rounded bg-red-100 p-4 text-red-700 font-sans">
                  <ul class="">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif