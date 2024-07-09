<x-layouts.book-manager>
    <x-slot:title>
        帰社日スケジュール
    </x-slot:title>
    <ul>
        <li>{{ $schedule->plan }}</li>
    </ul>
    <a href="{{ route('schedule.index')}}">戻る</a>