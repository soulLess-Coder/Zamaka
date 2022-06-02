@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class=" flex ml-5 h-screen justify-center">

        <div class="xl:w-3/4 2xl:w-4/5 w-full bg-white rounded-lg shadow">
            <div class="border rounded-lg border-gray-100">
                <div class="py-4 md:py-6 pl-8">
                    <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl font-bold leading-tight text-gray-800">Approve Property Listing</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="bg-red-500 h-16 w-full text-sm leading-none text-white">
                                <th tabindex="0" class="focus:outline-none font-normal text-left pl-8">Date</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">Poperty</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">User</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">Name</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">cnic</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left px-10 lg:px-6 xl:px-0">Status</th>
                                <th tabindex="0" class="focus:outline-none font-normal text-left">Confirmation</th>
                            </tr>
                        </thead>
                        <tbody class="w-full">
                            <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                                <td tabindex="0" class="focus:outline-none pl-8">06/02/2022</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">

                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">PID: 982 0192</p>
                                </td>
                                <td tabindex="0" class="focus:outline-none px-10 lg:px-6 xl:px-0"></td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">
                                    Ali
                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">03065393573</p>
                                </td>
                                <td class="px-10 lg:px-6 xl:px-0">
                                    <p tabindex="0" class="focus:outline-none underline text-blue-700">#11</p>
                                </td>
                                <td class="px-10 lg:px-6 xl:px-0">
                                    <div class="flex items-center justify-center w-20 h-6  rounded-full">
                                        <p>Pending</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center justify-center w-20 h-6  rounded-full">
                                        <p class="underline">Confirm <p class="underline">/Decline</p></p>
                                    </div>
                                </td>
                            </tr>

                            <tr class="h-20 text-sm leading-none text-gray-800 border-b border-gray-100">
                                <td tabindex="0" class="focus:outline-none pl-8">06/02/2022</td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">

                                    <p tabindex="0" class="focus:outline-none text-gray-600 font-normal mt-2">PID: 982 0192</p>
                                </td>
                                <td tabindex="0" class="focus:outline-none px-10 lg:px-6 xl:px-0"></td>
                                <td tabindex="0" class="focus:outline-none font-medium px-10 lg:px-6 xl:px-0">
                                    Usman
                                <td class="px-10 lg:px-6 xl:px-0">
                                    <p tabindex="0" class="focus:outline-none underline text-blue-700">#12</p>
                                </td>
                                <td class="px-10 lg:px-6 xl:px-0">
                                    <div class="flex items-center justify-center w-20 h-6 rounded-full">
                                        <p>Confirmed</p>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
</x-admin-sidebar>
@endsection
