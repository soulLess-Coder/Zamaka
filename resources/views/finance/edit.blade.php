@extends('layouts.app')

@section('content')

            <form id="login">
                <div class="bg-white dark:bg-gray-800">
                    <div class="container mx-auto bg-white rounded dark:bg-gray-800">
                        <div class="py-5 bg-white border-b border-gray-300 xl:w-full dark:border-gray-700 dark:bg-gray-800">
                            <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                                <p class="text-lg font-bold text-gray-800 dark:text-gray-100">Edit Finance Table</p>
                                <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <h2>Balance Sheet</h2>
                            <div class="w-11/12 mx-auto xl:w-9/12 xl:mx-0">
                                <div class="flex flex-col w-full mt-16 xl:w-2/6 lg:w-1/2 md:w-1/2">
                                    <label for="username" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Capital Account<span class="text-red-500">* </span></label>
                                    <input tabindex="0" type="text" id="username" name="username" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="@example" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container px-4 mx-auto mt-10 bg-white rounded dark:bg-gray-800">
                        <div class="py-5 border-b border-gray-300 xl:w-full dark:border-gray-700">
                            <div class="flex items-center w-11/12 mx-auto xl:w-full xl:mx-0">
                                <p class="text-lg font-bold text-gray-800 dark:text-gray-100">Amount</p>
                                <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 mx-auto">
                            <div class="container mx-auto">
                                <form class="w-11/12 mx-auto my-6 xl:w-full xl:mx-0">
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Profit & Loss statement<span class="text-red-500">* </span></label>
                                        <input tabindex="0" type="text" id="FirstName" name="firstName" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="" />
                                    </div>

                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Trail Balance <span class="text-red-500">* </span></label>
                                        <input tabindex="0" type="Number" id="Phonenumber" name="Phonenumber" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="" />
                                    </div>

                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="CNIC" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">CNIC <span class="text-red-500">* </span> </label>
                                        <input tabindex="0" type="Number" id="CNIC" name="CNIC" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="" />
                                    </div>

                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="Email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email <span class="text-red-500">* </span></label>
                                        <div class="flex border border-green-400 rounded shadow-sm">
                                            <div tabindex="0" class="flex items-center px-4 py-3 border-r border-green-400 focus:outline-none dark:text-gray-100">
                                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2.svg" alt="mail">
                                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2dark.svg" alt="mail">
                                            </div>
                                            <input tabindex="0" type="text" id="Email" name="email" required class="w-full py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent rounded focus:outline-none dark:text-gray-400" placeholder="example@gmail.com" />
                                        </div>
                                        <div class="flex items-center justify-between pt-1 text-green-700">
                                            <p class="text-xs">Email submission success!</p>
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg3.svg" alt="success">
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="StreetAddress" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Street Address <span class="text-red-500">* </span></label>
                                        <input tabindex="0" type="text" id="StreetAddress" name="streetAddress" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="" />
                                    </div>
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="City" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">City <span class="text-red-500"> * </span></label>
                                        <div class="flex border border-gray-300 rounded shadow-sm dark:border-gray-700">
                                            <input tabindex="0" type="text" id="City" name="city" required class="w-full py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-transparent rounded focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="Rawalpindi" />
                                            <div class="flex flex-col items-center justify-center px-4 text-gray-600 border-l border-gray-300 dark:border-gray-700 dark:text-gray-400">
                                               <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5.svg" alt="up">
                                               <img class="transform rotate-180 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5.svg" alt="down">
                                               <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5dark.svg" alt="up">
                                               <img class="hidden transform rotate-180 dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5dark.svg" alt="down">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="State/Province" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">State/Province <span class="text-red-500"> * </span></label>
                                        <input tabindex="0" type="text" id="State/Province" name="state" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="Punjab" />
                                    </div>
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <label for="Country" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Country</label>
                                        <input tabindex="0" type="text" id="Country" name="country" required class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="Pakistan" />
                                    </div>
                                    <div class="flex flex-col mb-6 xl:w-1/4 lg:w-1/2 md:w-1/2">
                                        <div class="flex items-center pb-2">
                                            <label for="ZIP" class="text-sm font-bold text-gray-800 dark:text-gray-100">ZIP/Postal Code</label>
                                            <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                                            </div>
                                        </div>
                                        <input tabindex="0" type="text" name="zip" required id="ZIP" class="py-3 pl-3 text-sm text-gray-600 placeholder-gray-500 bg-transparent border border-red-400 rounded shadow-sm focus:outline-none focus:border-indigo-700 dark:text-gray-400" placeholder="46000" />
                                        <div class="flex items-center justify-between pt-1 text-red-700">
                                            <p class="text-xs">Incorrect Zip Code</p>
                                           <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg6.svg" alt="cancel">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="container w-11/12 mx-auto xl:w-full">
                        <div class="flex justify-end w-full py-4 bg-white sm:px-0 dark:bg-gray-800">
                            <button role="button" aria-label="cancel form" class="px-6 py-2 mr-4 text-xs text-indigo-600 transition duration-150 ease-in-out bg-gray-200 rounded focus:outline-none hover:bg-gray-300 dark:bg-gray-700 dark:text-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Cancel</button>
                            <button role="button" aria-label="Save form" class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-indigo-600" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <style>

                .checkbox:checked {
                    /* Apply class right-0*/
                    right: 0;
                }
                .checkbox:checked + .toggle-label {
                    /* Apply class bg-indigo-700 */
                    background-color: #4c51bf;
                }
            </style>


@endsection
