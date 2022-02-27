@extends('layouts.admin')
@section('content')




<form class="grid min-h-screen grid-cols-1 bg-grey-200 place-items-center lg:grid-cols-2 xl:grid-cols-2">
    <!-- ... -->

        <div class="py-8 text-3xl font-bold text-center lg:col-span-2 xl:col-span-2">
            <h1> Add Appartments</h1>
        </div>
    <div class="mb-4">
        <p class="p-2 font-bold"> House no</p>
        <label for="House number" class="sr-only">House number</label>
        <input type="text" name="house_number" id="house_number" placeholder="Your House Number" class="bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full
        @error('phone_number') border-red-500 @enderror" value="{{ old('house_number') }}">

        @error('phone_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4 ">
        <p class="p-2 font-bold"> Street</p>
        <label for="Street" class="sr-only">Street</label>
        <input type="text" name="Street" id="Street" placeholder="Your Street number" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full @error('phone_number') border-red-500 @enderror" value="{{ old('street ') }}">

        @error('phone_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4">
        <p class="p-2 font-bold"> Area</p>
        <label for="Area" class="sr-only">Area</label>
        <input type="text" name="Area" id="Area" placeholder="Area" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full @error('Area') border-red-500 @enderror" value="{{ old('Area ') }}">

        @error('phone_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4">
        <p class="p-2 font-bold"> City</p>
        <label for="City" class="sr-only">City </label>
        <select type="text" name="City" id="City" placeholder="Your City" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full @error('City') border-red-500 @enderror" value="{{ old('City ') }}">
            <option>Rawalpindi</option>
            <option>Islamabad</option>
        </select>

        @error('phone_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="mb-4 lg:col-span-2 xl:col-span-2" >
        <p class="p-2 font-bold"> Address</Address></p>

        <input name="Address" id="Street" placeholder="Your Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
        @error('Address') border-red-500 @enderror" value="{{ old('Address') }}">

        @error('phone_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>



    <div class="mb-4 lg:col-span-2">
            <p class ="p-2 font-bold" >Basic Necessity</p>
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



                <div class="p-6 text-3xl font-bold text-center">
                    <h1> More Details</h1>
                </div>

    </div>
{{-- adjust grid here for more details --}}


        <div class="mb-4">
            <p class="p-2 font-bold"> House Area</Address></p>

            <input name="House Number" id="House no" placeholder="House No" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('House number') }}">

            @error('House_number')
                <div class="mt-2 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="p-2 font-bold"> Bath Room</Address></p>

            <input name="Bath Rooom" id="Bathroom" placeholder="Bath room" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bath Room') }}">

            @error('Bath Room')
                <div class="mt-2 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <p class="p-2 font-bold"> Bed Room</Address></p>

            <input name="Bed Rooom" id="Bedroom" placeholder="Bed room" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('Address') border-red-500 @enderror" value="{{ old('Bed Room') }}">

            @error('Bed Room')
                <div class="mt-2 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="p-2 font-bold"> Year Build</Address></p>

            <input name="Year Build" id="Year Build" placeholder="Year Build" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
            @error('yearbuild') border-red-500 @enderror" value="{{ old('Year Build') }}">

            @error('Year Build')
                <div class="mt-2 text-sm text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

            <div class="mb-4 lg:col-span-2">

                <span class="inline-grid "><p class="p-2 font-bold"> Price </Address></p></span>
                <span class="inline-grid " ><input name="Price" id="Price" placeholder="Price" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full
                         @error('Price') border-red-500 @enderror" value="{{ old('Price') }}">
                        @error('Bath Room')
                        <div class="mt-2 text-sm text-red-500">
                         {{ $message }}
                        </div>
                        @enderror
                    </span>
            </div>

            <div class="w-32 h-32 p-4 mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="submit">
                  Submit
                </label>
                <x-inputs.button type="submit" buttonText="Add"/>
              </div>
</form>
</body>
@endsection
{{-- <form class="grid min-h-screen grid-cols-1 place-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6"> --}}
