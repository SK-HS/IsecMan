<?php

namespace App\Filament\Resources\Filieres\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class FiliereForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titre')
                    ->required(),
                TextInput::make('option'),
                TextInput::make('niveau'),
                TextInput::make('montant'),
                Textarea::make('description')
                    ->label('Description'),
                FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('Filiere')
                    ->visibility('public')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->enableDownload()
                    ->enableOpen()
                    ->openable()
                    ->previewable(),
                Hidden::make('user_id')
                    ->default(fn () => Auth::id()),
            ]);
    }
}
