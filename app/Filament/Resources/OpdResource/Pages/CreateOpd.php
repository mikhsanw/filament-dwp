<?php

namespace App\Filament\Resources\OpdResource\Pages;

use App\Filament\Resources\OpdResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOpd extends CreateRecord
{
    protected static string $resource = OpdResource::class;
    protected static ?string $label = 'LPPK';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
