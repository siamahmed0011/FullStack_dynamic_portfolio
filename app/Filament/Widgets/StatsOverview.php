<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', \App\Models\Project::count())
                ->description('Showcased on your portfolio')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->color('primary'),
            Stat::make('Total Skills', \App\Models\Skill::count())
                ->description('Skills & technologies listed')
                ->descriptionIcon('heroicon-m-bolt')
                ->color('success'),
            Stat::make('Total Achievements', \App\Models\Achievement::count())
                ->description('Awards & certificates earned')
                ->descriptionIcon('heroicon-m-trophy')
                ->color('warning'),
            Stat::make('Total Messages', \App\Models\Message::count())
                ->description('Contact forms received')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('info'),
        ];
    }
}
