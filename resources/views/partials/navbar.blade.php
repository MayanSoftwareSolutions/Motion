
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-2 py-1 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <img class="mx-auto" href="/" style="height:70px; width:60px;" src="{{url('/img/colournobg.svg')}}" alt="motionlogo" style="height: 250px; width: 250px;">
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden mobileMenuOpen">
                    <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">
                <div class="flex flex-col md:flex-row md:mx-3">
                    <a href="/" class="my-1 text-sm @if(Request::path() == '/') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Home</a>
                    <a href="/products" class="my-1 text-sm @if(Request::path() == 'products') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Products</a>
                    <a href="/orders" class="my-1 text-sm @if(Request::path() == 'orders') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Orders</a>
                    <a href="/customers" class="my-1 text-sm @if(Request::path() == 'customers') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Customers</a>
                    <a href="/settings" class="my-1 text-sm @if(Request::path() == 'settings') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Settings</a>
                    <a href="/test" class="my-1 text-sm @if(Request::path() == 'test') border-b border-purple-500 @endif font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0" href="#">Test</a>
                </div>

            </div>
        </div>
    </nav>
