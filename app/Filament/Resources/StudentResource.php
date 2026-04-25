<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Models\Student;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    protected static string|\UnitEnum|null $navigationGroup = 'Applications';
    protected static ?string $navigationLabel = 'Students';
    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('full_name')->required()->maxLength(255)->columnSpanFull(),
            TextInput::make('age')->numeric()->minValue(5)->maxValue(35)->required(),
            TextInput::make('school')->required()->maxLength(255),
            TextInput::make('class_grade')->required()->maxLength(100),
            TextInput::make('phone')->tel()->maxLength(20),
            TextInput::make('email')->email()->required()->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->searchDebounce('500ms')
            ->searchPlaceholder('Search students...')
            ->columns([
                TextColumn::make('full_name')->searchable()->sortable()->weight('semibold'),
                TextColumn::make('age')->sortable()->alignCenter(),
                TextColumn::make('school')->searchable()->limit(30),
                TextColumn::make('class_grade')->searchable(),
                TextColumn::make('phone')->copyable(),
                TextColumn::make('email')->searchable()->copyable(),
                TextColumn::make('created_at')->dateTime('d M Y')->sortable()->toggleable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('recent')
                    ->query(fn (Builder $query) => $query->whereMonth('created_at', now()->month)),
            ])
            ->recordActions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}