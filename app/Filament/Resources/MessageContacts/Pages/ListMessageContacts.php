<?php

namespace App\Filament\Resources\MessageContacts\Pages;

use App\Filament\Resources\MessageContacts\MessageContactResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMessageContacts extends ListRecords
{
    protected static string $resource = MessageContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
