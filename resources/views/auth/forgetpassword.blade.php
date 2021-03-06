@extends('layouts.app')

@section('content')




<div class="flex flex-col items-center h-screen p-3 mx-3 place-content-center rounded-2xl">
    <div class="">
      <h2 class="p-10 text-4xl font-bold p-auto">Forget Password.</h2>
    </div>


    <div class="flex justify-center pt-10 text-2xl font-bold">
      <h3>Email Address </h3>
    </div>

    <div class="flex items-center justify-center p-5 w-96">
      <input type="password" id="Street" placeholder="**********" class="w-full h-10 p-5 text-center transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
    </div>

    <div class="flex flex-wrap justify-center pl-5 justify md:justify-center">
      <h3 class="flex flex-wrap text-red-600">Sorry! we are unable to find you account. TryAgain.</h3>
    </div>

    <div class="flex flex-row-reverse p-5 transform hover:translate-x-2">
      <button class="w-20 bg-red-500 rounded-full h-7">Submit</button>
    </div>

    <div class="flex flex-wrap justify-center md:justify-center">
      <h3>Already have an Account? <u class="text-blue-600">Login</u></h3>
    </div>
</div>


@endsection
