@extends('layouts.app')

@section('content')

{{-- <div>
<form action="{{ route('login') }}" method="post" class="grid grid-cols-1 bg-white sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
    @csrf
    <div class="hidden lg:block">
        <div class="flex justify-center"><a class="mx-auto"><img src="./images/lock1.png" /></a></div>
    </div>
    <div class="text-left text-center bg-green-300 mix-blend-multiply lg:bg-white lg:from-white lg:to-white md:bg-white md:from-white md:to-white ">
      <div class="flex justify-center">
        <div class="rounded-lg">
          <p class="text-2xl text-center"><b>Sign In</b></p>
          <br />
          <div class="mb-4">
            <label for="email" class="block font-bold text-center">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-full @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
          </div>
          <br />
          <div class="mb-4">
            <label for="password" class="block font-bold text-center">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full h-14 p-4 rounded-full @error('password') border-red-500 @enderror" value="" />
          </div>
          <br />
          <x-inputs.button type="submit" class="mx-auto " buttonText="Login" />
          <label class="block text-center">_____________OR____________</label>
          <div class="flex justify-center"><a class="mx-auto"><img src="./images/googleicon.png" /></a></div>
          <p class="text-center">Don't have an account? <a href="register.blade.php" class="text-blue-600 ">Register</a></p>
        </div> --}}

<div class="items-center justify-center sm:flex sm:h-screen">
    <div class="grid grid-cols-1 m-10 sm:grid-cols-2 ">
      <div class="flex justify-center sm:col-span-2">
        <h1 class="flex pt-16 text-6xl leading-loose">Sign In</h1>
        <br>
      </div>

      <div class="w-auto row-span-6 sm:bg-white h-72">
        <img src="./images/lock1.png" />

      </div>

      <div class="">
        <label class="justify-center order-4 pt-16 font-bold sm:flex">Email</label>
        <input type="text" id="Street" placeholder="@" class="w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class="">
        <label class="justify-center pt-5 font-bold sm:flex">Password</label>
        <input type="text" id="Street" placeholder="@" class="flex justify-center w-full h-1 p-4 mt-2 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
      </div>

      <div class="w-3/4 h-10 m-10 shadow-xl ">
        <x-inputs.button type="submit" class="mx-auto " buttonText="Login" />
      </div>

      <hr />

      <div class="flex justify-center p-5"><a class="mx-auto"><img src="./images/googleicon.png" /></a></div>
      <br>
      <p class="text-center">Don't have an account? <a href="register.blade.php" class="text-blue-600 ">Register</a></p>
    </div>
</div>
@endsection
