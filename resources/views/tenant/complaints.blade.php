@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center sm:h-screen">
    <div class="grid grid-cols-1 gap-5 my-auto">
      <h2 class=""><b class="text-3xl">Complaints</b></h2>
      <div class="flex justify-center">
        <p><b>You complaint thought complaint portal we are always there to help</b></p>
      </div>
      <div>
        <label class="justify-center p-2  sm:flex">Name</label>
        <input <input type="text" id="Street" placeholder="Raja Muhammad Mahad" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

       <div>
        <label class="justify-center p-2  sm:flex">Address</label>
        <input <input type="text" id="Street" placeholder="h#11, St#4,Chamanabad dhoke Sydean Rawalpindi" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" >
      </div>

       <div>
        <label class="justify-center p-2  sm:flex">Number</label>
        <input <input type="number" id="Street" placeholder="03xx-xxxxxxx" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

       <div>
        <label class="justify-center p-2  sm:flex">Details</label>
        <input <input type="text" id="Street" placeholder="" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div>

        <button class="resize-y  rounded-full w-16 h-10 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-60 hover:bg-indigo-500 duration-300 ..."> Save</button>
      </div>

    </div>
  </div>

@endsection
