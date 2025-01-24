<x-base-layout>
    <h1 style="text-align: center">Feeding Schedules</h1>
    <div class="feeding-schedules-container">
        @foreach ($feedingschedules as $feedingschedule)
            <div class="feeding-schedule-item">
                <h2><a href="{{ route('feedingschedules.show', $feedingschedule->id) }}">{{ $feedingschedule->name }}</a></h2>
                <p>{{ $feedingschedule->description }}</p>
            </div>
        @endforeach
    </div>
</x-base-layout>