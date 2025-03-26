<?php

namespace App\Http\Controllers;

use App\Services\Interface\OrganizationService;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function __construct(private OrganizationService $organizationService) {}

    public function organization()
    {
        $organizations = $this->organizationService->getAllOrganizations();
        return view('pages.organization', compact('organizations'));
    }
}
