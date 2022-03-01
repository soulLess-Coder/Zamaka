@extends('layouts.app')

@section('content')
<x-admin-sidebar>
<div class="flex items-center justify-center sm:h-screen">
    <div class="grid grid-cols-1 gap-5 my-auto">
      <h2 class=""><b class="text-3xl">Maintenance</b></h2>
      <div class="flex justify-center">
        <p><b>Explain your issuse so we can help you  we are always there to help</b></p>
      </div>
      <div>
        <label class="justify-center p-2 sm:flex">Name</label>
        <input type="text" id="Name" placeholder="Raja Muhammad Mahad" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
       <div>
        <label class="justify-center p-2 sm:flex">Number</label>
        <input type="number" id="number" placeholder="03xx-xxxxxxx" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div>
        <label class="justify-center p-2 sm:flex  ">Property ID</label>
        <input class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100 text-gray-400" type="text" value="123-5869" readonly>
      </div>
      <div>
        <label class="justify-center p-2 sm:flex  ">User ID</label>
        <input class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100 text-gray-400" type="text" value="123-5869" readonly>
      </div>
      <div>
        <label class="justify-center p-2 sm:flex">Subject</label>
        <input type="text" id="Name" placeholder="trext" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
       <div>
        <label class="justify-center p-2 sm:flex">Details</label>
        <input type="text" id="details" placeholder="------------------" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

        <div class="flex justify-center">
          <div>
            <div class="form-check">
              <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                Urgent
              </label>
            </div>
          </div>
        </div>
        <div class="mb-4">
            <p class="p-2 font-bold"> Attach File</Address></p>
            <label for="myfile">Select a file:</label>
            <input type="file" id="myfile" name="myfile">
        </div>
     <button class=" mt-10 w-40 bg-red-500  text-white font-bold py-2 px-4  rounded">
      SUBMIT
    </button>

    </div>
  </div>
</x-admin-sidebar>
@endsection


