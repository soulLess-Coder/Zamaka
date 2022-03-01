@extends('layouts.owner')

@section('content')
<x-owner-sidebar>
    <div class="bg-white shadow xl:w-3/4 2xl:w-4/5 w-full px-6 sm:px-12 py-5 sm:py-10">
        <div class="mb-5 sm:mb-10 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Tenant Detail</p>
        </div>
        <div class="">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr class="h-20 w-full text-sm leading-none text-gray-600">
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-4">Customer</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Invoice #</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">House Address</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Amount</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Status</th>
                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Category</th>
                        </tr>
                    </thead>
                    <tbody class="w-full">
                        <tr class="h-20 text-sm leading-none text-gray-700 border-b border-t border-gray-200 bg-white hover:bg-gray-100">
                            <td tabindex="0" class="focus:outline-none pl-4">Ali Ahmad</td>
                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                            <td class="pl-10">
                                <div class="flex items-center">
                                    <span tabindex="0" class="focus:outline-none">House 24, Street 34, G-9/4, Islamabad</span>
                                </div>
                            </td>
                            <td class="pl-10">
                                <div class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs leading-3 text-blue-700">9000</p>
                                </div>
                            </td>
                            <td tabindex="0" class="focus:outline-none pl-10">Rented</td>
                            <td tabindex="0" class="focus:outline-none pl-10">Personal Property</td>
                        </tr>

</x-owner-sidebar>
@endsection
