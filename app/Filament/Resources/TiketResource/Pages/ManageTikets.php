<?php

namespace App\Filament\Resources\TiketResource\Pages;

use App\Filament\Resources\TiketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTikets extends ManageRecords
{
    protected static string $resource = TiketResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
