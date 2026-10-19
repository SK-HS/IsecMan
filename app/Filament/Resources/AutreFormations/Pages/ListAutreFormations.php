<?php

namespace App\Filament\Resources\AutreFormations\Pages;

use App\Filament\Resources\AutreFormations\AutreFormationResource;
use App\Filament\Resources\AutreFormations\Widgets\AutreFormationWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAutreFormations extends ListRecords
{
    protected static string $resource = AutreFormationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

      protected function getHeaderWidgets(): array
        {
            return [
                AutreFormationWidget::class,
            ];
        }
}
