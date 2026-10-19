<?php

namespace App\Filament\Resources\AutreFormations\Widgets;

use App\Models\AutreFormation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AutreFormationWidget extends StatsOverviewWidget
{
    protected int | string | array $columnSpan = 1;
    
    protected function getStats(): array
    {
        
        $nombreform = AutreFormation::query()
                             ->count();
        return [
            Stat::make('AUTRE FORMATIONS', $nombreform)
            ->description('En Hausse')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    
    }
}
