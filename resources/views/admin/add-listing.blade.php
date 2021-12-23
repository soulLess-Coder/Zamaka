@extends('layouts.app')


@section('content')

<form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
    <!-- ... -->
    <div class="mb-4">
        <p class="font-bold p-2"> House no</p>
        <label for="House number" class="sr-only">House number</label>
        <input type="text" name="house_number" id="house_number" placeholder="Your phone number" class="hover:bg-gray-100 border-2 w-full p-4 rounded-full @error('phone_number') border-red-500 @enderror" value="{{ old('house_number') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <p class="font-bold p-2"> Street</p>
        <label for="Street" class="sr-only">Street</label>
        <input type="text" name="Street" id="Street" placeholder="Your Street number" class="hover:bg-gray-100 border-2 w-full p-4 rounded-full @error('phone_number') border-red-500 @enderror" value="{{ old('house_number') }}">

        @error('phone_number')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>
</form>

@endsection
