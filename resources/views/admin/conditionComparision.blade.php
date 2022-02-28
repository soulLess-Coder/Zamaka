@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <section class="text-gray-600 body-font">
        <div class="  container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Compare Property</h1>
              <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Compare your properties to have an idea</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Date 2/2/2022</h3>
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Property-ID 1</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Images</h2>
                <p class="leading-relaxed text-base">a minor updaedto infrstruture ane whick keeys building healty.</p>
              </div>

            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-100 p-6 rounded-lg">
                <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Date 2/4/2022</h3>
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Property-ID 1</h3>

                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Images</h2>
                <p class="leading-relaxed text-base">a minor updaedto infrstruture ane whick keeys building healty.</p>
              </div>
            </div>
            image
            date
            Description
            </div>
          </div>
        </div>
      </section>
</x-admin-sidebar>
@endsection
