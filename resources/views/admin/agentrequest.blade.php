@extends('layouts.admin')

@section('content')
    <x-admin-sidebar>

        <div class="mx-auto container bg-white dark:bg-gray-800 shadow rounded">
            <div class="flex flex-col lg:flex-row p-8 justify-between items-start lg:items-stretch w-full">
                <div class="w-full lg:w-1/4 xl:w-1/3 flex flex-col lg:flex-row items-start lg:items-center">
                    <div class="w-full relative mb-2 lg:mb-0 lg:mr-4">

                    </div>
                </div>
                <div class="w-full lg:w-3/4 xl:w-2/3 flex flex-col lg:flex-row items-start lg:items-center justify-between">
                    <div class="relative w-full lg:w-1/4 my-2 lg:my-0 lg:mx-2 xl:mx-4 z-10">
                        <div class="absolute z-0 inset-0 m-auto mr-2 xl:mr-4 z-0 w-5 h-5">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg2.svg" alt="arrow down">
                        </div>
                        <select aria-label="Selected tab" class="relative z-10 cursor-pointer focus:outline-none focus:border-gray-800 focus:shadow-outline-gray text-sm form-select block w-full py-2 px-2 xl:px-3 border border-gray-300 dark:border-gray-200 rounded text-gray-600 dark:text-gray-400 appearance-none bg-transparent">

                            <option selected="" class="text-sm text-gray-600 dark:text-gray-400">Representatives</option>


                        </select>
                    </div>



                </div>
            </div>
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table class="min-w-full bg-white dark:bg-gray-800 rounded">
                    <thead>
                        <tr class="w-full h-16 border-gray-300 dark:border-gray-200 border-b py-8 bg-indigo-50">
                            <th role="columnheader" class="pl-8 text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Name</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">CNIC</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Email</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Address</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Phone Number</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Office Address </th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">images</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">City</th>
                            <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">State</th>
                            <td class="pr-8">
                                <button class="w-32 opacity-0 bg-gray-100 transition duration-150 ease-in-out focus:outline-none focus:border-gray-800 focus:shadow-outline-gray hover:bg-gray-300 rounded text-indigo-700 px-5 py-1 text-sm cursor-default">Start Session</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" >
                        <tr role="row" class="h-24 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                            <td class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4">Aslam</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">3740466595948</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">example@gamil.com</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">st24 barfana choke rawalpindi</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">03065393573</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">NULL</td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <div class="flex items-center">


                                    </a>
                                    <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="javascript: void(0)">
                                       <div class="flex items-center">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg" alt="paper clip">

                            </div>
                                    </a>
                                </div>
                            </td>


                              <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">Raealpindi</td>
                              <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">Punjsb</td>


                             <td>
                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400 flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded focus:outline-none">
                                <p  class=" text-sm leading-none text-indigo-700">Confirm </p>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-admin-sidebar>
@endsection
