@extends('layouts.admin')
@section('content')




    <form method="POST" class="grid min-h-screen grid-cols-1 bg-grey-200 place-items-center lg:grid-cols-2 xl:grid-cols-2" action="/api/listings">
        @csrf
        <div class="py-8 text-3xl font-bold text-center lg:col-span-2 xl:col-span-2">
            <h1> Create a new listing</h1>
        </div>
        <div class="mb-4">
            <p class="p-2 font-bold"> House no</p>
            <label for="house_number" class="sr-only">House number</label>
            <input type="text" name="house_number" id="house_number" placeholder="Your House Number" class=" border-black rounded-md border-2 w-full h-10 p-4
        @error('house_number') border-red-500 @enderror" value="{{ old('house_number') }}">

            @error('house_number')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4 ">
            <p class="p-2 font-bold"> Street</p>
            <label for="street" class="sr-only">Street</label>
            <input type="text" name="street" id="street" placeholder="Your Street number"
                   class="border-black rounded-md border-2 w-full h-10 p-4 @error('street') border-red-500 @enderror"
                   value="{{ old('street ') }}">

            @error('street')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-4">
            <p class="p-2 font-bold"> Sector/Mohala</p>
            <label for="sector" class="sr-only">Area</label>
            <input type="text" name="sector" id="sector" placeholder="Sector/Mohala"
                   class="  border-black rounded-md border-2 w-full h-10 p-4  @error('sector') border-red-500 @enderror"
                   value="{{ old('sector') }}">

            @error('sector')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-4">
            <p class="p-2 font-bold"> Landmarks</p>
            <label for="landmark" class="sr-only">Area</label>
            <input type="text" name="landmark" id="landmark" placeholder="Area"
                   class=" border-black rounded-md border-2 w-full h-10 p-4 @error('landmark') border-red-500 @enderror"
                   value="{{ old('landmark') }}">

            @error('landmark')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-4">
            <p class="p-2 font-bold"> City</p>
            <label for="city" class="sr-only">City </label>
            <select type="text" name="city" id="city" placeholder="Your City"
                    class="border-black rounded-md border-2 w-full h-10 p-4  @error('city') border-red-500 @enderror"
                    value="{{ old('city ') }}">
                <option>Rawalpindi</option>
                <option>Islamabad</option>
            </select>

            @error('city')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-4 ">
            <p class="p-2 font-bold">Owner CNIC</p>
            <input name="owner_cnic" id="owner_cnic" placeholder="36547-XXXXXXX-X" class="  border-black rounded-md  border-2 w-full h-10 p-4
        @error('owner_cnic') border-red-500 @enderror">

            @error('owner_cnic')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4 ">
            <p class="p-2 font-bold"> Address</p>

            <input name="address" id="address" placeholder="Your Address" class="  border-black rounded-md border-2 w-full h-10 p-4
        @error('Address') border-red-500 @enderror" value="{{ old('Address') }}">

            @error('address')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4" lg:col-span-2>
            <p class="p-2 font-bold"> Description</p>
            <label for="description" class="sr-only">Description of the Property</label>
            <input type="text" name="description" id="description" placeholder="Description"
                   class="border-black rounded-md border-2 w-full h-10 p-4  @error('description') border-red-500 @enderror"
                   value="{{ old('description ') }}">

            @error('description')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="p-2 font-bold">Category</p>
            <select type="text" name="category" id="category" placeholder="Type"
                    class="  border-black rounded-md border-2 w-full h-10 p-4  @error('category') border-red-500 @enderror"
                    value="{{ old('category') }}">
                <option>Agriculture</option>
                <option>Industrial</option>
                <option>Commercial</option>
                <option>Residential</option>
            </select>

            @error('category')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-4 lg:col-span-2">
            <p class="p-2 font-bold">Basic Necessity</p>
            <div class="inline-block pl-4 pr-4">
                <input class="" type="checkbox">
                <label>Electricity</label>
            </div>

            <div class="inline px-4">
                <input type="checkbox">
                <label>Gas</label>
            </div>

            <div class="inline px-4">
                <input type="checkbox">
                <label>Telephone</label>
            </div>

            <div class="inline px-4">
                <input type="checkbox">
                <label>Internet</label>
            </div>

            <div class="inline px-4">
                <input type="checkbox">
                <label>Water Supply</label>
            </div>

            <div class="p-6 text-3xl font-bold text-center">
                <h1> More Details</h1>
            </div>
        </div>

        {{-- adjust grid here for more details --}}


        <div class="mb-4">
            <p class="p-2 font-bold"> House Area</p>

            <input name="property_size" id="property_size" placeholder="House No" class="  border-black rounded-md border-2 w-full h-10 p-4
            @error('property_size') border-red-500 @enderror" value="{{ old('property_size') }}">

            @error('property_size')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="p-2 font-bold"> Bath Room</p>

            <input name="Bath Rooom" id="Bathroom" placeholder="Bath room" class="  border-black rounded-md border-2 w-full h-10 p-4
            @error('Address') border-red-500 @enderror" value="{{ old('Bath Room') }}">

            @error('Bath Room')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <p class="p-2 font-bold"> Bed Room</p>

            <input name="Bed Rooom" id="Bedroom" placeholder="Bed room" class=" border-black rounded-md border-2 w-full h-10 p-4
            @error('Address') border-red-500 @enderror" value="{{ old('Bed Room') }}">

            @error('Bed Room')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <p for="build_year" class="p-2 font-bold"> Year Built</p>

            <input name="build_year" id="build_year" placeholder="Build year" class="  border-black rounded-md border-2 w-full h-10 p-4
            @error('build_year') border-red-500 @enderror" value="{{ old('build_year') }}">

            @error('build_year')
            <div class="mt-2 text-sm text-red-500">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4 lg:col-span-2">

            <span class="inline-grid "><p class="p-2 font-bold"> Price</p></span>
            <span class="inline-grid "><input name="lease_price" id="lease_price" placeholder="Price" class=" border-black rounded-md border-2 w-full h-10 p-4
                         @error('lease_price') border-red-500 @enderror" value="{{ old('lease_price') }}">
                        @error('lease_price')
                        <div class="mt-2 text-sm text-red-500">
                         {{ $message }}
                        </div>
                        @enderror
                    </span>


            <div class="mb-4">
                <p class="p-2 font-bold"> Add photos</p>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="image">Select a file:</label>
                <input class="block w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" id="image" name="image">
            </div>

            <div class="mb-4">
                <p class="p-2 font-bold"> Add Videos</p>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="video">Select a file:</label>
                <input class="block w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" id="video" name="video">
            </div>
        </div>


        <div class="w-32 h-32 p-4 mb-4">
            <x-inputs.button type="submit" buttonText="Add"/>
        </div>
    </form>
    </body>
@endsection
{{-- <form class="grid min-h-screen grid-cols-1 place-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6"> --}}
