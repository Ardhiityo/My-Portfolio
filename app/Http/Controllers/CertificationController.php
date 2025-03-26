<?php

namespace App\Http\Controllers;

use App\Services\Interface\CertificationService;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function __construct(private CertificationService $certificationService) {}

    public function certification()
    {
        $certifications = $this->certificationService->getAllCertifications();
        return view('pages.certification', compact('certifications'));
    }
}
