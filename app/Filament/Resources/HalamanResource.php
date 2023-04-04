<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HalamanResource\Pages;
use App\Filament\Resources\HalamanResource\RelationManagers;
use App\Models\Halaman;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HalamanResource extends Resource
{
    protected static ?string $model = Halaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Halaman';

    public static function getPluralModelLabel(): string
    {
        return static::$navigationLabel;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(255),
                Forms\Components\RichEditor::make('konten')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('konten'),
                Tables\Columns\TextColumn::make('gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageHalamen::route('/'),
        ];
    }    
}
