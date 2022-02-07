@extends('layouts.app')

@section('content')

<div class="items-center justify-center sm:flex sm:h-screen">

    <div class="grid grid-cols-1 m-10 sm:grid-cols-2 ">
      <div class="flex justify-center sm:col-span-2">
        <h1 class="flex pt-16 text-5xl leading-loose">Sign Up</h1>
        <br>
      </div>
      <div class="w-auto row-span-6 p-5 sm:bg-white h-72">
        <img src="./images/signup.png" />
      </div>

      <div class="w-full font-bold text-center bg-gray-200 rounded-full ">
        0%
      </div>
      <div class="pt-6 lg: ">
        <label class="justify-center order-4 font-bold  sm:flex">Full Name</label>
        <input type="text" id="Street" placeholder="@" class="w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class="pt-6 lg:">
        <label class="justify-center pt-4 font-bold sm:flex ">Phone No</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
      <div class="pt-6 lg:">
        <label class="justify-center pt-4 font-bold sm:flex ">CNIC</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>
      <div class="inline-block pt-5 pl-4 pr-4">
                <input class="" type="checkbox" checked >
                <label>By clicking this I Agree term and condition</label>
      </div>
        <div class="w-3/4 h-10 m-10 shadow-xl ">
        <x-inputs.button type="submit" class="mx-auto " buttonText="Next" />
        <p>Already have an account? <a href="login.blade.php" class="text-blue-600 ">Login</a></p>
      </div>

    </div>
</div>

@endsection
