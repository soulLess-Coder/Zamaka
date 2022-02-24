
<nav class="bg-white">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="mobile-button">
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="items-center justify-self-start sm:flex sm:flex-row gap-x-10"> <!--Logo-->
            {{-- <img class="h-16 w-14 sm:w-20 sm:h-24" src={{asset('images/logo.svg')}} alt="logo"> --}}
            <h1 class="mr-4 text-xl text-extrabold">Zamaka</h1>
        </div>

        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex items-center flex-shrink-0">
            <img class="block w-auto h-8 lg:hidden" src="">
            <img class="hidden w-auto h-8 lg:block" src="">
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-black hover:bg-gray-700 hover:text-white" -->
              <a href="{{ route('listings') }}" class="px-3 py-2 text-sm font-medium text-white bg-red-500 rounded-md hover:font-bold" aria-current="page">Listings</a>

              <a href="" class="px-3 py-2 text-sm font-medium text-black rounded-md hover:bg-red-500 hover:text-white">Book Appointments</a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-black rounded-md hover:bg-red-500 hover:text-white">About Us</a>
              <a href="{{ route('complaint') }}" class="px-3 py-2 text-sm font-medium text-black rounded-md hover:bg-red-500 hover:text-white">Contact</a>
            </div>
          </div>
        </div>
        <x-inputs.search-bar/>
        @if (auth()->user())
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                </button>

                <!-- Profile dropdown -->

                <!-- <div class="relative ml-3">
                <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                </div> -->

                <!--
                    Dropdown menu, show/hide based on menu state.

                    Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                {{-- <div class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div> --}}
                </div>
            </div>
        @else
            <a href="{{ route('register') }}" class="hidden px-3 py-2 text-sm font-medium text-black rounded-md hover:bg-gray-700 hover:text-white md:inline">Register</a>
            <a href="{{ route('login') }}" class="hidden px-3 py-2 text-sm font-medium text-black rounded-md hover:bg-gray-700 hover:text-white md:inline">Login</a>
            <x-user-profile.avatar/>

        @endif
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-black hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-red-500 rounded-md hover:bg-red-700" aria-current="page">Listings</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-black rounded-md hover:bg-red-500 hover:text-white">Book Appointment</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-black rounded-md hover:bg-red-500 hover:text-white">About Us</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-black rounded-md hover:bg-red-500 hover:text-white">Contact Us</a>

      </div>
    </div>
</nav>



