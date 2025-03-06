<?php

namespace App;

enum EndpointAPI: string
{
    case BASE_URL = 'https://api.myquran.com/';
    case VERSION = 'v2/';
    case QURAN = 'quran/';
    case SURAT = 'surat/';
    case HADITS = 'hadits/';
    case TOOLS = 'tools/';
    case DOA = 'doa/';
    case HUSNA = 'husna/';
    case CAL = 'cal/';

    public static function getBaseUrl(): string
    {
        return self::BASE_URL->value . self::VERSION->value;
    }

    public function getFullEndpoint(): string
    {
        return self::getBaseUrl() . $this->value;
    }
}
