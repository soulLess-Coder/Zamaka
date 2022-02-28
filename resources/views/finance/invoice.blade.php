@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">
        <div class="flex w-full pl-3 sm:pl-6 pr-3 py-5 items-center justify-between bg-indigo-50 rounded-t">
            <h3 class="text-gray-800 font-bold text-base sm:text-xl">Invoice Detials</h3>
            <button onclick="window.location.href='/finance/newinvoice'" class="ml-0 sm:ml-6 bg-indigo-700 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 rounded text-white px-5 h-8 flex items-center text-sm">Create New Invoice</button>
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
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Property ID</p>

                            </div>
                        </th>

                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">User ID</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">House Address</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Phone Number</p>

                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Comments </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Transaction ID</p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Total Rent </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Commission </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Duration </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Payment Plan </p>
                            </div>
                        </th>
                        <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                            <div class="flex items-center justify-between relative">
                                <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Security Fee </p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="pl-3 w-24 py-3">
                            <div class="flex items-center">
                                <input placeholder="check box" type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white" onclick="tableInteract(this)" />
                            </div>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">23</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">172</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">House 21,Street 1, G-10/4, Islamabad</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">03218796534</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Transaction Complete!</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">1365</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Rs 9000</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Rs 900</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">3 Months</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">1week of every Month</p>
                        </td>
                        <td class="pl-4 whitespace-no-wrap w-32">
                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">4000</p>
                        </td>
                    </tr>
</x-admin-sidebar>
@endsection
