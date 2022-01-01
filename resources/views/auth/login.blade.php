@extends('layouts.app')

@section('content')
<div class="sm:flex justify-center items-center sm:h-screen">
    <div class="grid grid-cols-1 m-10 sm:grid-cols-2 ">
      <div class="sm:col-span-2 flex justify-center">
        <h1 class="text-5xl leading-loose text-gray-500 flex pt-16">Sign In</h1>
        <br>
      </div>

      <div class="row-span-6 sm:bg-white w-auto h-72">
        <img src="./images/lock1.png" />
      </div>

      <div class="">
        <label class="pt-16 order-4 sm:flex justify-center">Email</label>
        <input type="text" id="Street" placeholder="@" class="w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class="">
        <label class="pt-5 sm:flex justify-center">Password</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class=" w-3/4 h-10 shadow-xl m-10">
        <x-inputs.button type="submit" class=" mx-auto" buttonText="Login" />
      </div>

      <hr />

      <div class="justify-center flex"><a class="mx-auto"><img src="./images/googleicon.png" /></a></div>

      <p class="text-center">Don't have an account? <a href="register.blade.php" class=" text-blue-600">Register</a></p>
    </div>
</div>
@endsection
