<?php

namespace App\Filament\Resources\ChannelidResource\Pages;

use App\Filament\Resources\ChannelidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChannelids extends ListRecords
{
    protected static string $resource = ChannelidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
