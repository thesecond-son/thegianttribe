<?php

namespace App\Filament\Widgets;

use App\Models\Partner;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $studentCount = Student::count();
        $partnerCount = Partner::count();

        $studentsThisMonth = Student::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $partnersThisMonth = Partner::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        return [
            Stat::make('Student Applications', $studentCount)
                ->description($studentsThisMonth . ' joined this month')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Partner Applications', $partnerCount)
                ->description($partnersThisMonth . ' submitted this month')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('warning')
                ->icon('heroicon-o-user-group'), // ✅ FIXED comma

            Stat::make('Total Applications', $studentCount + $partnerCount)
                ->description('Students + Partners combined')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->icon('heroicon-o-chart-bar'),
        ];
    }
}