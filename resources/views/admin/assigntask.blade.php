@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="sm:px-6 w-full">
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Tasks</p>
                <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                    <p>Sort By:</p>
                    <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                        <option class="text-sm text-indigo-800">Latest</option>
                        <option class="text-sm text-indigo-800">Oldest</option>
                        <option class="text-sm text-indigo-800">Latest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="sm:flex items-center justify-between">
                <div class="flex items-center">

                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Done</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Pending</p>
                        </div>
                    </a>
                </div>
                <button onclick="window.location.href=''" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                    <p class="text-sm font-medium leading-none text-white">Add Task</p>
                </button>
            </div>
            <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                            <td>
                                <div class="ml-5">
                                    <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                        <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg7.svg" alt="check-icon">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">Water Tap Issue</p>
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg1.svg" alt="clip">
                                </div>
                            </td>
                            <td class="pl-24">
                                <div class="flex items-center">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg" alt="tag">
                                    <p class="text-sm leading-none text-gray-600 ml-2">Urgent</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg" alt="list">
                                    <p class="text-sm leading-none text-gray-600 ml-2">04/07</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">

                                    <p class="text-sm leading-none text-gray-600 ml-2">PID <br> 123 455</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg" alt="paper clip">
                                    <p class="text-sm leading-none text-gray-600 ml-2">TID <br> 4545</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="relative w-36">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3  pointer-events-none">
                              <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input datepicker datepicker-format="mm/dd/yyyy" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                          </div> </td>
                            <td class="pl-4">
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex">
                                  <div class="border border-green-400 shadow-sm rounded flex w-40">
                                        <input tabindex="0" type="text" id="agent" name="agent" required class="pl-3 py-3  text-sm focus:outline-none placeholder-gray-500 rounded bg-transparent text-gray-600 dark:text-gray-400" placeholder="mahad" />
                                    </div>
                                 </div>

                                </td>
                            <td>
                                <div class="relative px-5 pt-2">
                                    <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                       <img  class="dropbtn" onclick="dropdownFunction(this)" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg6.svg" alt="dropdown">
                                    </button>
                                    <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                        <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                            <p>Edit</p>
                                        </div>
                                        <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                            <p>Delete</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>





                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .checkbox:checked + .check-icon {
            display: flex;
        }
    </style>
</x-admin-sidebar>
@endsection
