<?php

namespace App\Filament\Resources\MessageContacts\Pages;

use App\Filament\Resources\MessageContacts\MessageContactResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMessageContact extends EditRecord
{
    protected static string $resource = MessageContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
