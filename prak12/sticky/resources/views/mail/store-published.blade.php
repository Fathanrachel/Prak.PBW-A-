<x-mail::message>
# Store Published

The store you are registed ({{ $store->name }}) has been published.

<x-mail::button url="{{ route('stores.show', $store) }}">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>