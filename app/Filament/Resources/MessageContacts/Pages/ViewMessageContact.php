<?php

namespace App\Filament\Resources\MessageContacts\Pages;

use App\Filament\Resources\MessageContacts\MessageContactResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMessageContact extends ViewRecord
{
    protected static string $resource = MessageContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
