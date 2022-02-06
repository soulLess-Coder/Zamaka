@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('login') }}" method="post" class="grid grid-cols-1 bg-white sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="p-5">
              <div class="flex justify-center">
                <div >
                  <p class="text-2xl text-center"><b>Property 1</b></p>
                <br />
                <div class="mb-4">
                    <div class="row-span-6 sm:bg-white w-auto h-25 p-5 ">
                        <img src="./images/house.png" />
                    </div>
                <label for="password" class="block font-bold ">Prize</label>
                <input  class=" border-black  border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>
              <div class="mb-4">
                <label for="email" class="block font-bold ">Area/Mohalla</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Street</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold">Addrees</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">City</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4 lg:col-span-2">
                <p class ="p-2 font-bold" >Basic Necessity</p>
                <div class="inline-block pl-4 pr-4">
                    <input class="" type="checkbox" checked >
                    <label class="font-bold">Electricity</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked>
                    <label class="font-bold">Gas</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked >
                    <label class="font-bold">Telephone</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked >
                        <label class="font-bold">Internet</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked>
                        <label class="font-bold">Water Supply</label>
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Bedrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Washrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">HouseArea</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">LandMarks</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Year Build</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

            </div>
          </div>
        </div>

       <div class="p-5">
              <div class="flex justify-center">
                <div class="rounded-lg">
                  <p class="text-2xl text-center"><b>Property 2</b></p>
                <br />
                <div class="mb-4">
                    <div class="row-span-6 sm:bg-white w-auto h-25 p-5 ">
                        <img src="./images/house.png" />
                    </div>
                <label for="password" class="block font-bold ">Prize</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>
              <div class="mb-4">
                <label for="email" class="block font-bold ">Area/Mohalla</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Street</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold">Addrees</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">City</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4 lg:col-span-2">
                <p class ="p-2 font-bold" >Basic Necessity</p>
                <div class="inline-block pl-4 pr-4">
                    <input class="" type="checkbox" checked >
                    <label class="font-bold">Electricity</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked>
                    <label class="font-bold">Gas</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked >
                    <label class="font-bold">Telephone</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked >
                        <label class="font-bold">Internet</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked>
                        <label class="font-bold">Water Supply</label>
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Bedrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Washrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">HouseArea</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">LandMarks</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Year Build</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

            </div>
          </div>
        </div>



        <div class="p-5">
              <div class="flex justify-center">
                <div class="rounded-lg">
                  <p class="text-2xl text-center"><b>Property 3</b></p>
                <br />
                <div class="mb-4">
                    <div class="row-span-6 sm:bg-white w-auto h-25 p-5 ">
                        <img src="./images/house.png" />
                    </div>
                <label for="password" class="block font-bold ">Prize</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>
              <div class="mb-4">
                <label for="email" class="block font-bold ">Area/Mohalla</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Street</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold">Addrees</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">City</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4 lg:col-span-2">
                <p class ="p-2 font-bold" >Basic Necessity</p>
                <div class="inline-block pl-4 pr-4">
                    <input class="" type="checkbox" checked >
                    <label class="font-bold">Electricity</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked>
                    <label class="font-bold">Gas</label>
                </div>
                <br>
                <div class="inline px-4">
                    <input  type="checkbox" checked >
                    <label class="font-bold">Telephone</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked >
                        <label class="font-bold">Internet</label>
                </div>
                <br>
                <div class="inline px-4">
                        <input  type="checkbox" checked>
                        <label class="font-bold">Water Supply</label>
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Bedrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Washrooms</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">HouseArea</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">LandMarks</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

              <div class="mb-4">
                <label for="password" class="block font-bold ">Year Build</label>
                <input  class="border-black border-2 w-25 h-5 p-4 @error('password') border-red-500 @enderror" value="" />
              </div>

            </div>
          </div>
        </div>
      </form>
      <div class="p-4" >
        <x-inputs.button type="submit" class="mx-auto " buttonText="Back" />
      </div>
    </div>
@endsection
