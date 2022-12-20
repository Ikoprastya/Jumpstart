<div>
    <div>
        <h6 class="text-4xl sm:text-start font-medium sm:text-3xl text-gray-800 bg-gray-200 px-52 py-8 border-2 border-gray-300">Product Detail</h6>
    </div>
    <div class="px-52 py-10">
        <div class="border-b-2 border-gray-300 font-medium sm:text-2xl ">
            <h2 class="mb-3">{{ $name }}</h2>
            <h3 class="mb-3">Stock: <span>@amount($amount)</span></h3>
        </div>
        <div class="my-3 font-medium sm:text-2xl">
            <h3>Rp. <span>@money($price)</span></h3>
        </div>
        <div class="sm:text-lg" >
            <div class="flex">
                <div class="w-[60%]">
                    {{ $description }}
                </div>
                <div class="w-[40%] px-10">
                    <img src="{{ asset('storage') }}/{{ $poster }}" alt="product" class=" rounded-xl h-96 w-screen shadow-2xl">
                </div>
            </div>
            <div>
                <a href="{{ url('/product') }}" class="bg-gray-800 text-white py-2 px-20 rounded-md">Back</a>
            </div>
        </div>
    </div>
</div>
