@extends('layouts.admin')

@section('content')

<x-admin-sidebar/>
    <div class="pt-16">
        <button id="button" onclick="modalHandler(true)" class="px-10 py-2 text-white bg-indigo-600 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none hover:bg-indigo-700">Open Modal</button>
    </div>
    <div class="absolute w-11/12 max-w-lg bg-white rounded shadow top-20" id="modal">
        <div class="flex items-center justify-between p-3 border-b border-gray-200 md:p-6">
            <div class="flex items-center">
                <div tabindex="0" aria-label="document icon" role="img" class="flex items-center justify-center rounded-sm focus:outline-none w-11 h-11 bg-indigo-50">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg1.svg" alt="file"/>

                </div>
                <div class="pl-3">
                    <p tabindex="0" class="text-sm font-medium leading-normal text-gray-800 focus:outline-none">Assign roles</p>
                    <p tabindex="0" class="pt-1 text-xs leading-3 text-gray-500 focus:outline-none">Create, edit, and share this document</p>
                </div>
            </div>
            <button role="button" aria-label="close modal" class="rounded-md cursor-pointer focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 focus:outline-none" onclick="modalHandler(false)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg2.svg" alt="cross"/>

            </button>
        </div>
        <div class="p-3 border-b border-gray-200 md:p-6">
            <div class="items-center justify-between w-full sm:flex">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div class="pl-3">
                        <p tabindex="0" class="text-sm font-medium leading-normal text-gray-800 focus:outline-none">Muhammmad Mahad</p>
                        <p tabindex="0" class="pt-2 text-xs leading-3 text-gray-600 focus:outline-none">example@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center mt-6 sm:mt-0">
                    <div class="flex items-center justify-between pr-2 bg-gray-100 rounded">
                        <select aria-label="Select an option" class="p-2 text-xs font-medium leading-3 text-gray-600 bg-gray-100 appearance-none focus:text-indigo-600 w-36 focus:outline-none">
                            <option class="text-xs font-medium leading-3 text-gray-600">Owner</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Edit access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">View access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Comment access</option>
                        </select>
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg3.svg" alt="chevron down"/>

                    </div>
                    <div tabindex="0" aria-label="drag drop icon" role="img" class="flex items-center justify-center w-6 ml-2 bg-gray-100 rounded focus:outline-none h-7">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg4.svg" alt="options icon"/>

                    </div>
                </div>
            </div>
            <div class="items-center justify-between w-full mt-6 sm:flex">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div class="pl-3">
                        <p tabindex="0" class="text-sm font-medium leading-normal text-gray-800 focus:outline-none">Muhammad Mahad</p>
                        <p tabindex="0" class="pt-2 text-xs leading-3 text-gray-600 focus:outline-none">example@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center mt-6 sm:mt-0">
                    <div class="flex items-center justify-between pr-2 bg-gray-100 rounded">
                        <select aria-label="Select an option" class="p-2 text-xs font-medium leading-3 text-gray-600 bg-gray-100 appearance-none focus:text-indigo-600 w-36 focus:outline-none">
                            <option class="text-xs font-medium leading-3 text-gray-600">Edit access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">View access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Comment access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Owner</option>
                        </select>
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg3.svg" alt="chevron down"/>
                    </div>
                    <div tabindex="0" aria-label="drag drop icon" role="img" class="flex items-center justify-center w-6 ml-2 bg-gray-100 rounded focus:outline-none h-7">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg4.svg" alt="options icon"/>
                    </div>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full mt-6 sm:flex">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div class="pl-3">
                        <p tabindex="0" class="text-sm font-medium leading-normal text-gray-800 focus:outline-none">Muhammad Mahad</p>
                        <p tabindex="0" class="pt-2 text-xs leading-3 text-gray-600 focus:outline-none">example@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center mt-6 sm:mt-0">
                    <div class="flex items-center justify-between pr-2 bg-gray-100 rounded">
                        <select aria-label="Select an option" class="p-2 text-xs font-medium leading-3 text-gray-600 bg-gray-100 appearance-none focus:text-indigo-600 w-36 focus:outline-none">
                            <option class="text-xs font-medium leading-3 text-gray-600">View access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Edit access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Comment access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Owner</option>
                        </select>
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg3.svg" alt="chevron down"/>
                    </div>
                    <div tabindex="0" aria-label="drag drop icon" role="img" class="flex items-center justify-center w-6 ml-2 bg-gray-100 rounded focus:outline-none h-7">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg4.svg" alt="options icon"/>
                    </div>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full mt-6 sm:flex">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div class="pl-3">
                        <p tabindex="0" class="text-sm font-medium leading-normal text-gray-800 focus:outline-none">Muhammad Mahad</p>
                        <p tabindex="0" class="pt-2 text-xs leading-3 text-gray-600 focus:outline-none">example@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center mt-6 sm:mt-0">
                    <div class="flex items-center justify-between pr-2 bg-gray-100 rounded">
                        <select aria-label="Select an option" class="p-2 text-xs font-medium leading-3 text-gray-600 bg-gray-100 appearance-none focus:text-indigo-600 w-36 focus:outline-none">
                            <option class="text-xs font-medium leading-3 text-gray-600">Comment access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">View access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Edit access</option>
                            <option class="text-xs font-medium leading-3 text-gray-600">Owner</option>
                        </select>
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg3.svg" alt="chevron down"/>
                    </div>
                    <div tabindex="0" aria-label="drag drop icon" role="img" class="flex items-center justify-center w-6 ml-2 bg-gray-100 rounded focus:outline-none h-7">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg4.svg" alt="options icon"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="items-center justify-between p-3 md:p-6 sm:flex">
            <div class="p-3 bg-indigo-100 rounded">
                <div tabindex="0" aria-label="copy link" class="flex items-center focus:outline-none">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/modal_13-svg5.svg" alt="attach"/>

                    <input class="w-40 pl-3 pr-4 text-xs leading-3 text-indigo-700 border-none"></p>
                    <p class="pl-3 text-xs font-semibold leading-3 text-indigo-700 cursor-pointer">Search</p>
                </div>
            </div>
            <div class="flex justify-end w-full mt-6 sm:block sm:w-auto sm:mt-0">
                <button class="px-6 py-3 text-xs font-semibold leading-3 text-white bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none hover:bg-indigo-600">Done</button>
            </div>
        </div>
    </div>
@endsection
