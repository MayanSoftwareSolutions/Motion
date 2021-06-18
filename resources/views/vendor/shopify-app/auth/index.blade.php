<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('shopify-app.app_name') }} &mdash; Login</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
    <body>
      <div class="relative bg-gray-800">
      <div class="absolute inset-x-0 bottom-0">
        <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
          <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
        </svg>
      </div>
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
          <div>
              <img class="mx-auto w-auto" src="{{url('/img/colournobg.svg')}}" alt="motionlogo" style="height: 250px; width: 250px;">
          </div>
          <h5 class="mb-6 font-sans text-1xl font-bold tracking-tight text-white sm:text-3xl sm:leading-none">
            <span class="relative inline-block">
              <div class="w-full h-3 -mt-3 bg-deep-purple-accent-400"></div>
            </span>
          </h5>

          @if (session()->has('error'))
              <div class="error">
                  <strong>Oops! An error has occured:</strong> {{ session('error') }}
              </div>
          @endif

          <form action"{{ route('authenticate') }}" class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
            {{ csrf_field() }}
            @csrf
            <input placeholder="example.myshopify.com" id="shop" name="shop" type="text"
              class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 bg-transparent border-2 border-gray-400 rounded appearance-none md:mr-2 md:mb-0 focus:border-purple-accent-200 focus:outline-none focus:shadow-outline"/>

            <button type="submit"
              class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-purple-accent-400 hover:bg-purple-accent-700 focus:shadow-outline focus:outline-none">
              Install
            </button>
          </form>
          <p class="max-w-md mb-10 text-xs font-thin tracking-wide text-gray-500 sm:text-sm sm:mx-auto md:mb-16">
            Motion Shopify is part of Mayan Software Solutions in partnership with Stark AI ltd.
          </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
              <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
