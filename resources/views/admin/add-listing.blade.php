@extends('layouts.app')
@section('content')




<form class="place-items-center  min-h-screen grid grid-cols-1 xl:grid-cols-3">
    <!-- ... -->

        <div class=" py-8 xl:col-span-2 text-center font-bold text-3xl ">
            <h1> Add Appartment</h1>
        </div>
    <div class="mb-4">
        <p class="font-bold p-2"> House no</p>
        <label for="House number" class="sr-only">House number</label>
        <input type="text" name="house_number" id="house_number" placeholder="Your House Number" class="bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full
        @error('phone_number') border-red-500 @enderror" value="{{ old('house_number') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <p class="font-bold p-2"> Street</p>
        <label for="Street" class="sr-only">Street</label>
        <input type="text" name="Street" id="Street" placeholder="Your Street number" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full @error('phone_number') border-red-500 @enderror" value="{{ old('street ') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4">
        <p class="font-bold p-2"> Area</p>
        <label for="Area" class="sr-only">Area</label>
        <input type="text" name="Area" id="Area" placeholder="Area" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full @error('Area') border-red-500 @enderror" value="{{ old('Area ') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4">
        <p class="font-bold p-2"> City</p>
        <label for="City" class="sr-only">City </label>
        <select type="text" name="City" id="City" placeholder="Your City" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full @error('City') border-red-500 @enderror" value="{{ old('City ') }}">
            <option>Rawalpindi</option>
            <option>Islamabad</option>
        </select>

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4">
        <p class="font-bold p-2"> Address</Address></p>

        <input name="Address" id="Street" placeholder="Your Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
        @error('Address') border-red-500 @enderror" value="{{ old('Address') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>



    <div class="mb-4" >
            <p class =" font-bold p-2" >Basic Necessity

            </p>
            <div class="inline-block pl-4 pr-4">
                <input class="" type="checkbox" >
                <label>Electricity</label>
            </div>
            <div class="inline px-4">
                <input  type="checkbox" >
                <label>Gas</label>
            </div>
            <div class="inline px-4">
                <input  type="checkbox" >
                <label>Telephone</label>
            </div>


                <div class="inline px-4">
                    <input  type="checkbox" >
                    <label>Internet</label>
                </div>
                <div class="inline px-4">
                    <input  type="checkbox" >
                    <label>Water Supply</label>
                </div>



                <div class="text-center font-bold text-3xl">
                    <h1> More Details</h1>
                </div>

    </div>
{{-- adjust grid here for more details --}}

    <div>
        <div class="mb-4">
            <p class="font-bold p-2"> House Area</Address></p>

            <input name="House Number" id="House no" placeholder="House No" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('House number') }}">

            @error('House_number')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="font-bold p-2"> Bath Room</Address></p>

            <input name="Bath Rooom" id="Bathroom" placeholder="Bath room" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bath Room') }}">

            @error('Bath Room')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <p class="font-bold p-2"> Bed Room</Address></p>

            <input name="Bed Rooom" id="Bedroom" placeholder="Bed room" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bed Room') }}">

            @error('Bed Room')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="font-bold p-2"> Year Build</Address></p>

            <input name="Bath Rooom" id="Bathroom" placeholder="Year Build" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bath Room') }}">

            @error('Year Build')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="font-bold p-2"> Price </Address></p>

            <input name="Bath Rooom" id="Bathroom" placeholder="Bath room" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bath Room') }}">

            @error('Bath Room')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>





</form>
</body>
@endsection
{{-- <form class=" grid place-items-center min-h-screen grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6"> --}}
