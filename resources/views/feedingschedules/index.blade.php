<x-base-layout>
    <h1>Feeding Schedules</h1>
    <ul>
        @foreach ($feedingSchedules as $feedingSchedule)
            <li>
                <a href="{{ route('feeding_schedules.show', $feedingSchedule->id) }}">{{ $feedingSchedule->name }}</a>
            </li>
        @endforeach
    </ul>
</x-base-layout>