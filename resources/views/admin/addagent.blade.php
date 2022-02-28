@extends('layouts.admin')
@section('content')


<x-admin-siderbar>

<form class="grid min-h-screen grid-cols-1 bg-grey-200 place-items-center lg:grid-cols-2 xl:grid-cols-2">
    <!-- ... -->

        <div class="py-8 text-3xl font-bold text-center lg:col-span-2 xl:col-span-2">
            <h1> Add Agent </h1>
        </div>


    <div class="mb-4 ">
        <p class="p-2 font-bold">  CNIC</p>
        <label for="Street" class="sr-only"> CNIC</label>
        <input type="text" name="CNIC" maxlength="12" id="Street" placeholder="CNIC" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full ">


    </div>

     <div class="mb-4 ">
        <p class="p-2 font-bold">  P.NUMBER</p>
        <label for="Street" class="sr-only"> CNIC</label>
        <input type="text" name="CNIC" maxlength="12" id="Street" placeholder="CNIC" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full ">


    </div>

    <div class="mb-4">
        <p class="p-2 font-bold"> NAME</p>
        <label for="NAME" class="sr-only">CNIC</label>
        <input type="text" name="NAME" maxlength="20" id="NAME" placeholder="NAME" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">


    </div>


    <div class="mb-4">
       <p class="p-2 font-bold"> Date</p>
        <label for="Date" class="sr-only">Date</label>
        <input type="datetime-local" name="Datetime" id="Area" placeholder="Date" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>


    <div class="mb-4 " >
        <p class="p-2 font-bold">Pernment Address</Address></p>
        <input name="Address" id="Street" placeholder="Pernment Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>

  <div class="mb-4 " >
        <p class="p-2 font-bold">Office Address <span class="text-xs"> (if any) </span></Address></p>
        <input name="Address" id="Street" placeholder="Pernment Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">

    </div>




        <div class="mb-4">
            <p class="p-2 font-bold"> CNIC</Address></p>
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile">
        </div>


          <div class="mb-4">
            <p class="p-2 font-bold"> Current Photo</Address></p>
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile">
        </div>




            <div class=" w-32 h-32 p-4 mb-4">
                <label class="block mb-2 text-sm font-bold border-2 bg-red-500 rounded-md text-lg text-slate-50 text-gray-700" for="submit">
                  Submit
                </label>
                <x-inputs.button type="submit" buttonText="Add"/>
              </div>


</form>
</x-admin-siderbar>
@endsection
