<?php

namespace App\Filament\Resources\Formations\Widgets;

use App\Models\Formation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FormationWidget extends StatsOverviewWidget
{
    protected int | string | array $columnSpan = 1;

    protected function getStats(): array
    {
        $nombreformation = Formation::query()
                             ->count();
        return [
            Stat::make('FORMATIONS', $nombreformation)
            ->description('En Hausse')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    
    }
}
