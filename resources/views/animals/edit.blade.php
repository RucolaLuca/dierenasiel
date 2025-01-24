<x-base-layout>
<form action="/animals/update/{{$animals->id}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $animals->name }}" required>

    <label for="species_id">Species</label>
    <select name="species_id" id="species_id" required>
        @foreach ($species as $specie)
            <option value="{{ $specie->id }}" {{ $animals->species_id == $specie->id ? 'selected' : '' }}>{{ $specie->name }}</option>
        @endforeach
    </select>

    <label for="race">Race</label>
    <input type="text" name="race" id="race" value="{{ $animals->race }}" required>

    <label for="age">Age</label>
    <input type="number" name="age" id="age" value="{{ $animals->age }}" required>

    <label for="gender">Gender</label>
    <select name="gender" id="gender" required>
        <option value="Male" {{ $animals->gender == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ $animals->gender == 'Female' ? 'selected' : '' }}>Female</option>
    </select>

    <label for="medical_history">Medical History</label>
    <textarea name="medical_history" id="medical_history" required>{{ $animals->medical_history }}</textarea>

    <label for="feedingschedule_id">Feeding Schedule</label>
    <select name="feedingschedule_id" id="feedingschedule_id" required>
        @foreach ($feedingschedules as $feeding_schedule)
            <option value="{{ $feeding_schedule->id }}" {{ $animals->feedingschedule_id == $feeding_schedule->id ? 'selected' : '' }}>{{ $feeding_schedule->name }}</option>
        @endforeach
    </select>
    <div class="button-group">
        <button type="submit" class="create-submit">Update Animal</button>
        <a href="{{ url('animals.show')}}" class="button-link">Return Without Changes</a>
    </div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</x-base-layout>