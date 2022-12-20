<div>
    <div >
        <h6 class="text-4xl sm:text-start bg-gray-200 first-letter:font-medium sm:text-3xl text-gray-800 px-52 py-4 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">Account / Profile</h6>
    </div>
    <div class="px-52 py-10  ">

<div class="border-b border-gray-200 dark:border-gray-700">
    <div>
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="{!! route('user.profile') !!}" class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>Profile
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('user.changepassword') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>Change Password
                </a>
            </li>
            <li class="mr-2">
                <a href="{!! route('user.chart') !!}" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>Chart
                </a>
            </li>

        </ul>
    </div>
    <div>
        <div class="flex mt-10">
                <div class="w-[30%] h-full shadow-2xl mr-10">


                        <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300 ">
                            <h1 class="p-4 font-bold  text-gray-800">Profile Picture</h1>
                        </div>
                        {{-- <form method="POST" action="{!! url('user/profile/upload/'.Auth::user()->id) !!}"> --}}
                            {{csrf_field()}}
                            @if ($poster)
                                <img src="{{ $poster->temporaryUrl() }}" alt="profile" class="rounded-[100%] w-auto h-44 px-28 mt-10 mb-3 " >
                            @else

                                @if (auth()->user()->poster)
                                    <img src="{!! asset('storage') !!}/{!! auth()->user()->poster !!}" alt="profile" class="rounded-[100%] w-auto h-44 px-28 mt-10 mb-3 " >

                                @else
                                    <img src="{{ asset('images/default.jpg') }}" alt="profile" class="rounded-[100%] w-auto h-44 px-28 mt-10 mb-3  m-auto">

                                @endif
                            @endif
                            <div class="text-center pb-4">
                                <label for="images">JPG or PNG no larger than 5 MB</label>
                                <div class="">
                                    <input type="file" wire:model="poster" name="poster" value="Upload New Image" class=" px-28  w-full py-3" accept="image/png, image/jpg, image/jpeg, image/svg">
                                    <button wire:click='upload' class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save Changes</button>

                                </div>
                            </div>
                        {{-- </form> --}}


                </div>
                <div class="w-[70%] shadow-2xl">
                    <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300 ">
                        <h1 class="p-4 font-bold  text-gray-800">Account Detail</h1>
                    </div>
                    <div class="p-10">
                        @if (session()->has('success'))
                            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                <div class="flex">
                                <div class="py-1"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
                                <div>
                                    <p class="font-bold">{{ session('success') }}</p>
                                </div>
                                </div>
                            </div>

                        @endif
                        <form class="space-y-4 md:space-y-6" method="POST" action="{!! url('user/profile/update/'.Auth::user()->id) !!}">
                            {{csrf_field()}}
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text"  value="{{ auth()->user()->name }}" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  disabled>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email"  value="{{ auth()->user()->email }}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  disabled>
                            </div>

                            <div class="flex ">
                                <div class="w-[50%] mr-2">
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="text"   value=" {{ Auth()->user()->phone }} " name="phone" id="phone" class="@error('phone') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="phone number" >
                                </div>
                                <div class="w-[50%] mr-2">
                                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                    <input type="text"  value=" {{ Auth()->user()->country }} "  name="country" id="country" class="@error('country') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="country" >
                                </div>

                            </div>

                            <div>
                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail Address</label>
                                <input type="text" value=" {{ Auth()->user()->address }} " name="address" id="address" class="@error('address') border border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="address" >
                            </div>

                            <button type="submit" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save Changes</button>

                        </form>
                    </div>
                </div>

        </div>



    </div>
</div>

    </div>
</div>
