<?php

namespace App\Observers;

use App\Models\Store;

class StoreObserver
{
    public function creating(Store $store)
    {
        $store->slug = str()->slug($store->name);
    }
    public function created() {}
}
