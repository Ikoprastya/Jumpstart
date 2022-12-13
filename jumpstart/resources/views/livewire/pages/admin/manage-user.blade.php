<div>
    <div >
        
        <h6 class="text-4xl sm:text-start bg-gray-200 first-letter:font-medium sm:text-3xl text-gray-800 px-52 py-4 shadow-[0px_10px_20px_1px_rgba(0,0,0,0.3)]">Manage / User</h6>
    </div>
    <div class="px-52 py-10  ">
        
<div class="border-b border-gray-200 dark:border-gray-700">
    <div>
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="/admin/manage/user" class="inline-flex p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>Users
                </a>
            </li>   
            <li class="mr-2">
                <a href="/admin/manage/product" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>Product
                </a>
            </li>
            <li class="mr-2">
                <a href="/admin/manage/transaction" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg aria-hidden="true" class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>Transactions
                </a>
            </li>
            
        </ul>
    </div>
    <div>
        <div class="mt-10">
                
                <div class="w-full shadow-2xl">
                    <div class="bg-gray-200 rounded-t-md w-full border-2 border-gray-300 ">
                        <h1 class="p-4 font-bold  text-gray-800">Data User</h1>
                    </div>
                    
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-9">
                                        Name
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Email
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Role
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white"> 
                                        
                                        <span class=" pl-3text-base font-semibold">Neil Sims</span>
                                     
                                    </th>
                                    <td class="py-4 px-6">
                                        <span class="font-normal text-gray-500">neil.sims@flowbite.com</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="flex items-center">
                                            Admin
                                       </span>
                                    </td>
                                    <td class="py-4 px-6 flex flex-col">
                                        <!-- Modal toggle -->
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                        <a href="#" type="button" data-modal-toggle="editUserModal" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete user</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Edit user modal -->
                        <div id="editUserModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Edit user
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editUserModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                                <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                                <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                                <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                                <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                                                <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                                                <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

        </div>



    </div>
</div>

    </div>
</div>
