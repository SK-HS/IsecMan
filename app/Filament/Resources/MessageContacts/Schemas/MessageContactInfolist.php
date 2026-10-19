<?php

namespace App\Filament\Resources\MessageContacts\Schemas;

use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\RepeatableEntry\TableColumn;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MessageContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nom'),
                TextEntry::make('telephone'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('subject')
                    ->placeholder('-'),
                TextEntry::make('message')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('statut'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),

                Section::make('Historique des Actions')
                    ->columnSpanFull()
                    ->collapsed() // ← Fermé par défaut, s'ouvre au clic
                    ->schema([
                        RepeatableEntry::make('action_message_contact')
                            ->label(false)
                            ->columnSpanFull()
                            ->table([
                                TableColumn::make('DATE'),
                                TableColumn::make('STATUT'),
                                TableColumn::make('OPÉRATION'),
                                TableColumn::make('DESCRIPTION'),
                                TableColumn::make('OPÉRATEUR'),
                            ])
                            ->schema([
                                TextEntry::make('date')
                                    ->label('Date')
                                    ->dateTime('d/m/Y à H:i:s'),

                                TextEntry::make('statut')
                                    ->label('Statut')
                                    ->badge()
                                    ->color(fn ($state) => match ($state) {
                                        'EN COURS' => 'info',
                                        'TRAITE'   => 'primary',
                                        'VALIDEE'  => 'success',
                                        'REJETEE'  => 'danger',
                                        default    => 'gray',
                                    }),

                                TextEntry::make('action')
                                    ->label('Action')
                                    ->placeholder('-'),
                                TextEntry::make('description')
                                    ->label('Description')
                                    ->placeholder('-'),

                                TextEntry::make('user.name')
                                    ->label('Opérateur')
                                    ->placeholder('-'),
                            ])
                            ->columns(4),
                    ]),
            ]);
    }
}
