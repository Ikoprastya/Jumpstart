<div>
    <div >

        <h6 class="text-4xl sm:text-start bg-gray-200 first-letter:font-medium sm:text-3xl text-gray-800 px-52 py-4 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">Manage / Transaction</h6>
    </div>
    <div class="px-52 py-10  ">

<div class="border-b border-gray-200 dark:border-gray-700">
    <div>
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="{!! route('admin.manage.user') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>Users
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('admin.manage.product') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group ">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>Product
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('admin.manage.transaction') !!}" class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>Transaction
                </a>
            </li>

        </ul>
    </div>
    <div>
        <div class="mt-10">

                <div class="w-full shadow-2xl rounded-b-md">
                    <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300  flex justify-between px-5 items-center">
                        <div>
                            <h1 class="p-4 font-bold text-2xl text-gray-800">All Transaction</h1>
                        </div>
                    </div>

                    <div>
                        <div class="overflow-x-auto relative px-5">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400 border-b-2 border-gray-300">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Product Id
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Product name
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Price/Amount
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Date
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            User
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Status
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Note
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $item)
                                        <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $item->orderNumberID }}
                                                </th>
                                                <td class="py-4 px-6">
                                                    {{ $item->getProduct->name }}
                                                </td>
                                                <td class="py-4 px-6">
                                                    <span>Rp. @money( $item->paymentHistory ) /</span>
                                                    <span>@amount( $item->orderAmount )</span>
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{ $item->orderDateTime }}
                                                </td>
                                                <td class="py-4 px-6 ">
                                                    {{ $item->getUser->name }}
                                                </td>
                                                <td class="py-4 px-6 ">
                                                    {{ $item->orderStatus }}
                                                    @if ($item->orderStatus == "Need Verify")
                                                        <button wire:click='updateStatus({{ $item->id }})' class="p-1 text-white bg-green-600 rounded-md">VERIFY?</button>
                                                    @else


                                                        <button wire:click='updateStatus({{ $item->id }})' class="p-1 text-white bg-green-600 rounded-md" hidden>Verify?</button>

                                                    @endif
                                                </td>
                                                <td class="py-4 px-6 ">
                                                    {{ $item->orderNote }}
                                                </td>

                                            </tr>
                                    @endforeach

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
