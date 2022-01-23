@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center sm:h-screen">
    <div class="grid grid-cols-1 gap-5 my-auto">
      <h2 class=""><b class="text-3xl">Complaints</b></h2>
      <div class="flex justify-center">
        <p><b>You complaint thought complaint portal we are always there to help</b></p>
      </div>
      <div>
        <label class=" p-2  sm:flex justify-center">Name</label>
        <input type="text" id="Street" placeholder="Raja Muhammad Mahad" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

       <div>
        <label class=" p-2  sm:flex justify-center">Address</label>
        <input type="text" id="Street" placeholder="h#11, St#4,Chamanabad dhoke Sydean Rawalpindi" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100">
      </div>

       <div>
        <label class=" p-2  sm:flex justify-center">Number</label>
        <input type="number" id="Street" placeholder="03xx-xxxxxxx" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

       <div>
        <label class=" p-2  sm:flex justify-center">Details</label>
        <input type="text" id="Street" placeholder="" class=" resize flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 r shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div>
        <x-inputs.button type="submit" class=" mx-auto" buttonText="Next" />
      </div>

    </div>
  </div>
@endsection
