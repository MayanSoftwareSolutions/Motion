<div style="display:flex; justify-content:center;">

  <div class="max-w-8xl mx-auto py-10 sm:px-6 lg:px-8">
          <div class="h-64 grid grid-rows-1 grid-flow-col gap-1">
            <div class"col-span-2">

              <div class="container flex w-full items-center justify-center">
                <div class="col-span-3 bg-white p-3 rounded">
                  <div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-2 mb-2">
                        <h1 class="text-lg font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">Pending Orders</h1>
                    </div>
                   <ul class="flex flex-col bg-white p-1">
                     @foreach($productstock as $product)
                        <li class="border-gray-400 flex flex-row mb-2">
                          <div class="select-none cursor-pointer bg-gray-50 rounded-md flex flex-1 items-center p-4  transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                            <div class="flex flex-col rounded-md w-10 h-10 bg-gray-50 justify-center items-center mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                              <div class="font-medium">Order No: {{ $product['order_number'] }}</div>
                              <div class="text-gray-600 text-sm">Items: {{ count($product['line_items']) }}</div>
                              <div class="@if($product['financial_status'] == "Pending") text-red-600 text-sm @endif  text-green-600 text-sm">Payment: {{ $product['financial_status'] }}</div>
                            </div>
                            <div class="text-gray-600 text-xs">£{{ $product['current_subtotal_price'] }}</div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>

            </div>

            <div class"col-span-1">

              <div class="col-span-3 bg-white p-3 rounded">
                <div class="max-w-2xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-600 dark:text-gray-400">Order Date {{now()->format('j F, Y')}}</span>
                        <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-red-500 rounded cursor-pointer hover:bg-red-600">Cancel Order</a>
                    </div>

                    <div class="mt-2">
                        <h1 class="text-2xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline">Order Details</h1>

                    </div>
                    <br>
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                    </div>

                    <div class="flex items-center justify-between mt-4">

                        <div class="flex items-center">
                            <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-teal-500 rounded cursor-pointer hover:bg-purple-600">Prepair Order</a>
                        </div>
                    </div>
                </div>
              </div>

            </div>
          </div>

  </div>

</div>
