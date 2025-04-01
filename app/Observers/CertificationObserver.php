<?php

namespace App\Observers;

use App\Models\Certification;
use Illuminate\Support\Facades\Storage;

class CertificationObserver
{
    /**
     * Handle the Certification "created" event.
     */
    public function created(Certification $certification): void
    {
        //
    }

    /**
     * Handle the Certification "updated" event.
     */
    public function updated(Certification $certification): void
    {
        //
    }

    /**
     * Handle the Certification "deleted" event.
     */
    public function deleted(Certification $certification): void
    {
        if (Storage::disk('public')->exists($certification->image)) {
            Storage::disk('public')->delete($certification->image);
        }
    }

    /**
     * Handle the Certification "restored" event.
     */
    public function restored(Certification $certification): void
    {
        //
    }

    /**
     * Handle the Certification "force deleted" event.
     */
    public function forceDeleted(Certification $certification): void
    {
        //
    }
}
