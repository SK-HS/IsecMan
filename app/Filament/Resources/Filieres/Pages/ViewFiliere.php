<?php

namespace App\Filament\Resources\Filieres\Pages;

use App\Filament\Resources\Filieres\FiliereResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFiliere extends ViewRecord
{
    protected static string $resource = FiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
