@section('content')
<div class="text-center sm:text-left">
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
           Sign In
           <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-full @error('email') border-red-500 @enderror" value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-4 border-red-500 w-full h-14 p-4 rounded-full @error('password') border-red-500 @enderror" value="">
            </div>
                <x-inputs.button type="submit" buttonText="Next"/>
            </form>
        </div>
    </div>
</div>
@endsection
