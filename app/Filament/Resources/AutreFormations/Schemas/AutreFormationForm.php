<?php

namespace App\Filament\Resources\AutreFormations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AutreFormationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numero')
                    ->required(),
                TextInput::make('titre')
                    ->required(),
                TextInput::make('sous_titre')
                    ->required(),
                Textarea::make('texte')
                    ->label('Description'),
                FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('Formation')
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
