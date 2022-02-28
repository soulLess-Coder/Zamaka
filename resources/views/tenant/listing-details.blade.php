@extends('layouts.app')

@section('content')

<div> <!--Body-->
    <div class="px-10"> <!--Top Image-->
        <div
        id="carouselExampleCrossfade"
        class="carousel slide carousel-fade relative rounded-lg h-96 my-10"
        data-bs-ride="carousel"
        >
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active float-left w-full">
                <img
                  src="/images/old house.png"
                  class="block w-full"
                  alt="Wild Landscape"
                />
              </div>
              <div class="carousel-item float-left w-full">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                  class="block w-full"
                  alt="Camera"
                />
              </div>
              <div class="carousel-item float-left w-full">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                  class="block w-full"
                  alt="Exotic Fruits"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="px-10"> <!--Button-->
            <ul class="grid grid-cols-4 grid-flow-row items-center"> <!--Grid for buttons-->
                <li class="col-span-3 justify-item-center">
                    <span><Button class="w-1/3 h-10 bg-red-500 rounded-full mx-10">Visit Now</Button></span>
                </li>
                <li class="justify-self-center">
                    <a href="">
                        <span>
                            <img class="scale-50" src="/images/location.png" alt="location">
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="px-10">
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
                            <img class="mr-6" src="/images/resize.png" alt="area">
                            <p>200sq</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col mr-10"> <!--spec-->
                        <li>
                            <p>Bath</p>
                        </li>
                        <li class="flex flex-row items-center">
                            <img class="mr-6" src="/images/bathtub.png" alt="bathtub">
                            <p>3</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col mr-10"> <!--spec-->
                        <li>
                            <p>Bed</p>
                        </li>
                        <li class="flex flex-row items-center">
                            <img class="mr-6" src="/images/bed.png" alt="Bed">
                            <p>3</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col mr-10"> <!--spec-->
                        <li>
                            <p>Calendar</p>
                        </li>
                        <li class="flex flex-row items-center">
                            <img class="mr-6" src="/images/calendar.png" alt="calander">
                            <p>2021</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col mr-10"> <!--spec-->
                        <li>
                            <p>Rent</p>
                        </li>
                        <li class="flex flex-row items-center">
                            <img class="mr-6" src="/images/cash.png" alt="cash">
                            <p>30k</p>
                        </li>
                    </ul>
                    <ul class="flex flex-col mr-10"> <!--spec-->
                        <li>
                            <p>Allama Iqbal</p>
                        </li>
                        <li class="flex flex-row items-center">
                            <img class="mr-6" src="/images/location.png" alt="location">
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
                <div> <!--Section 1-->
                    <div class="w-full py-5 transition duration-150 ease-in-out" data-bs-toggle="collapse" href="#collapseWithScrollbar" role="button" aria-expanded="false" aria-controls="collapseWithScrollbar"> <!--Section 1-->
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
                    </div>
                    <div class="collapse mt-4 overflow-y-auto justify-center" id="collapseWithScrollbar">
                        <img src="/images/house.png" alt="House">
                    </div>
                </div>
                <div> <!--Section 2-->
                    <div class="w-full py-5 transition duration-150 ease-in-out" data-bs-toggle="collapse" href="#collapseWithScrollbar2" role="button" aria-expanded="false" aria-controls="collapseWithScrollbar2"> <!--Section 1-->
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
                    </div>
                    <div class="collapse mt-4 overflow-y-auto justify-center" id="collapseWithScrollbar2">
                        <img src="/images/map.png" alt="House">
                    </div>
                </div>
                <div> <!--Location-->
                    <h1 class="text-3xl font-bold">Location</h1>
                    <div class="m-20"> <!--map-->
                        <img src="/images/map.png" alt="map">
                    </div>
                </div>
                <div> <!--Buttons-->
                    <ul>
                        <li class="flex flex-row justify-evenly md:px-20 place-items-stretch">
                            <button class="text-xl text-white md:mx-20 h-10 bg-red-500 w-40 rounded-full">Visit Now</button>
                            <button class="text-xl text-white md:mx-20 h-10 bg-red-500 w-40 rounded-full">Get Directions</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
