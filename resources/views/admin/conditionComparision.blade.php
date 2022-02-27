@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <div class="flex flex-col pt-5 m-4 pb-5 h-screen place-content-center">
            <div>
                <h3 class="flex text-2xl pt-10 pb-10 justify-center">Interior </h3>
            </div>
        <div class="flex w-full  ">
            <div class="grid h-72  flex-grow card bg-base-300 rounded-box justify-center place-items-center">content</div>
            <div class="divider divider-horizontal">VS</div>
            <div class="grid max-h-72  flex-grow card bg-base-300 rounded-box justify-center place-items-center">content</div>
        </div>
    </div>
</x-admin-sidebar>
@endsection
