@extends('layouts.app')

@section('content')


<div class="grid grid-cols-1 p-3 mx-3 bg-gray-100 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 rounded-2xl">
    <div class="flex items-center justify-center w-auto h-24">
        <img src="./images/pin.png">
      </div>
    <div class="flex justify-center">
      <h2 class="pt-10 text-4xl font-bold p-auto">Forget Password.?</h2>
    </div>



    <div class="flex justify-center py-5 font-bold">
      <h3>Please Provide you register Email</h3>
    </div>

    <div class="flex justify-center">
      <h3 class="font-bold">Email</h3>
    </div>

    <div class="flex items-center justify-center w-full p-5">
      <input type="text" id="Street" placeholder="example@outlook.com" class="w-full h-10 p-5 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
    </div>

    <div class="flex flex-wrap">
      <h3 class="flex flex-wrap text-red-600">Sorry! we are unable to find you account. TryAgain.</h3>
    </div>

    <div class="flex flex-row-reverse p-5 transform hover:translate-x-2">
      <button class="w-20 bg-red-500 rounded-full h-7">Submit</button>
    </div>

    <div class="">
      <h3>
        Already have an Account? <u class="text-blue-600">Login</u>
      </h3>
    </div>
  </div>


@endsection
