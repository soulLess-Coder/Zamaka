@extends('layouts.admin')

@section('content')


<x-admin-sidebar>
    <?php /** @var TYPE_NAME $tablerow*/?>
    @dd($tablerow)
    <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">
        <div class="flex items-center justify-between w-full py-5 pl-3 pr-3 rounded-t sm:pl-6 bg-indigo-50">
            <h3 class="text-base font-bold text-gray-800 sm:text-xl">Listing with Tenant</h3>
            <button onclick="window.location.href='/admin/addListing'" class="flex items-center h-8 px-5 ml-0 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded sm:ml-6 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">Create New</button>
        </div>
        <div class="flex flex-col items-start justify-between w-full p-3 md:flex-row md:items-stretch">
            <div class="flex flex-col items-start w-full md:w-1/3 md:flex-row md:items-center">
                <div class="flex items-center">
                    <button class="p-2 text-gray-600 border border-gray-200 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:text-gray-400 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Delete table" role="button">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1.svg" alt="trash">
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters%2C_actions%2C_search%2C_sort_and_expanded_row-svg1dark.svg" alt="trash">
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-start justify-end w-full md:w-2/3 md:flex-row md:items-center">
                <x-inputs.search-bar/>
            </div>
        </div>
        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            <table class="min-w-full bg-white border border-gray-300 rounded dark:bg-gray-800" id="main-table">
                <thead>
                    <tr class="w-full bg-gray-100 border-b border-gray-300 dark:bg-gray-700">
                        <th role="columnheader" class="w-24 py-3 pl-3">
                            <div class="flex items-center">
                                <input placeholder="check box" type="checkbox" class="relative w-5 h-5 bg-white border border-gray-400 rounded cursor-pointer" onclick="checkAll(this)" />
                                <div class="ml-4 text-gray-800 opacity-0 cursor-defaut dark:text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="6 15 12 9 18 15" />
                                    </svg>
                                </div>
                            </div>
                        </th>
                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">P-ID</p>

                            </div>
                        </th>

                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">Images</p>

                            </div>
                        </th>

                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">Address</p>

                            </div>
                        </th>
                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100"> Date </p>
                            </div>
                        </th>

                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">Title</p>

                            </div>
                        </th>

                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">Catagory </p>

                            </div>
                        </th>

                        <th role="columnheader" class="w-32 pl-4 whitespace-no-wrap border-l border-gray-300 cursor-pointer first-dropdown" onclick="dropdownFunction(this)">
                            <div class="relative flex items-center justify-between">
                                <p class="text-xs font-normal leading-4 tracking-normal text-left text-gray-800 dark:text-gray-100">description </p>

                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablerow as $row)

                    <x-slot:Title>
                        {{
                            $row->title
                        }}
                    </x-slot:Title>
                     <x-slot:Description>

                     {{
                         $row->description
                     }}
                     </x-slot:Description>

                     <x-slot:category>
                        {{
                           $row->catagory
                        }}
                     </x-slot:category>

                     <x-slot:image>
                        {{
                            $row->image
                        }}
                     </x-slot:image>

                     <x-slot:contact_number>
                            {{
                                $row->contact_number
                            }}
                     </x-slot:contact_number>

                    @endforeach
                </tbody>
</x-admin-sidebar>
@endsection
