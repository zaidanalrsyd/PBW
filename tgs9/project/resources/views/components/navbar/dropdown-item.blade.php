<a
    {{ $attributes }}
    class="{{ request()->fullUrlIs($href) ?'bg-zinc-800 text-white' : 'text-blue-600 hover:bg-zinc-700 hover:text-blue-600' }} block rounded-md px-3 py-2 text-xm  font-medium ">
    {{ $slot }}
</a>
