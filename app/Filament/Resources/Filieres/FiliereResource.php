<?php

namespace App\Filament\Resources\Filieres;

use App\Filament\Resources\Filieres\Pages\CreateFiliere;
use App\Filament\Resources\Filieres\Pages\EditFiliere;
use App\Filament\Resources\Filieres\Pages\ListFilieres;
use App\Filament\Resources\Filieres\Pages\ViewFiliere;
use App\Filament\Resources\Filieres\Schemas\FiliereForm;
use App\Filament\Resources\Filieres\Schemas\FiliereInfolist;
use App\Filament\Resources\Filieres\Tables\FilieresTable;
use App\Models\Filiere;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FiliereResource extends Resource
{
    protected static ?string $model = Filiere::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Filieres';

    public static function form(Schema $schema): Schema
    {
        return FiliereForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FiliereInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FilieresTable::configure($table);
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
            'index' => ListFilieres::route('/'),
            'create' => CreateFiliere::route('/create'),
            'view' => ViewFiliere::route('/{record}'),
            'edit' => EditFiliere::route('/{record}/edit'),
        ];
    }
}
