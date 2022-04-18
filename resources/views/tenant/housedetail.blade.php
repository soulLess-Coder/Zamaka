@extends('layouts.app')

@section('content')
<div class="w-full px-6 py-5 bg-white shadow xl:w-3/4 2xl:w-4/5 sm:px-12 sm:py-10">
    <div class="mb-5 rounded-tl-lg rounded-tr-lg sm:mb-10">
        <div class="items-center justify-between sm:flex">
            <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl">House Details</p>
    </div>
    <div class="">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="w-full h-20 text-sm leading-none text-gray-600">
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">User Id</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">Property Id</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">House Address</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">Catogery</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">Title</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">Details</th>
                        <th tabindex="0" class="pl-10 font-normal text-left focus:outline-none">Number</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @foreach ($tablerows as $row)
                        <x-tablerow>

                                <x-slot:userid>

                                </x-slot:userid>

                        </x-tablerow>



                    @endforeach

                </tbody>
                    @endsection
