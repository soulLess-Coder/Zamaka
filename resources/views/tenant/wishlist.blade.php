@extends('layouts.app')

@section('content')
        <div> <!--Body-->
            @dd(\Illuminate\Support\Facades\Auth::user())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center mx-10 gap-y-10 "> <!--List of Products-->
                <div class="flex mx-14 sm:w-64 md:w-60 lg:w-72"> <!--Product-->
                    <div class="flex flex-col p-2 rounded-xl shadow-lg shadow-zamaka/50 gap-2"> <!--frame-->
                        <div class=""> <!--image slider-->
                            <div class=""> <!--Image-->
                                <img src="./images/old house.png" alt="House">
                            </div>
                            <div class="flex flex-row justify-center my-2"> <!--Slider-->
                                <div class="w-2 h-2 bg-gray-500 rounded-full mx-1"></div>
                                <div class="w-2 h-2 bg-gray-500 rounded-full mx-1"></div>
                                <div class="w-2 h-2 bg-gray-500 rounded-full mx-1"></div>
                            </div>
                        </div>
                        <a href="/tenant/details">
                        <div class="text-md font-bold"> <!--Address-->
                            h#112, st#24, Chamanaabad
                        </div>
                        </a>
                        <div class="flex flex-wrap justify-between text-sm items-center gap-2"> <!--Specs-->
                            <div class="flex flex-wrap gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bed.png" alt="bed">
                                <div>3</div>
                            </div>
                            <div class="flex flex-row gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/resize.png" alt="resize">
                                <div>3 Marla</div>
                            </div>
                            <div class="flex flex-row gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/bathtub.png" alt="bath">
                                <div>3</div>
                            </div>
                            <div class="flex flex-row gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/cash.png" alt="cash">
                                <div>30,000</div>
                            </div>
                            <div class="flex flex-row gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/location.png" alt="location">
                                <div>Allama Iqbal Colony</div>
                            </div>
                            <div class="flex flex-row gap-1 items-center">
                                <img class="w-5 h-5 sm:w-6 sm:h-6" src="./images/calendar.png" alt="Date">
                                <div>2017</div>
                            </div>
                        </div>
                        <div> <!--Seperater-->
                            <hr class="border-zamaka/20 shadow-lg shadow-zamaka/20 h-1 bg-zamaka/20">
                        </div>
                        <div class="grid grid-cols-2 gap-2 items-center"> <!--Bottom-->
                            <div class="flex flex-row gap-2"> <!--Features-->
                                <div><img src="./images/internet.png" alt="internet"></div>
                                <div><img src="./images/phone.png" alt="internet"></div>
                                <div><img src="./images/electricity.png" alt="electricity"></div>
                                <div><img src="./images/gas.png" alt="gas"></div>
                                <div><img src="./images/water.png" alt="water"></div>
                            </div>
                            <div class="justify-self-end"> <!--View More Button-->
                                <div>
                                    <button class="bg-zamaka px-4 py-1 rounded-full hover:shadow-sm hover:shadow-zamaka/60">View More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-14 h-14 rounded-r-full shadow-lg shadow-zamaka/50 justify-center items-center">
                        <button><img src="./images/heart.png" alt="heart"></button>
                    </div>
                </div>

            </div>
        </div>
    </div> <!--Wrapper-->


<script>
    $( ".property-card" ).click(function() {
        $( "#mobile-menu" ).toggle();
    });

</script>
@endsection
