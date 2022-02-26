@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">
        <div class="flex w-full pl-3 sm:pl-6 pr-3 py-5 items-center justify-between bg-indigo-50 rounded-t">
            <h3 class="text-gray-800 font-bold text-base sm:text-xl">Jack and Jill Enterprise</h3>
            <button class="ml-0 sm:ml-6 bg-indigo-700 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 rounded text-white px-5 h-8 flex items-center text-sm">Create New</button>
        </div>
        <div class="flex flex-col md:flex-row p-3 justify-between items-start md:items-stretch w-full">
            <div class="w-full md:w-1/3 flex flex-col md:flex-row items-start md:items-center">
                <div class="flex items-center">
                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 p-2 border-gray-200 text-gray-600 dark:text-gray-400 border rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Delete table" role="button">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1.svg" alt="trash">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1dark.svg" alt="trash">
                    </button>
                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-gray-600 p-2 ml-2 border-gray-200 dark:text-gray-400 border rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="upload Table" role="button">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg2.svg" alt="upload">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg2dark.svg" alt="upload">
                    </button>
                </div>
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row items-start md:items-center justify-end">
                <div class="flex items-center border-gray-200 border rounded mt-3 md:mt-0">
                    <button aria-label="Display style 1" role="button" class="text-gray-600 dark:text-gray-400 p-2 border-transparent border rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg3.svg" alt="display">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg3dark.svg" alt="display">
                    </button>
                    <button role="button" aria-label="Display style 2" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-indigo-700 p-2 bg-gray-200 border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg4.svg" alt="display">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg4dark.svg" alt="display">
                    </button>
                    <button role="button" aria-label="Display style 3" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-gray-600 dark:text-gray-400 p-2 border-transparent border rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg5.svg" alt="display">
                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg5dark.svg" alt="display">
                    </button>
                </div>
                <div class="flex flex-col w-full sm:w-1/2 md:ml-4 mt-3 md:mt-0">
                    <div class="relative w-full">
                        <div aria-hidden="true" class="absolute cursor-pointer text-gray-600 dark:text-gray-400 flex items-center pr-3 right-0 border-l h-full">
                            <span class="ml-2 mr-1">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg6.svg" alt="Filter">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg6dark.svg" alt="Filter">
                            </span>
                            <span class="text-sm leading-tight tracking-normal">Filter</span>
                        </div>
                        <div class="absolute text-gray-600 dark:text-gray-400 flex items-center pl-3 h-full">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg7.svg" alt="search">
                            <img class="dark:block hidden" src="../svgs/svg7dark.svg" alt="search">
                        </div>
                        <label for="search" class="hidden text-gray-800 text-sm font-bold leading-tight tracking-normal mb-2"></label>
                        <input  id="search" class="w-full text-gray-600 bg-transparent dark:bg-gray-800 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 font-normal pl-8 pr-24 h-10 flex items-center text-sm border-gray-300 dark:border-gray-200 rounded border" placeholder="Search by project name or owner" />
                    </div>
                </div>
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
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">User_ID</p>

                            </div>
                        </th>

                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">ProprtyID</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Owner Name</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">User PhoneNumber</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Date </p>

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
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">100</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">11</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Muhammad Saad</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">03129874561</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">28/10/2020</p>
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
                                    <li autofocus class="cursor-pointer flex items-center justify-center">
                                        <a class="p-3 border text-gray-800 dark:text-gray-100 border-transparent focus:bg-indigo-700 focus:text-white" href="javascript:void(0)">
                                            <svg aria-label="Option 2" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="cursor-pointer text-sm leading-3 tracking-normal flex items-center justify-center">
                                        <a class="p-3 border text-gray-800 dark:text-gray-100 border-transparent hover:text-indigo-700 focus:bg-indigo-700 focus:text-white" href="javascript:void(0)">
                                            <svg aria-label="Option 3" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                                <circle cx="12" cy="12" r="9"></circle>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="cursor-pointer text-sm leading-3 tracking-normal flex items-center justify-center">
                                        <a class="p-3 border text-gray-800 dark:text-gray-100 border-transparent hover:text-indigo-700 focus:bg-indigo-700 focus:text-white" href="javascript:void(0)">
                                            <svg aria-label="Option 4" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="7 8 3 12 7 16"></polyline>
                                                <polyline points="17 8 21 12 17 16"></polyline>
                                                <line x1="14" y1="4" x2="10" y2="20"></line>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="w-full bg-white border-l border-gray-300 dark:bg-gray-800">
                                    <h4 class="pl-10 w-full text-sm text-gray-800 dark:text-gray-100 py-3 bg-gray-100 dark:bg-gray-700">Property Details</h4>
                                    <div class="bg-white dark:bg-gray-800 px-8 py-6">
                                        <div class="flex items-start">
                                            <div class="w-1/3">
                                                <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Owner</p>
                                                <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">Muhammad Saad</h5>
                                            </div>
                                            <div class="w-1/3">
                                                <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Owner CNIC</p>
                                                <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">36985-7896541-5</h5>
                                            </div>
                                            <div class="w-1/3">
                                                <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Property Address</p>
                                                <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">House No.245, Street 3,Secton G-10, Islamabad</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
</x-admin-sidebar>
@endsection
