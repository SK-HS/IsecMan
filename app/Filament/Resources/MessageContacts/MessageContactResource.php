<?php

namespace App\Filament\Resources\MessageContacts;

use App\Filament\Resources\MessageContacts\Pages\CreateMessageContact;
use App\Filament\Resources\MessageContacts\Pages\EditMessageContact;
use App\Filament\Resources\MessageContacts\Pages\ListMessageContacts;
use App\Filament\Resources\MessageContacts\Pages\ViewMessageContact;
use App\Filament\Resources\MessageContacts\Schemas\MessageContactForm;
use App\Filament\Resources\MessageContacts\Schemas\MessageContactInfolist;
use App\Filament\Resources\MessageContacts\Tables\MessageContactsTable;
use App\Models\MessageContact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MessageContactResource extends Resource
{
    protected static ?string $model = MessageContact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Message Contact';

    public static function form(Schema $schema): Schema
    {
        return MessageContactForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MessageContactInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MessageContactsTable::configure($table);
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
            'index' => ListMessageContacts::route('/'),
            'create' => CreateMessageContact::route('/create'),
            'view' => ViewMessageContact::route('/{record}'),
            'edit' => EditMessageContact::route('/{record}/edit'),
        ];
    }
}
