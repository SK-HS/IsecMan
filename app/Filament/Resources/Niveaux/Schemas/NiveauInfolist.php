<?php

namespace App\Filament\Resources\Niveaux\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NiveauInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('cles')
                    ->placeholder('-'),
                TextEntry::make('code'),
                TextEntry::make('titre'),
                TextEntry::make('prix')
                    ->numeric(),
                TextEntry::make('condition')
                    ->placeholder('-'),
                TextEntry::make('user.name')
                    ->label('Utilisateur'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
