<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('avatar')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->directory('profile/avatar'),
                Forms\Components\FileUpload::make('background_image')
                    ->image()
                    ->columnSpanFull()
                    ->directory('profile/background_image')
                    ->required(),
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('pronoun_id')
                    ->required()
                    ->relationship('pronoun', 'name'),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->limit(15)
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->limit(15)
                    ->searchable(),
                Tables\Columns\TextColumn::make('pronoun.name')
                    ->limit(15)
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->limit(15)
                    ->label('Email')
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->limit(15)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('avatar')
                    ->circular(),
                Tables\Columns\ImageColumn::make('background_image')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
