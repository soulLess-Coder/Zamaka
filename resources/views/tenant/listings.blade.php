@extends('layouts.app')

@section('content')
<a href="">
<div class="grid grid-cols-1">
    <div> <!--Body-->
        <div> <!--Filter-->
            <div class="text-xl font-bold text-center sm:text-2xl md:text-4xl font-sen">Filter Search</div> <!--Lable-->
            <div class="grid items-center mx-5 my-5 rounded-md shadow-md shadow-zamaka/20 sm:mx-20 sm:mb-10"> <!--Filters pan-->
                <div class="grid items-center grid-cols-10 justify-items-center"> <!--Filters-->
                    <!--bed-->
                    <span class="flex items-center">
                        <img class="w-5 h-5 sm:w-auto sm:h-auto" src="./images/bed.png" alt="bed">
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/down.png" alt="Up">
                    </span>
                    <span>
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/up.png" alt="Down">
                    </span>
                    <!--Bathtub-->
                    <span class="flex items-center">
                        <img class="w-5 h-5 sm:w-auto sm:h-auto" src="./images/bathtub.png" alt="Bathtub">
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/down.png" alt="Up">
                    </span>
                    <span>
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/up.png" alt="Down">
                    </span>
                    <!--resize-->
                    <span class="flex items-center">
                        <img class="w-5 h-5 sm:w-auto sm:h-auto" src="./images/resize.png" alt="resize">
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/down.png" alt="Up">
                    </span>
                    <span>
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/up.png" alt="Down">
                    </span>
                    <!--location-->
                    <span class="flex items-center">
                        <img class="w-5 h-5 sm:w-auto sm:h-auto" src="./images/location.png" alt="location">
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/down.png" alt="Up">
                    </span>
                    <span>
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/up.png" alt="Down">
                    </span>
                    <!--cash-->
                    <span class="flex items-center">
                        <img class="w-5 h-5 sm:w-auto sm:h-auto" src="./images/cash.png" alt="cash">
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/down.png" alt="Up">
                    </span>
                    <span>
                        <img class="w-3 h-3 sm:w-auto sm:h-auto" src="./images/up.png" alt="Down">
                    </span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 mx-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center gap-y-10 "> <!--List of Products-->
            <div class="flex mx-14"> <!--Product-->
                <div class="flex flex-col gap-2 p-2 shadow-lg sm:w-64 md:w-60 lg:w-70 rounded-xl shadow-zamaka/50"> <!--frame-->
                    <div class=""> <!--image slider-->
                        <div class=""> <!--Image-->
                            <img src="./images/house.png" alt="House">
                        </div>
                        <div class="flex flex-row justify-center my-2"> <!--Slider-->
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                        </div>
                    </div>
                    <div class="font-bold text-md"> <!--Address-->
                        h#112, st#24, Chamanaabad
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 text-sm"> <!--Specs-->
                        <div class="flex flex-wrap items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bed.png" alt="bed">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/resize.png" alt="resize">
                            <div>3 Marla</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bathtub.png" alt="bath">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/cash.png" alt="cash">
                            <div>30,000</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/location.png" alt="location">
                            <div>Allama Iqbal Colony</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/calendar.png" alt="Date">
                            <div>2017</div>
                        </div>
                    </div>
                    <div> <!--Seperater-->
                        <img src="./images/bottom.svg" alt="Seperater">
                    </div>
                    <div class="grid items-center grid-cols-2 gap-2"> <!--Bottom-->
                        <div class="flex flex-row gap-2"> <!--Features-->
                            <div><img src="./images/internet.png" alt="internet"></div>
                            <div><img src="./images/phone.png" alt="internet"></div>
                            <div><img src="./images/electricity.png" alt="electricity"></div>
                            <div><img src="./images/gas.png" alt="gas"></div>
                            <div><img src="./images/water.png" alt="water"></div>
                        </div>
                        <div class="justify-self-end"> <!--View More Button-->
                            <div>
                                <button class="px-4 py-1 rounded-full bg-zamaka hover:shadow-sm hover:shadow-zamaka/60">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded-r-full shadow-lg w-14 h-14 shadow-zamaka/50">
                    <button><img src="./images/heart.png" alt="heart"></button>
                </div>
            </div>
            <div class="flex mx-14"> <!--Product-->
                <div class="flex flex-col gap-2 p-2 shadow-lg sm:w-64 md:w-60 lg:w-70 rounded-xl shadow-zamaka/50"> <!--frame-->
                    <div class=""> <!--image slider-->
                        <div class=""> <!--Image-->
                            <img src="./images/house.png" alt="House">
                        </div>
                        <div class="flex flex-row justify-center my-2"> <!--Slider-->
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                        </div>
                    </div>
                    <div class="font-bold text-md"> <!--Address-->
                        h#112, st#24, Chamanaabad
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 text-sm"> <!--Specs-->
                        <div class="flex flex-wrap items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bed.png" alt="bed">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/resize.png" alt="resize">
                            <div>3 Marla</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bathtub.png" alt="bath">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/cash.png" alt="cash">
                            <div>30,000</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/location.png" alt="location">
                            <div>Allama Iqbal Colony</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/calendar.png" alt="Date">
                            <div>2017</div>
                        </div>
                    </div>
                    <div> <!--Seperater-->
                        <img src="./images/bottom.svg" alt="Seperater">
                    </div>
                    <div class="grid items-center grid-cols-2 gap-2"> <!--Bottom-->
                        <div class="flex flex-row gap-2"> <!--Features-->
                            <div><img src="./images/internet.png" alt="internet"></div>
                            <div><img src="./images/phone.png" alt="internet"></div>
                            <div><img src="./images/electricity.png" alt="electricity"></div>
                            <div><img src="./images/gas.png" alt="gas"></div>
                            <div><img src="./images/water.png" alt="water"></div>
                        </div>
                        <div class="justify-self-end"> <!--View More Button-->
                            <div>
                                <button class="px-4 py-1 rounded-full bg-zamaka hover:shadow-sm hover:shadow-zamaka/60">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center shadow-lg w-14 h-14 rounded-r-xl shadow-zamaka/50">
                    <button><img src="./images/heart.png" alt="heart"></button>
                </div>
            </div>
            <div class="flex mx-14"> <!--Product-->
                <div class="flex flex-col gap-2 p-2 shadow-lg sm:w-64 md:w-60 lg:w-70 rounded-xl shadow-zamaka/50"> <!--frame-->
                    <div class=""> <!--image slider-->
                        <div class=""> <!--Image-->
                            <img src="./images/house.png" alt="House">
                        </div>
                        <div class="flex flex-row justify-center my-2"> <!--Slider-->
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                        </div>
                    </div>
                    <div class="font-bold text-md"> <!--Address-->
                        h#112, st#24, Chamanaabad
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 text-sm"> <!--Specs-->
                        <div class="flex flex-wrap items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bed.png" alt="bed">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/resize.png" alt="resize">
                            <div>3 Marla</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bathtub.png" alt="bath">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/cash.png" alt="cash">
                            <div>30,000</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/location.png" alt="location">
                            <div>Allama Iqbal Colony</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/calendar.png" alt="Date">
                            <div>2017</div>
                        </div>
                    </div>
                    <div> <!--Seperater-->
                        <img src="./images/bottom.svg" alt="Seperater">
                    </div>
                    <div class="grid items-center grid-cols-2 gap-2"> <!--Bottom-->
                        <div class="flex flex-row gap-2"> <!--Features-->
                            <div><img src="./images/internet.png" alt="internet"></div>
                            <div><img src="./images/phone.png" alt="internet"></div>
                            <div><img src="./images/electricity.png" alt="electricity"></div>
                            <div><img src="./images/gas.png" alt="gas"></div>
                            <div><img src="./images/water.png" alt="water"></div>
                        </div>
                        <div class="justify-self-end"> <!--View More Button-->
                            <div>
                                <button class="px-4 py-1 rounded-full bg-zamaka hover:shadow-sm hover:shadow-zamaka/60">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded-r-lg shadow-lg w-14 h-14 shadow-zamaka/50">
                    <button><img src="./images/heart.png" alt="heart"></button>
                </div>
            </div>
            <div class="flex mx-14"> <!--Product-->
                <div class="flex flex-col gap-2 p-2 shadow-lg sm:w-64 md:w-60 lg:w-70 rounded-xl shadow-zamaka/50"> <!--frame-->
                    <div class=""> <!--image slider-->
                        <div class=""> <!--Image-->
                            <img src="./images/house.png" alt="House">
                        </div>
                        <div class="flex flex-row justify-center my-2"> <!--Slider-->
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                            <div class="w-2 h-2 mx-1 bg-gray-500 rounded-full"></div>
                        </div>
                    </div>
                    <div class="font-bold text-md"> <!--Address-->
                        h#112, st#24, Chamanaabad
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 text-sm"> <!--Specs-->
                        <div class="flex flex-wrap items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bed.png" alt="bed">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/resize.png" alt="resize">
                            <div>3 Marla</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bathtub.png" alt="bath">
                            <div>3</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/cash.png" alt="cash">
                            <div>30,000</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/location.png" alt="location">
                            <div>Allama Iqbal Colony</div>
                        </div>
                        <div class="flex flex-row items-center gap-1">
                            <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/calendar.png" alt="Date">
                            <div>2017</div>
                        </div>
                    </div>
                    <div> <!--Seperater-->
                        <img src="./images/bottom.svg" alt="Seperater">
                    </div>
                    <div class="grid items-center grid-cols-2 gap-2"> <!--Bottom-->
                        <div class="flex flex-row gap-2"> <!--Features-->
                            <div><img src="./images/internet.png" alt="internet"></div>
                            <div><img src="./images/phone.png" alt="internet"></div>
                            <div><img src="./images/electricity.png" alt="electricity"></div>
                            <div><img src="./images/gas.png" alt="gas"></div>
                            <div><img src="./images/water.png" alt="water"></div>
                        </div>
                        <div class="justify-self-end"> <!--View More Button-->
                            <div>
                                <button class="px-4 py-1 rounded-full bg-zamaka hover:shadow-sm hover:shadow-zamaka/60">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center shadow-lg w-14 h-14 shadow-zamaka/50">
                    <button><img src="./images/heart.png" alt="heart"></button>
                </div>
            </div>
        </div>
    </div>
</div> <!--Wrapper-->
</a>
@endsection
