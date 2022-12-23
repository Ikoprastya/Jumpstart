<div>
    <div >
        <h6 class="text-4xl sm:text-start font-medium sm:text-3xl text-gray-800 bg-gray-200 px-52 py-8 border-2 border-gray-300 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">Order Detail</h6>
    </div>
    <div class="px-52 py-10 ">
        <div class="border-b-2 border-gray-300 font-medium sm:text-2xl ">
            <h2 class="mb-3">{{ $order->getUser->name }}</h2>
            <h2 class="mb-3">{{ $order->getProduct->name }}</h2>
            <h3 class="mb-3">{{ \Carbon\Carbon::parse($order->orderDateTime)->formatLocalized('%d %B %Y') }}</h3>
        </div>
        <div class="sm:text-lg ">
            <form wire:submit.prevent="codPayment">
                <div class="flex border-b-2 border-gray-300">
                    <div class="w-[20%] py-5">
                        <img src="{{ asset('storage') }}/{{ $order->getProduct->poster }}" alt="product" class=" rounded-lg h-52 w-screen shadow-2xl">
                    </div>
                    <div class="w-[80%] pl-28 py-5">
                        <div class="font-medium sm:text-xl flex ">
                            <div class="w-[40%]">
                                <h2 class="mb-3">{{ $order->getUser->email }}</h2>
                                <h3 class="mb-3">{{ $order->getUser->phone }}</h3>
                            </div>
                            <div class="w-[60%]">
                                <h3 class="mb-3 sm:text-lg px-5">{{ $order->getUser->address }}</h3>
                            </div>
                        </div>
                        <div>
                            <div class="sm:col-span-2 py-5">
                                <textarea id="message" wire:model='orderNote' rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Message form Jumpstart (Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex ">
                    <div class="w-[60%] py-5 mr-24">
                        <div class="mb-20">
                            <label for="large" class="block mb-4 text-xl font-extrabold text-orange-400 dark:text-white">Shipment</label>

                            <div class="grid grid-cols-3 gap-3">

                                    <div wire:click='selectShipment({{ $goSend->id }})'
                                        class="
                                            @if ($order->shipmentID == 1)
                                                border-solid border-2 border-green-400 h-[100px] text-green-400 dark:text-white bg-green-100
                                            @endif
                                                border-solid border-2 border-orange-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-orange-400 dark:text-white bg-orange-100">
                                        <span> {{ $goSend->name  }} </span>&nbsp
                                        <span> (Rp. @money($goSend->price)) </span>
                                    </div>

                                    <div wire:click='selectShipment({{ $jne->id }})'
                                        class="
                                            @if ($order->shipmentID == 2)
                                                border-solid border-2 border-green-400 h-[100px] text-green-400 dark:text-white bg-green-100
                                            @endif
                                                border-solid border-2 border-orange-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-orange-400 dark:text-white bg-orange-100">
                                        <span> {{ $jne->name  }} </span>&nbsp
                                        <span> (Rp. @money($jne->price)) </span>
                                    </div>

                                    <div wire:click='selectShipment({{ $personalCourier->id }})'
                                        class="
                                            @if ($order->shipmentID == 3)
                                                border-solid border-2 border-green-400 h-[100px] text-green-400 dark:text-white bg-green-100
                                            @endif
                                                border-solid border-2 border-orange-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-orange-400 dark:text-white bg-orange-100">
                                        <span> {{ $personalCourier->name  }} </span>&nbsp
                                        <span> (Rp. @money($personalCourier->price)) </span>
                                    </div>

                            </div>


                        </div>

                        <div class="mb-32">
                            <label for="large" class="block mb-4 text-xl font-extrabold text-orange-400 dark:text-white">Payment</label>

                            <div class="grid grid-cols-3 gap-3">
                                <div wire:click='selectPayment({{ $cod->id }})'
                                    class="
                                        @if ($order->paymentID == 1)
                                            border-solid border-2 border-green-400 h-[100px] text-green-400 dark:text-white bg-green-100
                                        @endif
                                            border-solid border-2 border-orange-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-orange-400 dark:text-white bg-orange-100">
                                    <span> {{ $cod->name  }} </span>
                                </div>

                                <div wire:click='selectPayment({{ $card->id }})'
                                    class="
                                        @if ($order->paymentID == 2)
                                            border-solid border-2 border-green-400 h-[100px] text-green-400 dark:text-white bg-green-100
                                        @endif
                                            border-solid border-2 border-orange-400 h-[100px] w-auto flex flex-col items-center justify-center text-md font-bold text-orange-400 dark:text-white bg-orange-100">
                                    <span> {{ $card->name  }} </span>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w-[40%] border-l-2 border-gray-300 pl-24 my-5">
                        <div class="">
                            <label for="large" class="block mb-4 text-2xl font-extrabold text-orange-400 dark:text-white">Summary</label>
                            <div class="">
                                <div class="mb-3 w-full text-sm font-medium border-b-2 border-gray-300 mr-64 py-4">
                                    <span> {{ $order->orderAmount}} items purchased</span>
                                </div>
                                <div class="mb-3 w-full  text-sm font-medium border-b-2 border-gray-300 mr-64 pb-4">
                                    <label for="delivery" class="block  text-lg font-medium text-gray-900 dark:text-white">Delivery Destination</label>
                                    <div class="text-green-500">
                                        @if ($order->shipmentID != null)
                                            <span> {{ $order->getShipment->estimate }} by {{ $order->getShipment->name }} </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 w-full text-sm font-medium  mr-64 pb-4">
                                    <label for="payment" class="block  text-lg font-medium text-gray-900 dark:text-white">Payment method</label>
                                    <div class="text-green-500">
                                        @if ($order->paymentID != null)
                                            <span> {{ $order->getPayment->name }} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-48">
                                <div class=" w-full text-sm font-medium mb-3">
                                    <div class="flex  w-full justify-between text-gray-900 ">
                                        <span class=" ">Cost of goods</span>
                                        <span class="text-end ">Rp. @money($order->orderAmount * $order->getProduct->price)</span>

                                    </div>
                                </div>
                                <div class=" w-full text-sm font-medium ">
                                    <div class="flex  w-full justify-between text-gray-900 ">
                                        @if ($order->shipmentID != null)
                                        <label>
                                            <span class="font-extrabold "> {{ $order->getShipment->name }} </span>Shipment
                                        </label>
                                            <span class="text-end "> Rp. @money($order->getShipment->price) </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class=" text-lg font-semibold mb-3">
                                    <div class="flex text-gray-900 ">
                                        <label for="total" class="block w-[50%]  text-3xl font-extrabold text-orange-400 dark:text-white ">Total</label>
                                        @if ($order->shipmentID != null)
                                            <span class="text-end w-[50%] text-xl font-extrabold">Rp. @money($order->getShipment->price + $order->orderAmount * $order->getProduct->price)</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center  text-center">
                                @if ($order->paymentID == 1)
                                    <button type="submit" class="bg-gray-800 text-white my-10 py-2 px-20 rounded-md w-full ">Cash on Delivery</button>
                                @else
                                    <a href="#" class="bg-gray-800 text-white my-10 py-2 px-20 rounded-md w-full ">Card Payment</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
