<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
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

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    protected static string|\UnitEnum|null $navigationGroup = 'Applications';
    protected static ?string $navigationLabel = 'Partners';
    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('full_name')->required()->maxLength(255)->columnSpanFull(),
            TextInput::make('organization_role')->required()->maxLength(255)->columnSpanFull(),
            TextInput::make('email')->email()->required()->maxLength(255),
            TextInput::make('phone')->tel()->maxLength(20),
            TextInput::make('interest_area')->maxLength(255)->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->searchDebounce('500ms')
            ->searchPlaceholder('Search partners...')
            ->columns([
                TextColumn::make('full_name')->searchable()->sortable()->weight('semibold'),
                TextColumn::make('organization_role')->searchable()->limit(35),
                TextColumn::make('email')->searchable()->copyable(),
                TextColumn::make('phone')->copyable(),
                TextColumn::make('interest_area')->limit(40)->toggleable(),
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
            'index' => Pages\ListPartners::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}