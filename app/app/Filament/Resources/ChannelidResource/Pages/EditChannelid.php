<?php

namespace App\Filament\Resources\ChannelidResource\Pages;

use App\Filament\Resources\ChannelidResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChannelid extends EditRecord
{
    protected static string $resource = ChannelidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
