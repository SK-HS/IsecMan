<?php

namespace App\Filament\Resources\NosAtouts\Pages;

use App\Filament\Resources\NosAtouts\NosAtoutResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNosAtout extends EditRecord
{
    protected static string $resource = NosAtoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
