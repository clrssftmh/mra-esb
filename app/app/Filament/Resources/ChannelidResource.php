<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChannelidResource\Pages;
use App\Filament\Resources\ChannelidResource\RelationManagers;
use App\Models\ChannelId;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;



class ChannelidResource extends Resource
{
    protected static ?string $model = ChannelId::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('channel_id')->required()->unique(ignoreRecord: true)->maxLength(50),
                TextInput::make('channel_name')->nullable(),
                RichEditor::make('channel_desc')->nullable()->columnSpanFull(),
                FileUpload::make('image')->image()->directory('posts/thumbnails'),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('channel_id'),
                TextColumn::make('channel_name')->sortable()->searchable(),
                TextColumn::make('channel_desc')->wrap()->words(5),


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
            'index' => Pages\ListChannelids::route('/'),
            'create' => Pages\CreateChannelid::route('/create'),
            'edit' => Pages\EditChannelid::route('/{record}/edit'),
        ];
    }
}
