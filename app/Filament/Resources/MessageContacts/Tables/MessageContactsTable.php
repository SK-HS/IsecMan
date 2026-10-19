<?php

namespace App\Filament\Resources\MessageContacts\Tables;

use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class MessageContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('telephone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('statut')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
                 BulkAction::make('TraitementMessage')
                        ->label('Traitement de la requête')
                        ->icon('heroicon-m-phone')  
                        ->color('success')
                        ->modalHeading('Traiter les requêtes')
                        ->modalDescription('Êtes-vous sûr de vouloir traiter les requêtes sélectionnées ?')
                        ->requiresConfirmation()
                        ->modalWidth(Width::ExtraLarge)
                        
                        ->form([
                        Select::make('statut')
                            ->options([
                                'EN COURS' => 'EN COURS',
                                'TRAITE' => 'TRAITE',
                                'VALIDEE' => 'VALIDEE',
                                'REJETEE' => 'REJETEE',
                            ])
                            ->default('EN COURS'),
                        DateTimePicker::make('date')
                            ->label('Date')
                            ->default(now()),
                        TextInput::make('action'),
                        Textarea::make('description')
                            ->columnSpanFull(),
                        Hidden::make('user_id')
                            ->default(fn() => Auth::id()),

                        
                        ])
                        
                        ->action(function (Collection $records, array $data) {
                            try {
                                foreach ($records as $record) {
                                    
                                    $record->traitement_message_contact($data);
                                }

                                Notification::make()
                                    ->title('requête(s) affectée(s)')
                                    ->body(count($records) . ' requête(s) traitée(s) avec succès.')
                                    ->success()
                                    ->send();

                            } catch (\Exception $e) {
                                Notification::make()
                                    ->title("Erreur lors du traiement")
                                    ->body($e->getMessage())
                                    ->danger()
                                    ->send();
                            }
                        })
                        //  DeleteBulkAction::make()
                         ->deselectRecordsAfterCompletion(),
            ]);
    }
}
