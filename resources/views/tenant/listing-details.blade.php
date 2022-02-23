@extends('layouts.app')

@section('content')
<div>
    <div class="grid grid-cols-1">
        <div class="grid grid-cols-2 p-3 items-center sm:flex sm:flex-row sm:justify-between"> <!--Header-->
            <div class="justify-self-start sm:flex sm:flex-row gap-x-10 items-center"> <!--Logo-->
               <img class="w-14 h-16 sm:w-20 sm:h-24" src="/dist/assets/logo.png" alt="logo">
               <div class="hidden sm:flex sm:flex-wrap md:flex-row sm:justify-around md:justify-between md:gap-x-10 sm:justify-self-start">
                    <div>
                         <button class="px-4 sm:p-1 md:px-4 hover:bg-zamaka hover:shadow-md hover:shadow-zamaka/60 rounded-full">Home</button>
                    </div>
                    <div>
                         <button class="px-4 sm:p-1 md:px-4 hover:bg-zamaka hover:shadow-md hover:shadow-zamaka/60 rounded-full">About Us</button>
                    </div>
                    <div>
                         <button class="px-4 sm:p-1 md:px-4 hover:bg-zamaka hover:shadow-md hover:shadow-zamaka/60 rounded-full">Book Appointment</button>
                    </div>
                    <div>
                         <button class="px-4 sm:p-1 md:px-4 hover:bg-zamaka hover:shadow-md hover:shadow-zamaka/60 rounded-full">Listings</button>
                    </div>
                </div>
            </div>
            <div class="justify-self-end shadow-md shadow-zamaka/50 rounded-md sm:shadow-none"> <!--menu-->
                <div class="dropdown dropdown-end items-center">
                    <img tabindex="0" class="sm:hidden" src="/dist/icons/menu.svg" alt="menu">
                    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                          <a>Home</a>
                        </li>
                        <li>
                          <a>About US</a>
                        </li>
                        <li>
                          <a>Book Appointment</a>
                        </li>
                        <li>
                          <a>Listings</a>
                        </li>
                      </ul>
                </div>
                <div class="hidden sm:flex flex-row"> <!--User-->
                    <div class="p-1 mx-2 self-center">SALMAN</div>
                    <div class="border-l-2 border-black"></div>
                    <div class="p-1 mx-2">
                        <img src="/dist/icons/icon user.png" alt="user">
                    </div>
                </div>
            </div>
        </div>
        <div> <!--Body-->
            <div class="max-w-full h-96 bg-black my-10 rounded-xl mx-5"> <!--Top Image-->
                <img class="object-cover h-96 w-full rounded-xl" src="/dist/assets/old house.png" alt="old house">
                <div> <!--Dots-->
                    <ul class="flex justify-center my-2">
                        <li class="mx-1">
                            <a href="">
                                <div class="w-3 h-3 bg-gray-500 rounded-full hover:bg-red-500 hover:w-4 h-4"></div>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="">
                                <div class="w-3 h-3 bg-gray-500 rounded-full hover:bg-red-500 hover:w-4 h-4"></div>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="">
                                <div class="w-3 h-3 bg-gray-500 rounded-full hover:bg-red-500 hover:w-4 h-4"></div>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="">
                                <div class="w-3 h-3 bg-gray-500 rounded-full hover:bg-red-500 hover:w-4 h-4"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div> <!--Button-->
                    <ul class="grid grid-cols-4 grid-flow-row items-center"> <!--Grid for buttons-->
                        <li class="col-span-3">
                            <span><Button class="min-w-full h-10 bg-red-500 rounded-full mx-10">Visit Now</Button></span>
                        </li>
                        <li class="justify-self-center">
                            <a href="">
                                <span>
                                    <img src="/dist/icons/location.png" alt="location">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-2 text-lg font-bold text-red-500"> <!--Routing-->
                    Home > Rawalpindi
                </div>
                <div class="my-1"> <!--Page Body-->
                    <h1 class="text-3xl font-bold">Home in Rawalpindi</h1>
                    <p class="my-2 text-lg font-bold text-red-500">Allama Iqbal Colony</p>
                    <div class="my-1 flex flex-row items-center text-sm"> <!--Specifications-->
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Area</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon resize.png" alt="Bed">
                                <p>200sq</p>
                            </li>
                        </ul>
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Bath</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon bathtub.png" alt="Bed">
                                <p>3</p>
                            </li>
                        </ul>
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Bed</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon bed.png" alt="Bed">
                                <p>3</p>
                            </li>
                        </ul>
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Calendar</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon calendar.png" alt="Bed">
                                <p>2021</p>
                            </li>
                        </ul>
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Rent</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon cash.png" alt="Bed">
                                <p>30k</p>
                            </li>
                        </ul>
                        <ul class="flex flex-col mr-10"> <!--spec-->
                            <li>
                                <p>Allama Iqbal</p>
                            </li>
                            <li class="flex flex-row items-center">
                                <img src="/dist/icons/sicon location.png" alt="Bed">
                                <p></p>
                            </li>
                        </ul>
                    </div>
                    <div class="my-2"> <!--Description-->
                        <h1 class="my-2 text-lg font-bold text-red-500">Description</h1>
                        Enchanting three bedroom, three bath home with spacious one bedroom, one bath cabana, in-laws quarters. Charming living area features fireplace and fabulous art deco details. Formal dining room. Remodelled kitchen with granite countertops, white cabinetry and stainless appliances. Lovely master bedroom has updated bath, beautiful view of the pool. Guest bedrooms have walk-in, cedar closets. Delightful backyard; majestic oaks surround the free form pool and expansive patio, wet bar and grill.
                    </div>
                    <div class="my-2"> <!--Additional Detils-->
                        <h1 class="my-2 text-lg font-bold text-red-500">Additional Details</h1>
                        <p>BEDROOM FEATURES: Main Floor Master Bedroom, Walk-In Closet</p>
                        <p>DINING AREA: Breakfast Counter/Bar, Living/Dining Combo</p>
                        <p>DOORS & WINDOWS: Bay Window</p>
                        <p>ENTRY LOCATION: Mid Level</p>
                        <p>EXTERIOR CONSTRUCTION: Wood</p>
                        <p>FIREPLACE FUEL: Pellet Stove</p>
                        <p>FIREPLACE LOCATION: Living Room</p>
                        <p>FLOORS: Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</p>
                    </div>
                    <div tabindex="0" class="collapse w-full"> <!--Section 1-->
                        <div class="flex flex-row justify-between collapse-title text-md bg-gray-400 items-center">
                            <ul class="flex flex-row items-center">
                                <li class="mr-4 font-bold text-2xl">+</li>
                                <li>First floor</li>
                            </ul>
                            <ul class="flex flex-row items-center">
                                <li class="mr-4">2500 sq</li>
                                <li class="mr-4">1 Bedroom</li>
                                <li>1 Bathroom</li>
                            </ul>
                        </div>
                        <div class="collapse-content justify-self-center m-10">
                            <img src="/dist/assets/house.png" alt="House">
                        </div>
                    </div>
                    <div tabindex="0" class="collapse w-full"> <!--Section 2-->
                        <div class="flex flex-row justify-between collapse-title text-md bg-gray-400 items-center">
                            <ul class="flex flex-row items-center">
                                <li class="mr-4 font-bold text-2xl">+</li>
                                <li>Second floor</li>
                            </ul>
                            <ul class="flex flex-row items-center">
                                <li class="mr-4">2500 sq</li>
                                <li class="mr-4">1 Bedroom</li>
                                <li>1 Bathroom</li>
                            </ul>
                        </div>
                        <div class="collapse-content justify-self-center m-10">
                            <img src="/dist/assets/house.png" alt="House">
                        </div>
                    </div>
                    <div> <!--Location-->
                        <h1 class="text-3xl font-bold">Location</h1>
                        <div class="m-20"> <!--map-->
                            <img src="/dist/assets/map.png" alt="map">
                        </div>
                    </div>
                    <div> <!--Buttons-->
                        <ul>
                            <li class="flex flex-row justify-evenly md:px-20 place-items-stretch">
                                <button class="text-xl text-white py-4 md:mx-20 bg-red-500 w-full rounded-full">Visit Now</button>
                                <button class="text-xl text-white py-4 md:mx-20 bg-red-500 w-full rounded-full">Get Directions</button>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
</div>
@endsection
