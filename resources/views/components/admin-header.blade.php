
<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="mobile-button">
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="">
            <img class="hidden lg:block h-8 w-auto" src="">
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-black hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-red-500 hover:font-bold text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Listings</a>

              <a href="#" class="text-black hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Book Appointments</a>
              <a href="#" class="text-black hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
              <a href="{{ route('complaint') }}" class="text-black hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>
          </div>
        </div>

        @if (auth()->user())
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                <div>
                    <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                </div>

                </div>
            </div>
        @else
            <a href="{{ route('register') }}" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hidden md:inline">Register</a>
            <a href="{{ route('login') }}" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium hidden md:inline">Login</a>
        @endif
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-black hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-red-500 hover:bg-red-700 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Listings</a>

        <a href="#" class="text-black hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Book Appointment</a>

        <a href="#" class="text-black hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>

        <a href="#" class="text-black hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>

      </div>
    </div>
  </nav>


