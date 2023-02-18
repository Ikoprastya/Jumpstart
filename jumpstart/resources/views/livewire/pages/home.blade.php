<div>
    <div class="relative px-6 lg:px-8 bg-image"
        style="
            background-image: url('/images/hero-benner.jpg');
            position: static;
        ">
        <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
            <div>
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-4xl text-white">Welcome To Our Store!</h1>

            </div>
            <div>
                <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl text-white">Choose an item for your needs</h1>
                <div class="mt-8 flex gap-x-4 sm:justify-center">
                <a href="{{ url('/signup') }}" class="inline-block rounded-lg px-10 py-1.5 text-base font-semibold leading-7 text-white ring-1 ring-white hover:ring-yellow-500">
                    Get Started
                    <span class="text-white" aria-hidden="true">&rarr;</span>
                </a>
                </div>
            </div>

            </div>
        </div>
        </div>
        <div class="mx-40 py-10 text-center md:text-left">
            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-4 ">
                <div>
                <div class="flex justify-center md:justify-center">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                </div>
                <h6 class="text-grey-800 font-semibold  flex justify-center md:justify-center">
                    Secure Payment
                </h6>
                <span class="flex justify-center md:justify-center">100% secure payment</span>
                </div>
                <div>
                <div class="flex justify-center md:justify-center">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h6 class="text-grey-800 font-semibold flex justify-center md:justify-center">
                    30 Day Return
                </h6>
                <span class="flex justify-center md:justify-center">if good have problems</span>
                </div>
                <div>
                <div class="flex justify-center md:justify-center">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h6 class="text-grey-800 font-semibold flex justify-center md:justify-center">
                    24/7 Support
                </h6>
                <span class="flex justify-center md:justify-center">dedicated support</span>
                </div>
                <div>
                <div class="flex justify-center md:justify-center">
                    <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <h6 class="text-grey-800 font-semibold flex justify-center md:justify-center">
                    Free Delivery
                </h6>
                <span class="flex justify-center md:justify-center">for all order over 80$</span>
                </div>
            </div>
        </div>

        <div class="py-10 text-center bg-gray-100 ">
        <div class="mx-40 mb-8">
            <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl text-gray-800 uppercase mb-6">Our Product</h1>

            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-3 gap-3 ">
                @foreach ($products as $item)
                    <div class="shadow-lg pb-4 bg-white rounded-xl mt-6">
                        <div class="flex justify-center md:justify-center mb-3 ">
                            <img src="{{ asset('storage') }}/{{ $item->poster }}" alt="product" class="h-72 w-full rounded-t-xl">
                        </div>
                        <h6 class="text-grey-800 font-bold text-lg flex justify-center md:justify-start mx-4">
                            {{ $item->name }}
                        </h6>
                        <p class="flex justify-center md:justify-start mx-4 mb-4">Rp. <span>@money($item->price)</span></p>
                        <p class="flex justify-center md:justify-start mx-4 mb-4">Stock: <span>@amount($item->amount)</span></p>

                    </div>

                @endforeach

            </div>



            </div>
            <a href="{{ route('product') }}" class="bg-gray-800 text-white mt-10 py-2 px-20 rounded-md ">Show more</a>
        </div>
</div>
