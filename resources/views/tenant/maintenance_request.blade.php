@extends('layouts.app')

@section('content')
<x-admin-sidebar>
<div class="flex items-center justify-center sm:h-screen">
    <div class="grid grid-cols-1 gap-5 my-auto">
      <h2 class=""><b class="text-3xl">Maintenance</b></h2>
      <div class="flex justify-center">
        <p><b>Explain your issuse so we can help you  we are always there to help</b></p>
      </div>
        <form action="/api/MaintenanceRequest" method="post">
            @csrf
            <div>
                <label class="justify-center p-2 sm:flex">Name</label>
                <input type="text" id="name" name="name" placeholder="Raja Muhammad Mahad" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
            </div>
            <div>
                <label class="justify-center p-2 sm:flex">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" placeholder="03xx-xxxxxxx" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
            </div>

            <div>
                <label class="justify-center p-2 sm:flex">Title</label>
                <input type="text" id="title" name="title" placeholder="Summary of your issue" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
            </div>
            
            <div>
                <label class="justify-center p-2 sm:flex">Description</label>
                <input type="text" id="description" name="description" placeholder="Describe your problem in great detail.
                Add all the information you think is relevant to the issue and with help us find a solution" class="flex justify-center w-full h-1 p-4 transform bg-gray-200 border-2 rounded-full shadow-lg hover:translate-x-1 hover:border-gray-100" />
            </div>

            <div class="mb-4">
                <p class="p-2 font-bold"> Attach File</p>
                <label for="myfile">Select a file:</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit" class=" mt-10 w-40 bg-red-500  text-white font-bold py-2 px-4  rounded">
                SUBMIT
            </button>
        </form>
    </div>
</div>
</x-admin-sidebar>
@endsection


