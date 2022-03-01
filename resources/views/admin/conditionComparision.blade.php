@extends('layouts.admin')

@section('content')
<x-admin-sidebar>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto ">
          <div class="flex flex-wrap w-full mb-20">
            <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
              <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Compare Property</h1>
              <div class="w-20 h-1 bg-indigo-500 rounded"></div>
            </div>
            <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">Compare your properties to have an idea</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 xl:w-1/4 md:w-1/2">
              <div class="p-6 bg-gray-100 rounded-lg">
                <img class="object-cover object-center w-full h-40 mb-6 rounded" src="https://dummyimage.com/720x400" alt="content">
                <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">Date 2/2/2022</h3>
                <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">Property-ID 1</h3>
                <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Images</h2>
                <p class="text-base leading-relaxed">a minor updaedto infrstruture ane whick keeys building healty.</p>
              </div>

            </div>
            <div class="p-4 xl:w-1/4 md:w-1/2">
              <div class="p-6 bg-gray-100 rounded-lg">
                <img class="object-cover object-center w-full h-40 mb-6 rounded" src="https://dummyimage.com/721x401" alt="content">
                <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">Date 2/4/2022</h3>
        <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font">Property-ID 1</h3>

                <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">Images</h2>
                <p class="text-base leading-relaxed">a minor updaedto infrstruture ane whick keeys building healty.</p>
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
