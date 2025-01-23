<x-base-layout>
    <h1 style="text-align: center">Animals In Our Shelter</h1>
    <form action="{{ route('animals.search') }}" method="GET">
        <input type="text" name="search" placeholder="Search for animals" class="search-input">
        <button type="submit" class="search-button">Search</button>
        <a href="{{ route('animals.show') }}" class="reset-button">Reset</a>
        <a href="{{ route('animals.show', ['categorize' => 'species'])}}" class="reset-button">Categorize By Species</a>
    </form>
    @if(request('categorize') == 'species')
        <div class="species-container">
            @foreach ($species as $specie)
            <div class="species-column">
                <h2>{{ $specie->name }}</h2>
                @if (isset($animals[$specie->id]) && $animals[$specie->id]->count() > 0)
                    <ul class="animal-list">
                        @foreach ($animals[$specie->id] as $animal)
                        <li class="animal-item">
                            <div class="animal-details">
                                <p><b>Name:</b> {{$animal->name}}</p>
                                <p><b>Race:</b> {{$animal->race}}</p>
                                <p><b>Age:</b> {{$animal->age}}</p>
                                <p><b>Gender:</b> {{$animal->gender}}</p>
                                <p><b>Medical History:</b> {{$animal->medical_history}}</p>
                                <p><b>Feeding Schedule ID:</b> {{$animal->feedingschedule_id}}</p>
                                <p><b><a href="{{route('animals.edit', $animal->id)}}" class="edit-link">Edit</a></b></p>
                                <p><b><a href="{{route('animals.delete', $animal->id)}}" class="delete-link">Delete</a></b></p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <p>No animals available for this species.</p>
                @endif
            </div>
            @endforeach
        </div>
    @else
    <ul class="animal-list">
        @foreach ($animals as $animal)
        <li class="animal-item">
            <div class="animal-details">
                <p><b>Name:</b> {{$animal->name}}</p>
                <p><b>Species ID:</b> {{$animal->species_id}}</p>
                <p><b>Race:</b> {{$animal->race}}</p>
                <p><b>Age:</b> {{$animal->age}}</p>
                <p><b>Gender:</b> {{$animal->gender}}</p>
                <p><b>Medical History:</b> {{$animal->medical_history}}</p>
                <p><b>Feeding Schedule ID:</b> {{$animal->feedingschedule_id}}</p>
                <p><b><a href="{{route('animals.edit', $animal->id)}}" class="edit-link">Edit</a></b></p>
                <p><b><a href="{{route('animals.delete', $animal->id)}}" class="delete-link">Delete</a></b></p>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</x-base-layout>