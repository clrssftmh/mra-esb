<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceListResource\Pages;
use App\Filament\Resources\ServiceListResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\Select;

class ServiceListResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    // Schema::create('service_list', function (Blueprint $table) {
    //     $table->id();
    //     $table->text('service_id');
    //     $table->text('service_name');
    //     $table->text('service_desc');
    //     $table->text('service_postman');
    //     $table->foreignIdFor(User::class);
    //     $table->timestamps();


    // TextInput::make('title')
    //                 ->live()
    //                 ->required()->minLength(1)->maxLength(150)
    //                 ->afterStateUpdated(function(string $operation,$state, Forms\Set $set){ //$state
    //                     if($operation === 'edit'){
    //                         return;  //$operatition build in var for page admin (creat, edit)
    //                     }

    //                     $set('slug' , Str::slug($state));
    //                 }),
    //             TextInput::make('slug')->required()->unique(ignoreRecord: true)->maxLength(150),
    //             TextInput::make('text_color')->nullable(),
    //             TextInput::make('bg_color')->nullable(),


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Main Content')->schema([
                TextInput::make('channel_id')
            ->required()->minLength(1)->maxLength(150),
            TextInput::make('channel_name')
            ->required()->minLength(1)->maxLength(150),
            TextInput::make('service_id')
            ->required()->minLength(1)->maxLength(150),
            TextInput::make('service_name')
            ->required()->minLength(1)->maxLength(150),
            TextInput::make('service_desc')
            ->required()->minLength(1)->maxLength(150),
            TextInput::make('service_endpoint_esb')
            ->required()->minLength(1)->maxLength(150),
            Select::make('channel_id')
                            ->multiple()
                            ->relationship('channelid', 'channel_name')
                            ->searchable()
            ->native(true),
            TextInput::make('service_endpoint_msr')
            ->required()->minLength(1)->maxLength(150),
            Select::make('service_type')
            ->options([
                'microservice' => 'MICROSERVICE',
                'monolit' => 'MONOLITH',

            ])
            ->native(false)
            ->native(true),
            FileUpload::make('service_postman')
            ->directory('posts/json_files') // Specify the directory where JSON files will be stored
            ->acceptedFileTypes(['application/json']) // Accept only JSON files
            ->maxSize(10240) // Optional: Limit the maximum file size (in KB)
            ->required() // Make the field required
            ->label('Service Postman (JSON File)'), // Optional: Add a label,
            ])->columns(1),




        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('channel_id'),
                TextColumn::make('channel_name')->sortable()->searchable(),
                TextColumn::make('service_id')->sortable()->searchable(),
                TextColumn::make('service_name')->sortable()->searchable()
                // TextColumn::make('service_endpoint_esb')->sortable()->searchable(),
                // TextColumn::make('service_endpoint_msr')->sortable()->searchable(),

                // TextColumn::make('service_postman')->wrap()->words(5)->sortable()->searchable(),

                // TextColumn::make('service_postman')->sortable()->searchable()
            ->filters([
                //RIYANDO FRIENDESWAN GINTING MUNTHE	iijj
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                        Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ])
            ])
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
            'index' => Pages\ListServiceLists::route('/'),
            'create' => Pages\CreateServiceList::route('/create'),
            'edit' => Pages\EditServiceList::route('/{record}/edit'),
        ];
    }
}
