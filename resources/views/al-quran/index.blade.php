@extends('layouts')

@section('content')
    <div class="page page-alquran-index">
        <div class="text-normal font-semibold text-gray-700">
            Last read
        </div>
        <div class="my-4">
            <div class="gap-1 wrapper-last-read-surah">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="pe-2">
                        <div class="border border-gray-300 rounded-lg p-4">
                            <div class="text-sm text-gray-500">Surah Al-Fatihah</div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="my-4">
            <div class="wrapper-navigation-alquran">
                <div class="px-2 py-2 border border-gray-300 rounded-lg">
                    <div class="grid grid-cols-4 gap-4">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="border px-2 py-1 rounded-lg border-gray-300">
                                <div class="text-normal font-normal text-sm text-gray-500">
                                    Surah
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="mb-4 mt-8">
                <div class="wrapper-list-surah">
                    <div class="flex justify-between items-center">
                        <div class="flex justify-star gap-4 items-center">
                            <div
                                class="w-12 h-12 border border-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold">
                                1
                            </div>
                            <div class="flex flex-col">
                                <div class="text-sm font-semibold text-gray-700">
                                    Al-Fatihah
                                </div>
                                <div class="text-xs font-normal text-gray-500">
                                    <span>7 Verses</span> | <span>Meccan</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-normal font-semibold text-gray-700">
                            Ayat
                        </div>
                    </div>
                    <hr class="my-4 border border-gray-300">
                    <div class="flex justify-between items-center">
                        <div class="flex justify-star gap-4 items-center">
                            <div
                                class="w-12 h-12 border border-gray-300 rounded-full flex items-center justify-center text-gray-500 font-bold">
                                1
                            </div>
                            <div class="flex flex-col">
                                <div class="text-sm font-semibold text-gray-700">
                                    Al-Fatihah
                                </div>
                                <div class="text-xs font-normal text-gray-500">
                                    <span>7 Verses</span> | <span>Meccan</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-normal font-semibold text-gray-700">
                            Ayat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
