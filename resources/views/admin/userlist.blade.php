@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">

        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded">
                <thead>
                    <tr class="w-full h-16 border-gray-300 dark:border-gray-200 border-b py-8 bg-indigo-50">
                        <th role="columnheader" class="pl-8 text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Date</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">CNIC</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Type</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Full Name</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Phone Number</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Email</th>
                        <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Action</th>

                        <td class="pr-8">
                            <button class="w-32 opacity-0 bg-gray-100 transition duration-150 ease-in-out focus:outline-none focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-indigo-700 px-5 py-1 text-sm cursor-default">Start Session</button>
                        </td>
                    </tr>
                </thead>
                <tbody role="rowgroup" >
                    <tr role="row" class="h-24 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                        <td class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4">06/02/2022</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">12345-6789234-5</td>
                        <td class="pr-6">
                            <div class="w-full flex justify-start items-center h-full">
                                <div class="bg-indigo-100 text-indigo-700 rounded-full text-sm leading-3 py-2 px-5">Agent</div>
                            </div>
                        </td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">Muhammad Mahad</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">300-3003232</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">2138@students.riphah.edu.pk</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <div class="flex items-center">
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Edit row" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                    </div>
                                </a>
                                <a class="mx-2 rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Settings" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg5.svg" alt="Settings">
                                    </div>
                                </a>
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Delete" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                    </div>
                                </a>
                            </div>
                        </td>

                        <td class="pr-8 text-right">
                            <button class="bg-gray-100 transition duration-150 ease-in-out border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-indigo-700 px-5 py-1 text-sm">Start Session</button>
                        </td>
                    </tr>



                    <tr role="row" class="h-24 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                        <td class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4">06/02/2022</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">12345-6789234-5</td>
                        <td class="pr-6">
                            <div class="w-full flex justify-start items-center h-full">
                                <div class="bg-indigo-100 text-indigo-700 rounded-full text-sm leading-3 py-2 px-5">Owner</div>
                            </div>
                        </td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">Muhammad Mahad</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">300-3003232</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">2138@students.riphah.edu.pk</td>
                        <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <div class="flex items-center">
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Edit row" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                    </div>
                                </a>
                                <a class="mx-2 rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Settings" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg5.svg" alt="Settings">
                                    </div>
                                </a>
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                    <div aria-label="Delete" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                    </div>
                                </a>
                            </div>
                        </td>

                        <td class="pr-8 text-right">
                            <button class="cursor-not-allowed bg-gray-200 transition duration-150 ease-in-out rounded text-gray-600 dark:text-gray-400 px-5 py-1 text-sm focus:outline-none">Cancelled</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-sidebar>
@endsection
