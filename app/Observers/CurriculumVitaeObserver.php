<?php

namespace App\Observers;

use App\Models\CurriculumVitae;
use Illuminate\Support\Facades\Storage;

class CurriculumVitaeObserver
{
    /**
     * Handle the CurriculumVitae "created" event.
     */
    public function created(CurriculumVitae $curriculumVitae): void
    {
        //
    }

    /**
     * Handle the CurriculumVitae "updated" event.
     */
    public function updated(CurriculumVitae $curriculumVitae): void
    {
        //
    }

    /**
     * Handle the CurriculumVitae "deleted" event.
     */
    public function deleted(CurriculumVitae $curriculumVitae): void
    {
        if (Storage::disk('public')->exists($curriculumVitae->cv)) {
            Storage::disk('public')->delete($curriculumVitae->cv);
        }
    }

    /**
     * Handle the CurriculumVitae "restored" event.
     */
    public function restored(CurriculumVitae $curriculumVitae): void
    {
        //
    }

    /**
     * Handle the CurriculumVitae "force deleted" event.
     */
    public function forceDeleted(CurriculumVitae $curriculumVitae): void
    {
        //
    }
}
