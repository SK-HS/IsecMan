<?php

namespace App\Filament\Resources\NosAtouts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NosAtoutInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('cles')
                    ->placeholder('-'),
                TextEntry::make('numero'),
                TextEntry::make('titre'),
                TextEntry::make('texte')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('delais')
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
