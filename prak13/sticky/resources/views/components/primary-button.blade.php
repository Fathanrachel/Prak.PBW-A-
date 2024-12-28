<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-4 bg-green-800 border border-transparent rounded-md font-medium tracking-tight text-sm text-black hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>