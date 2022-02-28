@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">
        <div class="flex w-full pl-3 sm:pl-6 pr-3 py-5 items-center justify-between bg-indigo-50 rounded-t">
            <h3 class="text-gray-800 font-bold text-base sm:text-xl">Visiting Details</h3>
            <button class="ml-0 sm:ml-6 bg-indigo-700 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 rounded text-white px-5 h-8 flex items-center text-sm">Create New</button>
        </div>
        <div class="flex flex-col md:flex-row p-3 justify-between items-start md:items-stretch w-full">
            <div class="w-full md:w-1/3 flex flex-col md:flex-row items-start md:items-center">
                <div class="flex items-center">
                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 p-2 border-gray-200 text-gray-600 dark:text-gray-400 border rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Delete table" role="button">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1.svg" alt="trash">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1dark.svg" alt="trash">
                    </button>
                </div>
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row items-start md:items-center justify-end">
                <x-inputs.search-bar/>
            </div>
        </div>
        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded border border-gray-300" id="main-table">
                <thead>
                    <tr class="w-full bg-gray-100 dark:bg-gray-700 border-b border-gray-300">
                        <th role="columnheader" class="pl-3 w-24 py-3">
                            <div class="flex items-center">
                                <input placeholder="check box" type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white" onclick="checkAll(this)" />
                                <div class="opacity-0 cursor-defaut ml-4 text-gray-800 dark:text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="6 15 12 9 18 15" />
                                    </svg>
                                </div>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">P-ID</p>

                            </div>
                        </th>

                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Images</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Status</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Address</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Date </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> House Area</p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Year Build </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Rent </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 pr-12 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Actions</p>
                            <button role="button" aria-label="option" class="cursor-pointer  mr-3 text-gray-800 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 rounded">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8.svg" alt="down">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8dark.svg" alt="down">
                                </button>
                                <ul class="bg-white shadow rounded mt-2 py-1 mr-1 w-32 absolute top-0 right-0 mt-8 hidden dropdown-content">
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Option 1</li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Option 2</li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Option 3</li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 hover:text-white px-3 font-normal">Option 4</li>
                                </ul>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="pl-3 w-24 py-3">
                            <div class="flex items-center">
                                <input placeholder="check box" type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white" onclick="tableInteract(this)" />
                                <button onclick="accordionHandler(this)" class="focus:outline-none focus:ring-2 focus:ring-gray-400 cursor-pointer text-gray-800 dark:text-gray-100 ml-2 lg:ml-4 mr-2 sm:mr-0 border border-transparent rounded focus:outline-none" aria-label="Toggle Details" role="button">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8.svg" alt="down">
                                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg8dark.svg" alt="down">
                                </button>
                            </div>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">PID-1234 542</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <div class="flex items-center justify-center w-20 h-6 bg-blue-100 rounded-md ">
                                <span role="button" class="text-xs font-normal text-blue-700">Images</span>
                            </div>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <div class="flex items-center justify-center w-20 h-6 bg-blue-100 rounded-md">
                                <span class="text-xs font-normal text-blue-700">Occupied</span>
                            </div>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">h@12 st34, Chamanabad, dhoke sydean road rawalpindi</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">28/10/2020</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">8 marla</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">2020</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">9000</p>
                        </td>
                        <td class="pl-4 pr-4 whitespace-no-wrap w-32">
                            <div class="bg-blue-100 h-6 w-20 rounded-md flex items-center justify-center">
                                <span class="text-xs text-blue-700 font-normal">Assigned</span>
                            </div>
                                <ul aria-label="Options" class="invisible z-10 bg-white transition duration-300 opacity-0 bg-white shadow rounded mt-2 w-48 py-1 absolute">
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-gray-100 px-3 font-normal">Edit Project</li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-gray-100 px-3 font-normal">Delete Project</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="detail-row">
                        <td colspan="9">
                            <div class="flex items-stretch w-full border-b border-gray-300 dark:border-gray-200">
                                <ul>
                                    <li class="cursor-pointer text-sm leading-3 tracking-normal flex items-center justify-center">
                                        <a class="p-3 border text-gray-800 dark:text-gray-100 border-transparent hover:text-indigo-700 focus:bg-indigo-700 focus:text-white" href="javascript: void(0)">
                                            <svg aria-label="Option 1" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="w-full bg-white border-l border-gray-300 dark:bg-gray-800">
                                    <h4 class="pl-10 w-full text-sm text-gray-800 dark:text-gray-100 py-3 bg-gray-100 dark:bg-gray-700">Property Details</h4>
                                    <div class="bg-white dark:bg-gray-800 px-8 py-6">
                                        <div class="flex items-start">
                                            <div class="w-1/3">
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Name</p>
                                                <h5 class="text-xs font-normal text-gray-800 dark:text-gray-100">Mahad</h5>
                                            </div>
                                            <div class="w-1/3">
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">CNIC</p>
                                                <h5 class="text-xs font-normal text-gray-800 dark:text-gray-100">3564-5584428-5</h5>
                                            </div>
                                            <div class="w-1/3">
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Duration</p>
                                                <h5 class="text-xs font-normal text-gray-800 dark:text-gray-100">6 monmths</h5>
                                            </div>
                                        </div>
                                        <div class="flex items-start mt-6">
                                            <div class="w-1/3">
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Basic Necessity</p>
                                                <h5 class="text-xs font-normal text-gray-800 dark:text-gray-100"> <li>Electircity</li><li>Phone/Internet</li> <li>Gas</li><li>Water Supply</li>    </h5>
                                            </div>

                                            <div class="w-1/3">
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Agent</p>
                                                <h5 class="text-xs font-normal text-indigo-700">Usman </h5>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Owner</p>
                                                <h5 class="text-xs font-normal text-indigo-700">Salman </h5>
                                            </div>

                                        </div>
                                        <hr class="w-full my-6 border-t border-gray-300" />
                                        <h5 class="mb-2 text-xs font-bold text-gray-600 dark:text-gray-400">Details</h5>
                                        <p class="w-3/5 text-xs font-normal leading-6 text-gray-800 dark:text-gray-100">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
</x-admin-sidebar>
@endsection
