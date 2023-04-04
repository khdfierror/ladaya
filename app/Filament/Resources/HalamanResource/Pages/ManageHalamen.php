<?php

namespace App\Filament\Resources\HalamanResource\Pages;

use App\Filament\Resources\HalamanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHalamen extends ManageRecords
{
    protected static string $resource = HalamanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
