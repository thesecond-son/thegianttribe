<?php

namespace App\Filament\Widgets;

use App\Models\Partner;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPartnersWidget extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Latest Partner Applications';

    public function table(Table $table): Table
    {
        return $table
            ->query(Partner::query()->latest()->limit(5))
            ->columns([
                TextColumn::make('full_name')->label('Name')->weight('semibold')->searchable(),
                TextColumn::make('organization_role')->label('Organization / Role')->limit(35),
                TextColumn::make('email')->label('Email')->copyable()->limit(28),
                TextColumn::make('phone')->label('Phone')->copyable(),
                TextColumn::make('interest_area')->label('Interest Area')->limit(30)->color('gray'),
                TextColumn::make('created_at')->label('Submitted')->since()->color('gray'),
            ])
            ->paginated(false);
    }
}