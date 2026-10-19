<?php

namespace App\Filament\Resources\AutreFormations\Pages;

use App\Filament\Resources\AutreFormations\AutreFormationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAutreFormation extends EditRecord
{
    protected static string $resource = AutreFormationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
