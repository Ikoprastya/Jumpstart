<div >
    <nav class="p-3 border-gray-200 bg-gray-800 dark:bg-gray-800 dark:border-gray-500 ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="#" class="flex items-center">
              <img src="{{ asset('/images/logo-company.png') }}" class="h-3 mr-3 sm:h-20" alt="Flowbite Logo" />
          </a>
          <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                <a href="{{ ('/') }}" class=" text-white block py-2 pl-3 pr-4  rounded md:bg-transparen md:p-0 md:dark:text-white md:hover:text-yellow-500 dark:bg-yellow-600 md:dark:bg-transparent" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-white-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
              </li>
              <li>
                <a href="{{ url('/login') }}" class=" text-white block py-2 pl-3 pr-4  rounded hover:bg-white-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
              </li>
              <li>
                <a href="{{ url('/signup') }}" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-white-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-500 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
