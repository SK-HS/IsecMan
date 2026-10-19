<?php

namespace App\Filament\Resources\NosAtouts\Pages;

use App\Filament\Resources\NosAtouts\NosAtoutResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNosAtout extends ViewRecord
{
    protected static string $resource = NosAtoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
