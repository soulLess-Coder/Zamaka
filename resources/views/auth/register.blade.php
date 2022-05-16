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
        <form method="post" action="LoginController">
            @csrf
            <div class="" >
                <div class="justify-center pt-6">
                    <label for="name" class="justify-center order-4 font-bold sm:flex">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Full Name" class="w-1/2 h-5 p-4 mt-2 ml-10 text-gray-900 transform border-2 rounded-lg shadow-md  bg-neutral-400 hover:translate-x-1 hover:border-gray-100" />
                    @error('name')
                    <div class="mt-2 text-sm text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="pt-6">
                    <label for="password" class="flex items-start pt-4 font-bold sm:flex ">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="w-1/2 h-5 p-4 mt-2 ml-10 text-gray-900 transform border-2 rounded-lg shadow-md  bg-neutral-400 hover:translate-x-1 hover:border-gray-100" />
                    @error('password')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="pt-6">
                    <label for="password_confirmation" class="justify-center pt-4 font-bold sm:flex ">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" class="flex w-1/2 h-5 p-4 mt-2 ml-10 text-gray-900 transform border-2 shadow-lg rounded-xl bg-neutral-400 hover:translate-x-1 hover:border-gray-100" />
                    @error('password_confirmation')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="pt-6">
                    <label for="email" class="justify-center pt-4 font-bold sm:flex ">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="justify-center w-1/2 h-3 p-4 mt-2 ml-10 text-gray-900 transform border-2 shadow-lg rounded-xl bg-neutral-400 hover:translate-x-1 hover:border-gray-100" />
                    @error('email')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="pt-6">
                    <label for="phone_number" class="justify-center pt-4 font-bold sm:flex ">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="03-xxx-xxxx-xx" class="justify-center w-1/2 h-3 p-4 mt-2 ml-10 text-gray-900 transform border-2 shadow-lg rounded-xl bg-neutral-400 hover:translate-x-1 hover:border-gray-100" />
                    @error('email')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


            </div>
            <select name="role" aria-label="Sign up as" class="p-2 text-xs font-medium leading-3 text-gray-600 bg-gray-100 appearance-none focus:text-indigo-600 w-36 focus:outline-none">
                <option class="text-xs font-medium leading-3 text-gray-600">Owner</option>
                <option class="text-xs font-medium leading-3 text-gray-600">Tenant</option>
            </select>
            <div class="w-3/4 h-10 m-10">
                <x-inputs.button buttonText="Sign Up" />
                <p>Already have an account? <a href="{{route('login')}}" class="text-blue-600 ">Login</a></p>
            </div>
        </form>
        </div>
    </div>
@endsection
