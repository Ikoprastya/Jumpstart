<div>
    <div class="bg-white h-52 p-20 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
        <div class="text-2xl sm:text-center font-medium sm:text-sm text-gray-800">
            <a href="{{ url('/') }}" class="hover:text-primary-500 hover:underline">Home</a> <span> / Product</span>
        </div>
        <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-4xl text-gray-800" >Product</h1>
    </div>

    <div class="text-center bg-gray-100 shadow-[0px_1px_60px_5px_rgba(0,0,0,0.3)]   ">
        <div class="mx-40 ">
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-[3rem] py-20 ">

                    @if ($products->count() != 0)

                        @foreach ($products as $product)

                            <div class="shadow-lg pb-4 bg-white rounded-xl">
                                <div class="flex justify-center md:justify-center mb-3 ">
                                    <img src="{!! asset('storage') !!}/{!! $product->poster !!}" alt="product" class="h-72 w-full rounded-t-xl">
                                </div>
                                <h6 class="text-grey-800 font-bold text-lg flex justify-center md:justify-start mx-4">
                                    <button wire:click="showDetails({{ $product->id }})">
                                        {!! $product->name !!}
                                    </button>
                                </h6>
                                <p class="flex justify-center md:justify-start mx-4 ">Rp. <span class="mx-3">@money($product->price)</span></p>
                                <p class="flex justify-center md:justify-start mx-4 ">Stock: <span class="mx-3">@amount($product->amount)</span></p>
                                <div class="flex w-full justify-end">
                                    @if (auth()->user())
                                        <a href="#" wire:click.prevent="orderProduct({{ $product->id }})"
                                            class="bg-gray-800 text-white mx-4 p-2 rounded-md ">Add to chart</a>

                                    @else

                                    @endif

                                </div>
                            </div>

                        @endforeach
                    @else
                        <div class="w-full h-16 bg-white rounded-md flex items-center justify-between mb-5">
                            <h1 class="font-medium mx-5 text-hitem">There is no product yet :)</h1>
                        </div>
                    @endif


                </div>



        </div>
    </div>
</div>
