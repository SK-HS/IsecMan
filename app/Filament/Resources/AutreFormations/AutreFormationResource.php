<?php

namespace App\Filament\Resources\AutreFormations;

use App\Filament\Resources\AutreFormations\Pages\CreateAutreFormation;
use App\Filament\Resources\AutreFormations\Pages\EditAutreFormation;
use App\Filament\Resources\AutreFormations\Pages\ListAutreFormations;
use App\Filament\Resources\AutreFormations\Pages\ViewAutreFormation;
use App\Filament\Resources\AutreFormations\Schemas\AutreFormationForm;
use App\Filament\Resources\AutreFormations\Schemas\AutreFormationInfolist;
use App\Filament\Resources\AutreFormations\Tables\AutreFormationsTable;
use App\Models\AutreFormation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AutreFormationResource extends Resource
{
    protected static ?string $model = AutreFormation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Autre Formation';

    public static function form(Schema $schema): Schema
    {
        return AutreFormationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AutreFormationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AutreFormationsTable::configure($table);
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
            'index' => ListAutreFormations::route('/'),
            'create' => CreateAutreFormation::route('/create'),
            'view' => ViewAutreFormation::route('/{record}'),
            'edit' => EditAutreFormation::route('/{record}/edit'),
        ];
    }
}
