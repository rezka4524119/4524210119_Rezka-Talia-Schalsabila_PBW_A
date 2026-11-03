<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Seluruh buku di perpustakaan')
                ->descriptionIcon('heroicon-o-book-open')
                ->color('primary'),

            Stat::make('Total Authors', Author::count())
                ->description('Seluruh penulis terdaftar')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('info'),

            Stat::make('Available', Book::where('status', 'available')->count())
                ->description('Buku tersedia')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Borrowed', Book::where('status', 'borrowed')->count())
                ->description('Buku sedang dipinjam')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}