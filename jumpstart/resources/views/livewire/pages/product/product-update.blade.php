<div>
    <div class="w-full shadow-2xl mb-16 rounded-b-md px-60 py-20 border-t-2">
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
        <div class="p-10 border-2">

            <form class="space-y-4 md:space-y-6" wire:submit.prevent='update'>
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" wire:model.defer='name' name="name" id="name"
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
                    <input type="text" wire:model.defer='price' name="price" id="price"
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
                    <label for="amount"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">The Amount
                        of Goods</label>
                    <input type="text" wire:model.defer='amount' name="amount" id="amount"
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
                    <textarea id="description"wire:model.defer='description' rows="4"
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

                <button wire:click.prevent="cancel()" class="bg-red-600 text-white py-2 px-4 rounded-lg">Cancel</button>
            </form>
        </div>
    </div>
</div>
