<?php

namespace Mehdirmt\Common\Observers;

use Illuminate\Database\Eloquent\Model;

class TokenObserver
{
    /**
     * Handle the Model "created" event.
     */
    public function created(Model $model): void
    {
        //
    }

    /**
     * Handle the Model "updated" event.
     */
    public function updated(Model $model): void
    {
        //
    }

    /**
     * Handle the Model "deleted" event.
     */
    public function deleted(Model $model): void
    {
        //
    }

    /**
     * Handle the Model "restored" event.
     */
    public function restored(Model $model): void
    {
        //
    }

    /**
     * Handle the Model "force deleted" event.
     */
    public function forceDeleted(Model $model): void
    {
        //
    }
}
