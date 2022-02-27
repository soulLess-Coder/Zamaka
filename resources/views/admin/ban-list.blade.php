@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class=" flex ml-5 h-screen justify-center">

        <div class="xl:w-3/4 2xl:w-4/5 w-full bg-white rounded-lg shadow">
            <div class="border rounded-lg border-gray-100">
                <div class="py-4 md:py-6 pl-8">
                    <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl font-bold leading-tight text-gray-800">Ban Users and Listings</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="bg-gray-50 h-16 w-full text-sm leading-none text-gray-800">
                                <th tabindex="0" class="focus:outline-none font-normal text-left pl-8">Date</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">ID</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0"></th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">Name</th>

                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">Status</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left">Confirmation</th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                                <td tabindex="0" class="focus:outline-none pl-8">06/02/2020</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">

                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">T-ID: 588 558</p>
                                </td>
                                <td tabindex="0" class="focus:outline-none px-10 lg:px-6 xl:px-0">-----</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">
                                    Usman
                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">03065393573</p>
                                </td>

                                <td class="px-10 lg:px-6 xl:px-0">
                                    <div class="flex items-center justify-center w-20 h-6 bg-red-400 rounded-full">
                                        <p tabindex="0" class="focus:outline-none text-xs leading-3 text-white">BAN</p>
                                    </div>
                                </td>
                                <td>
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400 flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded focus:outline-none">
                                        <p class="text-sm leading-none text-indigo-700">Revoke Status</p>
                                    </button>
                                </td>
                            </tr>

                            <!--  -->

                                  <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                                <td tabindex="0" class="focus:outline-none pl-8">06/02/2020</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">

                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">A-ID: 255 455</p>
                                </td>
                                <td tabindex="0" class="focus:outline-none px-10 lg:px-6 xl:px-0">-----</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">
                                   Mahad
                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">03065393573</p>
                                </td>

                                <td class="px-10 lg:px-6 xl:px-0">
                                    <div class="flex items-center justify-center w-20 h-6 bg-red-400 rounded-full">
                                        <p tabindex="0" class="focus:outline-none text-xs leading-3 text-white">BAN</p>
                                    </div>
                                </td>
                                <td>
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400 flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded focus:outline-none">
                                        <p class="text-sm leading-none text-indigo-700">Revoke Status</p>
                                    </button>
                                </td>
                            </tr>



                                  <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                                <td tabindex="0" class="focus:outline-none pl-8">06/02/2020</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">

                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">O-ID: 125 2558</p>
                                </td>
                                <td tabindex="0" class="focus:outline-none px-10 lg:px-6 xl:px-0">-----</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">
                                    Basit Baig
                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">03065393573</p>
                                </td>

                                <td class="px-10 lg:px-6 xl:px-0">
                                    <div class="flex items-center justify-center w-20 h-6 bg-red-400 rounded-full">
                                        <p tabindex="0" class="focus:outline-none text-xs leading-3 text-white">BAN</p>
                                    </div>
                                </td>
                                <td>
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400 flex items-center justify-center px-4 py-3 w-32 h-9 bg-indigo-50 hover:bg-indigo-100 rounded focus:outline-none">
                                        <p class="text-sm leading-none text-indigo-700">Revoke Status</p>
                                    </button>
                                </td>
                            </tr>
                            <!--  -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>

</x-admin-sidebar>
@endsection
