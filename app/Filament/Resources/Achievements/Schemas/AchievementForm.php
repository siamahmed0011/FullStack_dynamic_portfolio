<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),

                TextInput::make('issuer')
                    ->label('Issuer / Organization')
                    ->nullable(),

                DatePicker::make('date')
                    ->label('Date')
                    ->nullable(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->nullable(),

                TextInput::make('certificate_url')
                    ->label('Certificate / Proof URL')
                    ->url()
                    ->nullable(),
            ]);
    }
}
