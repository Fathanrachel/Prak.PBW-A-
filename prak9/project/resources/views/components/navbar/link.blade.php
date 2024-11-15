
<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-blue-600 text-white' : 'text-blue-200 hover:bg-blue-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>