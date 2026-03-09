<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
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
                    ->rows(4)
                    ->required(),

                FileUpload::make('image')
    ->disk('public')
    ->directory('projects')
    ->image()
    ->imagePreviewHeight('150')
    ->nullable(),

                TextInput::make('tech_stack')
                    ->required(),

                TextInput::make('github_url')
                    ->nullable(),

                TextInput::make('demo_url')
                    ->nullable(),
            ]);
    }
}