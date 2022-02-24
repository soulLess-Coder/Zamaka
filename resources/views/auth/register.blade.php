@extends('layouts.app')

@section('content')

<div class="items-center justify-center sm:flex sm:h-screen">
    <div class="grid grid-cols-1 m-10 sm:grid-cols-2 justify-evenly">
      <div class="flex justify-center sm:col-span-2">
        <h1 class="flex pt-16 text-5xl leading-loose">Sign Up</h1>
        <br>
      </div>

      <div class="w-auto row-span-6 p-5 sm:bg-white h-72">
        <img src="./images/signup.png" />
      </div>

      <ul class="steps">
        <li class="step step-primary ">Register 1</li>
        <li class="step step-primary">Register 2</li>
        <li class="step">Register 3</li>
     </ul>

    <div>
        <div class="pt-6 justify-center">
            <label class="justify-center order-4 font-bold  sm:flex">Full Name</label>
            <input type="text" id="Street" placeholder="Full name" class="flex ml-10 justify-self-center w-1/2 h-1 p-4 mt-2 transform bg-neutral-400 border-2 text-red-200 rounded-lg shadow-lg hover:translate-x-1 hover:border-gray-100" />
        </div>

        <div class="pt-6">
            <label class="justify-center pt-4 font-bold sm:flex ">Phone No</label>
            <input type="text" id="Street" placeholder="03xx-xxxx-xxx" class="flex ml-10 w-1/2 h-3 p-4 mt-2 transform text-red-300 bg-neutral-400 border-2 rounded-lg shadow-lg hover:translate-x-1 hover:border-gray-100" />
        </div>
        <div class="pt-6">
            <label class="justify-center pt-4 font-bold sm:flex ">CNIC</label>
            <input type="text" id="Street" placeholder="CNIC Number" class="flex ml-10 w-1/2 h-3 p-4 mt-2 transform  text-red-300 bg-neutral-400 border-2 rounded-lg shadow-lg hover:translate-x-1 hover:border-gray-100" />
        </div>
    </div>
      <div class="inline-block pt-5 pl-4 pr-4">
                <input class="" type="checkbox" checked >
                <label>By clicking this I Agree term and condition</label>
      </div>

        <div class="w-3/4 h-10 m-10">
        <x-inputs.button type="submit" class="mx-auto " buttonText="Next" />
        <p>Already have an account? <a href="{{route('login')}}" class="text-blue-600 ">Login</a></p>
      </div>
    </div>
</div>

@endsection
