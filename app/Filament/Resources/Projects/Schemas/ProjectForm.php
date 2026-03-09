<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('tech_stack')
                    ->default(null),
                TextInput::make('github_url')
                    ->url()
                    ->default(null),
                TextInput::make('demo_url')
                    ->url()
                    ->default(null),
            ]);
    }
}
