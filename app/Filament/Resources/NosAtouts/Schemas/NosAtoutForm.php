<?php

namespace App\Filament\Resources\NosAtouts\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class NosAtoutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('cles'),
                TextInput::make('numero')
                    ->required(),
                TextInput::make('titre')
                    ->required(),
                Textarea::make('texte')
                    ->label('Description'),
                TextInput::make('delais'),
                Hidden::make('user_id')
                    ->default(fn () => Auth::id()),
            ]);
    }
}
