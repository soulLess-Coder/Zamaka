@extends('layouts.admin')
@section('content')
<x-admin-sidebar>
<form class="grid min-h-screen grid-cols-1 bg-grey-200 place-items-center lg:grid-cols-2 xl:grid-cols-2">
    <!-- ... -->

        <div class="py-8 text-3xl font-bold text-center lg:col-span-2 xl:col-span-2">
            <h1> New Invoice</h1>
        </div>
    <div class="mb-4">
        <p class="p-2 font-bold"> Property ID</p>
        <input type="text" name="house_number" id="house_number" placeholder="Property ID" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full @error('phone_number') border-red-500 @enderror"">
    </div>
    <div class="mb-4 ">
        <p class="p-2 font-bold">User ID</p>
        <input type="text" name=" Tenant Name" id="Street" placeholder=" User ID" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full @error('phone_number') border-red-500 @enderror" ">
    </div>
    <div class="mb-4">
        <p class="p-2 font-bold"> House Address</p>
        <input type="number" name="CNIC" id="CNIC" maxlength="13" placeholder="House Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>
    <div class="mb-4">
       <p class="p-2 font-bold">Phone Number</p>
        <input type="datetime" name="Datetime" id="Area" placeholder="Phone Number" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>
 <div class="mb-4">
       <p class="p-2 font-bold ">Comments</p>
        <input type="Description" name="Description" id="Description" placeholder="Comments" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>

    <div class="mb-4 " >
        <p class="p-2 font-bold">Transaction ID</Address></p>
        <input name="Address" id="Street" placeholder="Transaction ID" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>
    <div class="mb-4 " >
        <p class="p-2 font-bold">Total Rent</Address></p>

        <input name="Address" id="Street" placeholder="Total Rent" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>

    <div class="mb-4 " >Commission</Address></p>
        <input name="Address" id="Street" placeholder="Commission" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>

    <div class="mb-4 " >
        <p class="p-2 font-bold">Duration</Address></p>
        <input name="Address" id="Street" placeholder="Duration" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>

 <div class="mb-4 " >
        <p class="p-2 font-bold">Payment Plan</Address></p>
        <input name="Address" id="Street" placeholder="Payment Plan" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>
    <div class="mb-4 " >
        <p class="p-2 font-bold">Security Fee</Address></p>
        <input name="Address" id="Street" placeholder="Security Fee" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
    </div>
            <div class=" w-32 h-32 p-4 mb-4">
                <x-inputs.button type="submit" buttonText="Save"/>
              </div>


</form>
</x-admin-sidebar>
@endsection
