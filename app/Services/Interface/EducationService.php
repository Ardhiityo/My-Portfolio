<?php

namespace App\Services\Interface;

interface EducationService
{
    public function getEducations();
    public function getLatestEducation();
    public function getTotalEducations();
    public function getAllEducations();
}
