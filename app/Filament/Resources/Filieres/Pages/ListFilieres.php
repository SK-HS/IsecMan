<?php

namespace App\Filament\Resources\Filieres\Pages;

use App\Filament\Resources\Filieres\FiliereResource;
use App\Filament\Resources\Filieres\Widgets\FiliereWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFilieres extends ListRecords
{
    protected static string $resource = FiliereResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

     protected function getHeaderWidgets(): array
        {
            return [
                FiliereWidget::class,
            ];
        }
}
