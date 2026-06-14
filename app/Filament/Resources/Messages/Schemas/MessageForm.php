<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Sender Name')
                    ->disabled(),

                TextInput::make('email')
                    ->label('Sender Email')
                    ->disabled(),

                TextInput::make('subject')
                    ->label('Subject')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Message Content')
                    ->rows(6)
                    ->disabled()
                    ->columnSpanFull(),
            ]);
    }
}
