<?php

namespace App\Filament\Resources\Niveaux;

use App\Filament\Resources\Niveaux\Pages\CreateNiveau;
use App\Filament\Resources\Niveaux\Pages\EditNiveau;
use App\Filament\Resources\Niveaux\Pages\ListNiveaux;
use App\Filament\Resources\Niveaux\Pages\ViewNiveau;
use App\Filament\Resources\Niveaux\Schemas\NiveauForm;
use App\Filament\Resources\Niveaux\Schemas\NiveauInfolist;
use App\Filament\Resources\Niveaux\Tables\NiveauxTable;
use App\Models\Niveau;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NiveauResource extends Resource
{
    protected static ?string $model = Niveau::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Niveaux';

    public static function form(Schema $schema): Schema
    {
        return NiveauForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NiveauInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NiveauxTable::configure($table);
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
            'index' => ListNiveaux::route('/'),
            'create' => CreateNiveau::route('/create'),
            'view' => ViewNiveau::route('/{record}'),
            'edit' => EditNiveau::route('/{record}/edit'),
        ];
    }
}
