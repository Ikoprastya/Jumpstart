<div>
    <div >

        <h6 class="text-4xl sm:text-start bg-gray-200 first-letter:font-medium sm:text-3xl text-gray-800 px-52 py-4 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">Account / Change Password</h6>
    </div>
    <div class="px-52 py-10  ">

<div class="border-b border-gray-200 dark:border-gray-700">
    <div>
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="{!! route('user.profile') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>Profile
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('user.changepassword') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>Change Password
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('user.chart') !!}" class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>Chart
                </a>
            </li>

        </ul>
    </div>
    <div>
        <div class="mt-10">

                <div class="w-full shadow-2xl mb-16 rounded-b-md">
                    <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300  flex justify-between px-5 items-center">
                        <div>
                            <h1 class="p-4 font-bold text-2xl text-gray-800">Chart</h1>
                        </div>
                        <div>
                            <a href="{{ url('/product') }}">
                                <h1 class="p-2 font-bold  text-white add-pro bg-primary-600 rounded-md mr-4 ">Add Product</h1>
                            </a>
                        </div>
                    </div>
                    <div class="p-10 ">

                        @if ($orders ->count() != 0)
                                @foreach ($orders as $order)
                                <div class=" bg-gray-200  w-full border-gray-300  shadow-lg  px-10 py-3 mb-8 ">
                                    <div class="flex items-center">
                                        <div class="w-[10%] p-2">
                                            <img src="{{ asset('storage') }}/{{ $order->getProduct->poster }}" alt="product" class=" rounded-xl h-28 w-auto shadow-2xl ">

                                        </div>
                                        <div class="w-[60%] font-bold text-lg text-gray-800 ">
                                            <h1>{{ $order->getProduct->name }}</h1>
                                            <h2>Rp. <span>@money($order->getProduct->price * $order->orderAmount) </span></h2>
                                        </div>
                                        <div class="w-[10%] font-bold text-lg text-gray-800 flex text-center">
                                                @if ($order->orderAmount <= $order->getProduct->amount)
                                                    <button class="text-3xl w-[25%]" wire:click='plus({{ $order->id }})'>+</button>

                                                @else
                                                    <button class="text-3xl w-[25%]"  disabled>+</button>

                                                @endif
                                                <input type="number"  class="w-[50%] text-center rounded-lg " name="amount" value="{{ $order->orderAmount }}" readonly>
                                                @if ($order->orderAmount >= 1)
                                                    <button class="text-3xl w-[25%]" wire:click='minus({{ $order->id }})'>-</button>
                                                @else
                                                    <button class="text-3xl w-[25%]"  disabled>-</button>
                                                @endif

                                        </div>
                                        <div class="w-[10%] font-bold text-md text-gray-800 text-end">
                                            @if ($order->orderAmount >= 1)
                                                <a  href="#" wire:click.prevent="checkOut({{ $order->id }})" class="p-2 font-semibold  text-white add-pro bg-green-600 rounded-md mr-4 " >Check Out</a>

                                            @else
                                                <button  class="p-2 font-semibold  text-white add-pro bg-green-600 rounded-md mr-4" >Check Out</button>

                                            @endif
                                        </div>
                                        <div class="w-[10%] font-bold text-lg text-gray-800 text-center">
                                            <a href="" class="p-2 font-semibold  text-white add-pro bg-red-600 rounded-md mr-4">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            @else

                                <div class="w-full h-16 bg-white rounded-md flex items-center justify-between mb-5">
                                    <h1 class="font-medium mx-5 text-hitem">There is no product on chart :)</h1>
                                </div>

                            @endif




                    </div>
                </div>

                <div class="w-full shadow-2xl rounded-b-md">
                    <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300  flex justify-between px-5 items-center">
                        <div>
                            <h1 class="p-4 font-bold text-2xl text-gray-800">History Transaction</h1>
                        </div>
                    </div>

                    <div>

                        <div class="overflow-x-auto relative px-5">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400 border-b-2 border-gray-300">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Product name
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Date
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Amount
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="py-4 px-6">
                                            15 market 2002
                                        </td>
                                        <td class="py-4 px-6">
                                            Rp. <span>20.000</span>
                                        </td>
                                        <td class="py-4 px-6 text-green-500 font-semibold">
                                            success
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="py-4 px-6">
                                            15 market 2002
                                        </td>
                                        <td class="py-4 px-6">
                                            Rp. <span>20.000</span>
                                        </td>
                                        <td class="py-4 px-6 text-green-500 font-semibold">
                                            success
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="py-4 px-6">
                                            15 market 2002
                                        </td>
                                        <td class="py-4 px-6">
                                            Rp. <span>20.000</span>
                                        </td>
                                        <td class="py-4 px-6 text-green-500 font-semibold">
                                            success
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>

        </div>



    </div>
</div>

    </div>
</div>
