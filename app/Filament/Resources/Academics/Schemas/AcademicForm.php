<?php

namespace App\Filament\Resources\Academics\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AcademicForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree')
                    ->required(),

                TextInput::make('institution')
                    ->required(),

                TextInput::make('year')
                    ->required(),

                TextInput::make('result')
                    ->required(),
            ]);
    }
}