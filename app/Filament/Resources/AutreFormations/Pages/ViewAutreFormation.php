<?php

namespace App\Filament\Resources\AutreFormations\Pages;

use App\Filament\Resources\AutreFormations\AutreFormationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAutreFormation extends ViewRecord
{
    protected static string $resource = AutreFormationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
