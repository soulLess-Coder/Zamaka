@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">

        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            <table class="min-w-full bg-white rounded dark:bg-gray-800">
                <thead>
                    <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                        <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Date</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">CNIC</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Type</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Full Name</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Phone Number</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Email</th>
                        <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Action</th>

                        <td class="pr-8">
                            <button class="w-32 px-5 py-1 text-sm text-indigo-700 transition duration-150 ease-in-out bg-gray-100 rounded opacity-0 cursor-default focus:outline-none focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300">Start Session</button>
                        </td>
                    </tr>
                </thead>
                <tbody role="rowgroup" >
                    <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                        <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">06/02/2022</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">12345-6789234-5</td>
                        <td class="pr-6">
                            <div class="flex items-center justify-start w-full h-full">
                                <div class="px-5 py-2 text-sm leading-3 text-indigo-700 bg-indigo-100 rounded-full">Agent</div>
                            </div>
                        </td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">Muhammad Mahad</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">300-3003232</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">2138@students.riphah.edu.pk</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="flex items-center">
                                <a class="border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="/profile">
                                    <div aria-label="Edit row" role="button" class="p-2 text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                    </div>
                                </a>
                                <a class="mx-2 border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Settings" role="button" class="p-2 text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                        <h1 class="text-lg text-red-600">!</h1>
                                    </div>
                                </a>
                                <a class="border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Delete" role="button" class="p-2 text-red-500 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                    </div>
                                </a>
                            </div>
                        </td>

                        <td class="pr-8 text-right">
                            <button class="px-5 py-1 text-sm text-indigo-700 transition duration-150 ease-in-out bg-gray-100 border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300">Start Session</button>
                        </td>
                    </tr>



                    <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                        <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap dark:text-gray-100">06/02/2022</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">12345-6789234-5</td>
                        <td class="pr-6">
                            <div class="flex items-center justify-start w-full h-full">
                                <div class="px-5 py-2 text-sm leading-3 text-indigo-700 bg-indigo-100 rounded-full">Owner</div>
                            </div>
                        </td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">Muhammad Mahad</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">300-3003232</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">2138@students.riphah.edu.pk</td>
                        <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap dark:text-gray-100">
                            <div class="flex items-center">
                                <a class="border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Edit row" role="button" class="p-2 text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                    </div>
                                </a>
                                <a class="mx-2 border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Settings" role="button" class="p-2 text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg5.svg" alt="Settings">
                                    </div>
                                </a>
                                <a class="border border-transparent rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Delete" role="button" class="p-2 text-red-500 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                    </div>
                                </a>
                            </div>
                        </td>

                        <td class="pr-8 text-right">
                            <button class="px-5 py-1 text-sm text-gray-600 transition duration-150 ease-in-out bg-gray-200 rounded cursor-not-allowed dark:text-gray-400 focus:outline-none">Cancelled</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-sidebar>
@endsection
