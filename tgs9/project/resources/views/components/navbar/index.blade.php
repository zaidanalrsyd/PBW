<nav class="bg-zinc-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                <div class="shrink-0">
                    <img class="w-8 h-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company logo">
                    </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-navbar.link href="/">Home</x-navbar.-link>
                        <x-navbar.link href="/about">About</x-navbar.-link>
                        <x-navbar.link href="/contact">Contact</x-navbar.-link>
                        <x-navbar.link href="/gallery">Gallery</x-navbar.-link>
                        <x-navbar.link href="/users">Users</x-navbar.-link>
                    </div>
                </div>
            </div> 

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-zinc-800 p-2 text-blue-600 hover:bg-zinc-700 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

     <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-navbar.dropdown-item href="/">Home</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="/about">About</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="/contact">Contact</x-navbar.dropdown-Item>
            <x-navbar.dropdown-item href="/gallery">Gallery</x-navbar.dropdown-item>
            <x-navbar.dropdown-item href="/users">Users</x-navbar.dropdown-item>
        </div>
    </div>
</nav>