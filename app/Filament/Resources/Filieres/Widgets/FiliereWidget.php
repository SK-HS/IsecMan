<?php

namespace App\Filament\Resources\Filieres\Widgets;

use App\Models\Filiere;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FiliereWidget extends StatsOverviewWidget
{
  protected int | string | array $columnSpan = 1;

    protected function getStats(): array
    {
        $nombrefiliere = Filiere::query()
                             ->count();
        return [
            Stat::make('FILIERES', $nombrefiliere)
            ->description('En Hausse')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
        ];
    }
}
