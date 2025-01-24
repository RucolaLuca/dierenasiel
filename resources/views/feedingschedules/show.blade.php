<x-base-layout>
    <div class="feeding-schedule-show">
        <h1>Feeding Schedule: {{ $feedingschedule->name }}</h1>
        <p>{{ $feedingschedule->description }}</p>
        <h2>Animals Following This Schedule</h2>
        @if ($feedingschedule->animals->isEmpty())
        <p class="no-animals">No animals are following this schedule.</p>
        @else
        <ul>
            @foreach ($feedingschedule->animals as $animal)
            <p>ID: {{$animal->id }} - Name: {{ $animal->name }}</p>
            @endforeach
        </ul>
        @endif
        <a href="{{ url('/feedingschedules')}}">Return To Feeding Schedules</a>
        <p><b><a href="{{ route('feedingschedules.edit', $feedingschedule->id)}}" class="edit-link">Edit</a></b></p>
        <p><b><a href="{{ route('feedingschedules.delete', $feedingschedule->id)}}" class="delete-link">Delete</a></b></p>
        @if (session('error'))
            <p class="cannot-delete">{{ session('error')}}</p>
        @endif
    </div>
</x-base-layout>