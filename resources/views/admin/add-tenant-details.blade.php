@extends('layouts.admin')

@section('content')

    <x-admin-sidebar>
        <form class="grid min-h-screen grid-cols-1 bg-grey-200 place-items-center lg:grid-cols-2 xl:grid-cols-2">
            <!-- ... -->

                <div class="py-8 text-3xl font-bold text-center lg:col-span-2 xl:col-span-2">
                    <h1> Add Tenant</h1>
                </div>
            <div class="mb-4">
                <p class="p-2 font-bold"> P-ID</p>
                <label for="House number" class="sr-only">P_ID</label>
                <input type="text" name="house_number" id="house_number" placeholder="PID" class="bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full">


            </div>

            <div class="mb-4 ">
                <p class="p-2 font-bold"> Tenant Name</p>
                <label for="Street" class="sr-only"> Tenant Name</label>
                <input type="text" name=" Tenant Name" id="Street" placeholder=" Tenant Name" class="hover:bg-gray-100 border-red-500 border-2 w-full h-10 p-4 rounded-full @error('phone_number') border-red-500 @enderror" ">


            </div>


            <div class="mb-4">
                <p class="p-2 font-bold"> CNIC</p>
                <label for="CNIC" class="sr-only">CNIC</label>
                <input type="number" name="CNIC" id="CNIC" placeholder="CNIC" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">


            </div>


            <div class="mb-4">
               <p class="p-2 font-bold"> Date</p>
                <label for="Date" class="sr-only">Date</label>
                <input type="datetime" name="Datetime" id="Area" placeholder="Date" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">



            </div>
            <div class="mb-4">
               <p class="p-2 font-bold ">Description</p>
                <label for="Description" class="sr-only ">Description</label>
                <input type="Description" name="Description" id="Description" placeholder="Description" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
            </div>

            <div class="mb-4">
                <p class="p-2 font-bold ">Leased Price</p>
                 <label for="Price" class="sr-only ">Price</label>
                 <input type="text" name="Price" id="Price" placeholder="Price" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
            </div>

            <div class="mb-4 " >
                <p class="p-2 font-bold">Pernment Address</Address></p>
                <input name="Address" id="Street" placeholder="Pernment Address" class="hover:bg-gray-100  border-red-500 border-2 w-full h-10 p-4 rounded-full">
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



                <div class="mb-4">
                    <p class="p-2 font-bold"> CNIC</Address></p>
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile">
                </div>
                  <div class="mb-4">
                    <p class="p-2 font-bold"> Police Veification</Address></p>
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile">
                </div>
                  <div class="mb-4">
                    <p class="p-2 font-bold"> Affidavit</Address></p>
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
    </x-admin-sidebar>

@endsection
