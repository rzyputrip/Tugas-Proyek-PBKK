<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use Filament\View\LegacyComponents\Widget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    // protected static string $view = 'filament.resource.post-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('All Product', Product::all()->count())
            ->description('All Product')
        ];
    }

}
