<?php

namespace App\Filament\Pages;

use App\Filament\Resources\AutreFormations\Widgets\AutreFormationWidget;
use App\Filament\Resources\Filieres\Widgets\FiliereWidget;
use App\Filament\Resources\Formations\Widgets\FormationWidget;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
   public function getColumns(): int | array
{
    return [
        'md' => 3,
        'xl' => 4,
    ];
}
    protected function getHeaderWidgets(): array
            {
                return [
                    FiliereWidget::class,
                    FormationWidget::class,
                    AutreFormationWidget::class,
                ];
            }

            
}
