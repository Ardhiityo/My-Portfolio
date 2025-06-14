<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\CurriculumVitae;
use Illuminate\Support\Facades\Storage;
use App\Services\Interface\CurriculumVitaeService;

class CurriculumVitaeRepository implements CurriculumVitaeService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getCV()
    {
        try {
            $user = User::first();
            $data = CurriculumVitae::where('user_id', $user->id)->latest()->firstOrFail();
            if (Storage::disk('public')->exists($data->cv)) {
                $file = Storage::disk('public')->path($data->cv);
                return response()->download($file, 'CV_Arya_Adhi_Prasetyo.pdf');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['cv' => 'Ups, file not found!']);
        }
    }
}
