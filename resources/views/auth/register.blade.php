@extends('layouts.app')

@section('content')
<div class="sm:flex justify-center items-center sm:h-screen">
    <div class="grid grid-cols-1 m-10 sm:grid-cols-2 ">
      <div class="sm:col-span-2 flex justify-center">
        <h1 class="text-5xl leading-loose flex pt-16">Sign Up</h1>
        <br>
      </div>
      <div class="row-span-6 sm:bg-white w-auto h-72 p-5">
        <img src="./images/signup.png" />
      </div>

      <div class="w-full bg-gray-200 rounded-full text-center font-bold ">
        0%
      </div>
      <div class="lg: pt-6 ">
        <label class=" order-4 sm:flex justify-center font-bold ">Full Name</label>
        <input type="text" id="Street" placeholder="@" class="w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class="lg: pt-6">
        <label class="sm:flex justify-center font-bold pt-4 ">Phone No</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
      <div class="lg: pt-6">
        <label class="sm:flex justify-center font-bold pt-4 ">CNIC</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
      <div class="inline-block pl-4 pr-4 pt-5">
                <input class="" type="checkbox" checked >
                <label>By clicking this I Agree term and condition</label>
      </div>
        <div class=" w-3/4 h-10 shadow-xl m-10">
        <x-inputs.button type="submit" class=" mx-auto" buttonText="Login" />
        <p>Already have an account? <a href="login.blade.php" class=" text-blue-600">Login</a></p>
      </div>

    </div>
</div>

@endsection
