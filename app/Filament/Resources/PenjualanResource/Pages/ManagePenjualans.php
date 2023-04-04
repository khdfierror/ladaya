<?php

namespace App\Filament\Resources\PenjualanResource\Pages;

use App\Filament\Resources\PenjualanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePenjualans extends ManageRecords
{
    protected static string $resource = PenjualanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
