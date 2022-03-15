@extends('layouts.app')

@section('content')

    <section class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
        <div class="relative z-30 p-5 w-1/3 text-white bg-opacity-50">
            <x-inputs.search-bar></x-inputs.search-bar>
            <h1>publishing and graphic</h1>
            <p>
                In publishing and graphic design, Lorem ipsum is a placeholder
                text commonly used to demonstrate the visual form of a document
                or a typeface without relying on meaningful content.
            </p>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4"/>
            Your browser does not support the video tag.
        </video>
    </section>


    <section class="flex items-center justify-center sm:h-screen">
    <h1>Who are we? what do we do?</h1>
    <p>
          In publishing and graphic design, Lorem ipsum is a placeholder
          text commonly used to demonstrate the visual form of a document
          or a typeface without relying on meaningful content.
    </p>
    </section>

    <section class="flex items-center justify-center sm:h-screen">
        <h1>Why use us?</h1>
        <p>
            In publishing and graphic design, Lorem ipsum is a placeholder
            text commonly used to demonstrate the visual form of a document
            or a typeface without relying on meaningful content.
        </p>
    </section>



@endsection
