<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestStudentsWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Latest Student Applications';

    public function table(Table $table): Table
    {
        return $table
            ->query(Student::query()->latest()->limit(5))
            ->columns([
                TextColumn::make('full_name')->label('Name')->weight('semibold')->searchable(),
                TextColumn::make('age')->label('Age')->alignCenter(),
                TextColumn::make('school')->label('School')->limit(30),
                TextColumn::make('class_grade')->label('Class'),
                TextColumn::make('phone')->label('Phone')->copyable(),
                TextColumn::make('email')->label('Email')->copyable()->limit(28),
                TextColumn::make('created_at')->label('Applied')->since()->color('gray'),
            ])
            ->paginated(false);
    }
}