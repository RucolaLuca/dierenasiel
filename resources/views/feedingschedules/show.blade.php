<x-base-layout>
    <h1>Feeding Schedule: {{ $feedingSchedule->name }}</h1>
    <p>{{ $feedingSchedule->description }}</p>
    <h2>Animals Following This Schedule</h2>
    <ul>
        @foreach ($feedingSchedule->animals as $animal)
            <li>{{ $animal->name }} ({{ $animal->species->name }})</li>
        @endforeach
    </ul>
</x-base-layout>