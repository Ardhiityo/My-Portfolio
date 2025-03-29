<?php

namespace App\Services\Interface;

interface ProjectService
{
    public function getProjects();
    public function getTotalProjects();
    public function getAllProjects();
    public function getProjectsByQueryParam(string $queryParam);
}
