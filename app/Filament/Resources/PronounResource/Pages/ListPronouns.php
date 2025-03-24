<?php

namespace App\Filament\Resources\PronounResource\Pages;

use App\Filament\Resources\PronounResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPronouns extends ListRecords
{
    protected static string $resource = PronounResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
