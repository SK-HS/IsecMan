<?php

namespace App\Filament\Resources\NosAtouts;

use App\Filament\Resources\NosAtouts\Pages\CreateNosAtout;
use App\Filament\Resources\NosAtouts\Pages\EditNosAtout;
use App\Filament\Resources\NosAtouts\Pages\ListNosAtouts;
use App\Filament\Resources\NosAtouts\Pages\ViewNosAtout;
use App\Filament\Resources\NosAtouts\Schemas\NosAtoutForm;
use App\Filament\Resources\NosAtouts\Schemas\NosAtoutInfolist;
use App\Filament\Resources\NosAtouts\Tables\NosAtoutsTable;
use App\Models\NosAtout;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NosAtoutResource extends Resource
{
    protected static ?string $model = NosAtout::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Atouts';

    public static function form(Schema $schema): Schema
    {
        return NosAtoutForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NosAtoutInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NosAtoutsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNosAtouts::route('/'),
            'create' => CreateNosAtout::route('/create'),
            'view' => ViewNosAtout::route('/{record}'),
            'edit' => EditNosAtout::route('/{record}/edit'),
        ];
    }
}
