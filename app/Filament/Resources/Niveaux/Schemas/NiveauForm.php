<?php

namespace App\Filament\Resources\Niveaux\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class NiveauForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('cles'),
                TextInput::make('code')
                    ->required(),
                TextInput::make('titre')
                    ->required(),
                TextInput::make('prix')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('condition'),
                Hidden::make('user_id')
                    ->default(fn () => Auth::id()),
            ]);
    }
}
