@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
<div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">
                    <div class="flex w-full pl-3 sm:pl-6 pr-3 py-5 items-center justify-between bg-indigo-50 rounded-t">
                        <h3 class="text-gray-800 font-bold text-base sm:text-xl">Listing details </h3>
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
                                    <th role="columnheader" class="whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                                        <div class="flex items-center justify-between relative chuss-div">
                                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Hosue/st no</p>
                                         
                                            
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
                                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">House Area</p>
                                          
                                        </div>
                                    </th>
                                    <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                                        <div class="flex items-center justify-between relative">
                                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Year Build</p>
                                       
                                        </div>
                                    </th>
                                    <th role="columnheader" class="border-l border-gray-300 pl-4 whitespace-no-wrap w-32 first-dropdown cursor-pointer" onclick="dropdownFunction(this)">
                                        <div class="flex items-center justify-between relative">
                                            <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Price/Rent</p>
                                         
                                        </div>
                                    </th>
                                    <th role="columnheader" class="border-l border-gray-300 pl-4 pr-12 whitespace-no-wrap w-32">
                                        <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">Actions</p>
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
                                    <td class="whitespace-no-wrap w-32">
                                        <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4">H16,ST#44</p>
                                    </td>
                                    <td class="pl-4 whitespace-no-wrap w-32">
                                               
                                          <div class=" bg-blue-100 h-6 w-20 rounded-md flex items-center justify-center">
                                            <span role="button" class="text-xs text-blue-700 font-normal">Images</span>
                                        </div>   
                                    </td>
                                    <td class="pl-4 whitespace-no-wrap w-32">
                                        <div class="bg-blue-100 h-6 w-20 rounded-md flex items-center justify-center">
                                            <span class="text-xs text-blue-700 font-normal">Live</span>
                                        </div>
                                    </td>
                                    <td class="pl-4 whitespace-no-wrap w-32">
                                        <p class="text-gray-800 dark:text-gray-100 font-normal text-left text-xs tracking-normal leading-4"> Chamanabad, dhoke sydean road rawalpindi</p>
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
                                        <div class="relative">
                                            <div class="relative z-0 text-gray-600 bg-white flex items-center justify-between border rounded border-gray-300 w-full cursor-pointer text-xs form-select block py-2 px-2 xl:px-3 border border-gray-300 rounded bg-transparent" data-menu>
                                                <p class="leading-3 tracking-normal font-normal">Edit Project</p>
                                              
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
                                               
                                                <li autofocus class="cursor-pointer flex items-center justify-center">
                                                    <a class="p-3 border text-gray-800 dark:text-gray-100 border-transparent focus:bg-indigo-700 focus:text-white" href="javascript:void(0)">
                                                        <svg aria-label="Option 2" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                                            <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                                        </svg>
                                                    </a>
                                            </ul>
                                            <div class="w-full bg-white border-l border-gray-300 dark:bg-gray-800">
                                                <h4 class="pl-10 w-full text-sm text-gray-800 dark:text-gray-100 py-3 bg-gray-100 dark:bg-gray-700">Tenent Details</h4>
                                                <div class="bg-white dark:bg-gray-800 px-8 py-6">
                                                    <div class="flex items-start">
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Name</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">Mahad</h5>
                                                        </div>
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">CNIC</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">3564-5584428-5</h5>
                                                        </div>
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs"></p>
                                                            <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs">6 monmths</h5>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-start mt-6">
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Basic Necessity</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs"> <li>Electircity</li><li>Phone/Internet</li> <li>Gas</li><li>Water Supply</li>    </h5>
                                                        </div>
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">LandMarks</p>
                                                            <h5 class="text-gray-800 dark:text-gray-100 font-normal text-xs"><li>CMH</li><li>Cantt</li></h5>
                                                        </div>
                                                        <div class="w-1/3">
                                                            <p class="text-gray-600 dark:text-gray-400 font-normal text-xs">Agent</p>
                                                            <h5 class="text-indigo-700 font-normal text-xs">Mahad </h5>
                                                        </div>
                                                    </div>
                                                    <hr class="my-6 border-t border-gray-300 w-full" />
                                                    <h5 class="text-gray-600 dark:text-gray-400 text-xs mb-2 font-bold">Details</h5>
                                                    <p class="text-gray-800 dark:text-gray-100 font-normal text-xs w-3/5 leading-6">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
</x-admin-sidebar>
@endsection