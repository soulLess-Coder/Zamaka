@extends('layouts.app')

@section('content')
    <?php /** @var TYPE_NAME $listings*/?>

        <div> <!--Body-->
            <div> <!--Filter-->
                <div class="text-xl sm:text-2xl md:text-4xl text-center font-bold font-sen">Filter Search</div> <!--Lable-->
                <div class="shadow-md shadow-zamaka/20 rounded-md grid items-center mx-5 my-5 sm:mx-20 sm:mb-10"> <!--Filters pan-->
                    <div class="flex items-center justify-between justify-items-center"> <!--Filters-->
                        <!--bed-->
                        <div>
                            <span class="flex items-center">
                                <img class="w-5 h-5 px-4 sm:w-auto sm:h-auto" src="./images/bed.png" alt="bed">
                                <input type="number" title="bed" placeholder="beds" class="w-20 shadow-sm shadow-zamaka/20"/>
                            </span>
                        </div>
                        <!--Bathtub-->
                        <div>
                            <span class="flex items-center">
                                <img class="w-5 h-5 px-4 sm:w-auto sm:h-auto" src="./images/bathtub.png" alt="Bathtub">
                                <input type="number" title="bathtub" placeholder="bathtubs" class="w-20 shadow-sm shadow-zamaka/20"/>
                            </span>
                        </div>
                        <!--resize-->
                        <span class="flex items-center">
                            <img class="w-5 h-5 px-4 sm:w-auto sm:h-auto" src="./images/resize.png" alt="resize">
                            <input type="number" title="size" placeholder="size" class="w-20 shadow-sm shadow-zamaka/20"/>
                        </span>
                        <!--location-->
                        <span class="flex items-center">
                            <img class="w-5 h-5 px-4 sm:w-auto sm:h-auto" src="./images/location.png" alt="location">
                            <input id="autocomplete_search" name="autocomplete_search" type="text" placeholder="Search" class="w-20 shadow-sm shadow-zamaka/20"/>
                            <!--<input type="number" title="location" placeholder="location" class="w-20 shadow-sm shadow-zamaka/20"/>-->
                        </span>
                        <!--cash-->
                        <span class="flex items-center">
                            <img class="w-5 h-5 px-4 sm:w-auto sm:h-auto" src="./images/cash.png" alt="cash">
                            <input type="locaion" title="cash" placeholder="cash" class="w-20 shadow-sm shadow-zamaka/20"/>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center mx-10 gap-y-10 "> <!--List of Products-->
                @foreach($listings as $property)

                    <x-property-card :house-number="$property->house_number" :street="$property->street" :sector="$property->sector" >

                        <x-slot:size>
                            {{$property->property_size}}
                        </x-slot:size>

                        <x-slot:build_year>
                            {{$property->build_year}}
                        </x-slot:build_year>

                        <x-slot:price>
                            {{$property->lease_price}}
                        </x-slot:price>

                        <x-slot:sector>
                            {{$property->sector}}
                        </x-slot:sector>

                    </x-property-card>
                @endforeach


<script>
    $( ".property-card" ).click(function() {
        $( "#mobile-menu" ).toggle();
    });
</script>
@endsection
