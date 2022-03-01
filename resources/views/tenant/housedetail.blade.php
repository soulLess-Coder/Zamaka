@extends('layouts.app')

@section('content')
<div class="bg-white shadow xl:w-3/4 2xl:w-4/5 w-full px-6 sm:px-12 py-5 sm:py-10">
    <div class="mb-5 sm:mb-10 rounded-tl-lg rounded-tr-lg">
        <div class="sm:flex items-center justify-between">
            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">House Details</p>
    </div>
    <div class="">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="h-20 w-full text-sm leading-none text-gray-600">
                        <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">User Id</th>
                        <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Property Id</th>
                        <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">House Address</th>
                        <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">Amount Payed</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    <tr class="h-20 text-sm leading-none text-gray-700 border-b border-t border-gray-200 bg-white hover:bg-gray-100">
                        <td tabindex="0" class="focus:outline-none pl-4"> 1254</td>
                        <td tabindex="0" class="focus:outline-none pl-10"> 12</td>
                        <td tabindex="0" class="focus:outline-none pl-10">
                            House 43, Street 36, G-11/4, Islamabad
                        </td>
                        <td tabindex="0" class="focus:outline-none pl-10">
                            Rs 9000
                        </td>
                    </tr>
                    @endsection
