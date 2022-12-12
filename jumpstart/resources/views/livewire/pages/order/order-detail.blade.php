<div>
    <div >
        <h6 class="text-4xl sm:text-start font-medium sm:text-3xl text-gray-800 bg-gray-200 px-52 py-8 border-2 border-gray-300 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">User Detail</h6>
    </div>
    <div class="px-52 py-10 ">
        <div class="border-b-2 border-gray-300 font-medium sm:text-2xl ">
            <h2 class="mb-3">Name User</h2>
            <h3 class="mb-3">15 - 03 - 2003</h3>
        </div>
        <div class="sm:text-lg ">
            <div class="flex border-b-2 border-gray-300">
                <div class="w-[20%] py-5">
                    <img src="{{ asset('images/profile.jpg') }}" alt="product" class=" rounded-sm h-52 w-screen shadow-2xl">
                </div>
                <div class="w-[80%] pl-28 py-5">
                    <div class="font-medium sm:text-xl flex ">
                        <div class="w-[40%]">
                            <h2 class="mb-3">testing@gmail.com</h2>
                            <h3 class="mb-3">019230128301</h3>
                        </div>
                        <div class="w-[60%]">
                            <h3 class="mb-3 sm:text-lg px-5">Indonesia, Jalan Mataram Gg Mangga No 5 E</h3>
                        </div>
                    </div>
                    <div>
                        <div class="sm:col-span-2 py-5">
                            <textarea id="message" rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Message form Jumpstart (Optional)"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex ">
                <div class="w-[60%] py-5 mr-24">
                    <div class="mb-32">
                        <label for="large" class="block mb-4 text-xl font-extrabold text-orange-400 dark:text-white">Shipment</label>
                        <select id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a shipment</option>
                            <option value="go-send">Go-send (15.000)</option>
                            <option value="jne">JNE (10.000)</option>
                            <option value="personal-courier">Personal Courier (30.000)</option>  
                        </select>
                    </div>

                    <div class="mb-32">
                        <label for="large" class="block mb-4 text-xl font-extrabold text-orange-400 dark:text-white">Payment</label>
                        <select id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a payment</option>
                            <option value="e-wallet">e-wallet (15.000.000 left)</option>
                            <option value="bank-transfer">Bank Transfer </option>
                            <option value="virutal-account">Virtual Account</option>
                            <option value="cod">Cash on Delivery (COD)</option>
                        </select>
                    </div>
                </div>
                <div class="w-[40%] border-l-2 border-gray-300 pl-24 my-5">
                    <div class="">
                        <label for="large" class="block mb-4 text-2xl font-extrabold text-orange-400 dark:text-white">Summary</label>
                        <div class="">
                            <div class="mb-3  text-sm font-medium border-b-2 border-gray-300 mr-64 py-4">
                                <input class="w-4 " value="10" /> <span > items purchased</span>
                            </div>
                            <div class="mb-3 text-sm font-medium border-b-2 border-gray-300 mr-64 pb-4">
                                <label for="delivery" class="block  text-lg font-medium text-gray-900 dark:text-white">Delivery Destination</label>
                                <div class="text-green-500">
                                    <input class="w-4 " value="2" name="delivery" /> <span > day by JNE</span>
                                </div>
                            </div>
                            <div class="mb-3 text-sm font-medium  mr-64 pb-4">
                                <label for="payment" class="block  text-lg font-medium text-gray-900 dark:text-white">Payment method</label>
                                <div class="text-green-500">
                                    <input class="w-full " value="Bank Transfer" name="payment" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-48">
                            <div class=" w-full text-sm font-medium mb-3">
                                <div class="flex  w-full justify-between text-gray-900 ">
                                    <span class=" ">Cost of goods</span>
                                    <input class="text-end   " value="500.000" name="delivery" /> 
                                </div>
                            </div>
                            <div class=" w-full text-sm font-medium ">
                                <div class="flex  w-full justify-between text-gray-900 ">
                                    <label>
                                        <span class="font-extrabold ">JNE </span>Shipment</label>
                                    <input class="text-end   " value="10.000" name="delivery" /> 
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class=" w-full text-lg font-semibold mb-3">
                                <div class="flex  w-full justify-between text-gray-900 ">
                                    <label for="total" class="block mb-4 text-3xl font-extrabold text-orange-400 dark:text-white ">Total</label>
                                    <input class="text-end  text-3xl font-extrabold" value="500.000" name="total" /> 
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center  text-center">
                            <a href="{{ url('/user') }}" class="bg-gray-800 text-white my-10 py-2 px-20 rounded-md w-full ">Back</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
