@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full border-zinc-800 focus:outline-none rounded-md shadow-sm bg-zinc-950 text-black']) }}>