<div>
    <div id="data">
        <h6
            class="text-4xl sm:text-start bg-gray-200 first-letter:font-medium sm:text-3xl text-gray-800 px-52 py-4 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">
            Manage / Product</h6>
    </div>
    <div class="px-52 py-10  ">

        <div class="border-b border-gray-200 dark:border-gray-700">
            <div>
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="{!! route('admin.manage.user') !!}"
                            class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                            <svg aria-hidden="true"
                                class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>Users
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="{!! route('admin.manage.product') !!}"
                            class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group ">
                            <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                                </path>
                            </svg>Product
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="{!! route('admin.manage.transaction') !!}"
                            class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                            <svg aria-hidden="true"
                                class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>Transaction
                        </a>
                    </li>

                </ul>
            </div>
            <div>
                <div class="mt-10">


                    <div class="w-full shadow-2xl mb-16 rounded-b-md">
                        <div
                            class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300  flex justify-between px-5 items-center">
                            <div>
                                <h1 class="p-4 font-bold text-2xl text-gray-800">Data Product</h1>
                            </div>
                        </div>
                        <div id="success">

                            @if (session()->has('success'))
                                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                                    role="alert">
                                    <div class="flex">
                                        <div class="py-1"><svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg></div>
                                        <div>
                                            <p class="font-bold">{{ session('success') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="p-10 ">

                            <form class="space-y-4 md:space-y-6" wire:submit.prevent='store'>
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" wire:model='name' name="name" id="name"
                                        class="@error('name') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name">
                                    @error('name')
                                        <div
                                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="text" wire:model='price' name="price" id="price"
                                        class="@error('price') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="price">
                                    @error('price')
                                        <div
                                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="poster"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster</label>
                                    <input type="file" wire:model='poster' name="poster"
                                        class="@error('poster') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="poster" accept="image/png, image/jpg, image/jpeg, image/svg">

                                    @if ($poster)
                                        <img src="{{ $poster->temporaryUrl() }}" class="mx-auto rounded my-2"
                                            width="500px" height="500px">
                                    @endif
                                    @error('poster')
                                        <div
                                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="amount"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">The Amount
                                        of Goods</label>
                                    <input type="text" wire:model='amount' name="amount" id="amount"
                                        class="@error('amount') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="the amount of goods">
                                    @error('amount')
                                        <div
                                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                                        Product</label>
                                    <textarea id="description"wire:model='description' rows="4"
                                        class="@error('description') border border-red-400 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="write the product description here..."></textarea>
                                    @error('description')
                                        <div
                                            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save
                                    Changes</button>

                            </form>
                        </div>
                    </div>





                    <div class="w-full shadow-2xl rounded-b-md">
                        <div
                            class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300  flex justify-between px-5 items-center">
                            <div>
                                <h1 class="p-4 font-bold text-2xl text-gray-800">All Product</h1>
                            </div>
                        </div>

                        <div>
                            <div class="overflow-x-auto relative px-5">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-900 uppercase dark:text-gray-400 border-b-2 border-gray-300">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">
                                                Product
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Product name
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Price
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Amount
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products->count() != 0)

                                            @foreach ($products as $product)
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td class="py-4 px-6">
                                                        <img src="{!! asset('storage') !!}/{!! $product->poster !!}"
                                                            alt="profile" class="w-auto h-20 ">
                                                    </td>
                                                    <th scope="row"
                                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $product->name }}
                                                    </th>
                                                    <td class="py-4 px-6">
                                                        Rp. <span>{{ $product->price }}</span>
                                                    </td>
                                                    <td class="py-4 px-6 ">
                                                        {{ $product->amount }}
                                                    </td>
                                                    <td class="py-4 px-6 text-green-500 font-semibold flex flex-col">
                                                        <!-- Modal toggle -->
                                                        {{-- <a wire:click.prevent="editProduct({{ $product->id }})"
                                                            data-bs-toggle="modal" data-bs-target="#productModal"
                                                            type="button" data-modal-toggle="editUserModal"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                                            product</a> --}}
                                                        <a wire:click.prevent="destroy({{ $product->id }})"
                                                            type="button"
                                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete
                                                            product</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <div
                                                class="w-full h-16 bg-white rounded-md flex items-center justify-between mb-5">
                                                <h1 class="font-medium mx-5 text-hitem">There is no product yet :)</h1>
                                            </div>
                                        @endif

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
