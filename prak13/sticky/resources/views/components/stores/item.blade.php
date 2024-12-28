@use('App\Enums\StoreStatus')

<x-card class="flex flex-col">
    <div class="flex-1">
        <x-card.header>
            <x-card.title>{{$store->name}}</x-card.title>
            <x-card.description>
                Created at {{ $store->created_at->format('d F Y') }} 
                @if(!request()->routeIs('stores.mine'))
                    by {{ $store->user->name }}
                @endif
            </x-card.description>
        </x-card.header>
    
        <x-card.content>
            <section>
                <p class="mb-6">
                    {{ str($store->description)->limit() }}
                </p>
                <p class="text-zinc-400 text-sm">
                    {{ $store->products_count }} {{ str('products')->plural($store->products_count) }}
                </p>
            </section>
        </x-card.content>
    </div>

    <x-card.footer class="flex items-center justify-between">
        <x-badge>{{ $store->status }}</x-badge>

        @if(isset($isAdmin))
            @if($store->status === StoreStatus::PENDING)
            <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'modal-{{$store->id}}')">Approve</x-primary-button>
        
            <x-modal name="modal-{{ $store->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('stores.approve', $store) }}" class="p-6">
                        @csrf
                        @method('put')
                        <h2 class="tex-lg font-medium text-zinc-900">
                            {{ $store->name }}
                        </h2>
                        <p class="mt-1 text-sm text-zinc-600">
                            {{ $store->description }}
                        </p>
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                            <x-primary-button class="ms-3">
                                {{ __('Approve') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-modal>
            @endif
        @endif
    </x-card.footer>      
</x-card>