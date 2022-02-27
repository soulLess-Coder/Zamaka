<div class="absolute right-0 z-20 hidden w-40 py-2 mt-3 text-gray-500 bg-white border-2 rounded shadow-md menu md:mt-6 md:w-1/3 animated faster fadeIn" id="drop-down">
    <!-- item -->
    <a class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="{{ route('userprofile') }}">
        <i class="mr-1 text-xs fad fa-user-edit"></i>
        My Profile
    </a>
    <!-- end item -->

    <!-- item -->
    <a class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="{{ route('resetpass') }}">
        <i class="mr-1 text-xs fad fa-inbox-in"></i>
        Change Password
    </a>
    <!-- end item -->
    <hr>

    <a class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="{{ route('request') }}">
        <i class="mr-1 text-xs fad fa-user-edit"></i>
        Maintanance
    </a>
    <!-- item -->
    <a class="block px-4 py-2 text-sm font-medium tracking-wide capitalize transition-all duration-300 ease-in-out bg-white hover:bg-gray-200 hover:text-gray-900" href="{{ route('listings') }}">
        <i class="mr-1 text-xs fad fa-user-times"></i>
        <h3 class="text-red-400">Log Out </h3>
    </a>
    <!-- end item -->
</div>


