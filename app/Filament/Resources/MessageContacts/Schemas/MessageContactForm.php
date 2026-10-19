<?php

namespace App\Filament\Resources\MessageContacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MessageContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nom')
                    ->required(),
                TextInput::make('telephone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('subject'),
                Textarea::make('message')
                    ->label("Message"),
                // TextInput::make('statut')
                //     ->required()
                //     ->default('NOUVEAU'),
            ]);
    }
}
