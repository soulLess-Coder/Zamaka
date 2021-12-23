@extends('layouts.app')

@section('content')
<div class="px-5">
<form class="grid grid-cols-1 bg-white sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
    <div class="hidden lg:block">
        <div class="justify-center flex pl-10"><a class="mx-auto"><img src="./images/lock.png" /></a></div>
    </div>
    <div class="text-center sm:text-left">
      <div class="flex justify-center">
        <div class="rounded-lg">
          <p class="text-center text-2xl"><b>Sign In</b></p>
          <br />
          <div class="mb-4">

            <label for="email" class="text-center block">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-full @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
          </div>
          <br />
          <div class="mb-4">
            <label for="password" class="text-center block">Password</label>
            <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full h-14 p-4 rounded-full @error('password') border-red-500 @enderror" value="" />
          </div>
          <br />
          <x-inputs.button type="submit" class=" mx-auto" buttonText="Login" />
          <label class="text-center block">_____________OR____________</label>
          <div class="justify-center flex"><a class="mx-auto"><img src="./images/googleicon.png" /></a></div>
          <p class="text-center">Don't have an account? <a href="register.blade.php">Register</a></p>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
