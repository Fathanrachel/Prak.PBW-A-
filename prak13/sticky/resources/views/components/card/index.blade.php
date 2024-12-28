<div {{ $attributes->merge([
    'class' => 'bg-zinc-900 shadow-sm border border-zinc-800 text-card-foreground rounded-lg p-6'
]) }}>
    {{ $slot }}
</div>