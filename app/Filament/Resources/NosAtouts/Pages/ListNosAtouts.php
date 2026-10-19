<?php

namespace App\Filament\Resources\NosAtouts\Pages;

use App\Filament\Resources\NosAtouts\NosAtoutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNosAtouts extends ListRecords
{
    protected static string $resource = NosAtoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
