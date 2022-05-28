
@extends('layouts.app')

@section('content')


<form method="post" action="">
    @csrf
    <div class="items-center justify-center sm:flex sm:h-screen">
        <div class="grid grid-cols-1 m-10 sm:grid-cols-2 ">
        <div class="flex justify-center sm:col-span-2">
            <h1 class="flex pt-16 text-6xl leading-loose">Sign In</h1>
            <br>
        </div>

        <div class="w-auto row-span-6 sm:bg-white h-72">
            <img src="./images/lock1.png" />

        </div>

        <div class="">
            <label for="email" class="justify-center order-4 pt-16 font-bold sm:flex">Email</label>
            <input type="email" name="email" id="email" placeholder="example@email.com" class="w-full h-8 p-4 mt-2 transform bg-gray-200 border-2 rounded-lg shadow-lg hover:translate-x-1 hover:border-gray-100" />
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="">
            <label for="password" class="justify-center pt-5 font-bold sm:flex">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="justify-center w-full h-8 p-4 mt-2 transform bg-gray-200 border-2 rounded-lg shadow-lg hover:translate-x-1 hover:border-gray-100" />
            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="p-5 ">
            <x-inputs.button type="submit" class="mx-auto w-full h-10 flex flex-col justify-center items-center m-10" buttonText="Login" />
        </div>

        <div class="justify-center flex "><a class="mx-auto"><img src="./images/googleicon.png" /></a>
        </div>
            <p class="text-center">Don't have an account? <a href="/register" class=" text-blue-600">Register</a></p>
        </div>
    </div>
</form>

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e){

        e.preventDefault();

        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();

        $.ajax({
        type:'POST',
        url:"{{route('register')}}",
        data:{email:email, password:password },
            success:function(data){
                alert(data.success);
            }
        }).done(function(data){
            console.log(data);
            $.cookie('token',data.token)
        });

        });
    </script>
@endsection
