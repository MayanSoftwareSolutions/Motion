<div>
  <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 h-screen overflow-hidden relative mt-8">
        <div class="bg-white text--40grey-800 flex items-center justify-center">

            <div class="grid grid-cols-1 gap-2">

              <div class="col-span-3 bg-white p-10 rounded">
                <div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">{{now()->format('j F, Y')}}</span>
                        <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-red-500 rounded cursor-pointer hover:bg-red-600">Logout</a>
                    </div>

                    <div class="mt-2">
                        <h1 class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">Link your courier account</h1>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">For us to link your courier account we will need some information. Please log into to your online courier account and request your api information as below </p>
                    </div>
                    <br>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ Auth::user()->name }}/admin" class="text-blue-600 dark:text-blue-400 hover:underline">{{ Auth::user()->name }}</a>

                        <div class="flex items-center">
                            <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-teal-500 rounded cursor-pointer hover:bg-purple-600">Add Courier Account</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
