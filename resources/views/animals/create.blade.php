<x-base-layout>
<form action="/animals/store" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="species">Species</label>
    <select name="species" id="species">
        @foreach ($species as $specie)
            <option value="{{$specie->id}}">{{$specie->name}}</option>
        @endforeach
    </select>

    <label for="race">Race</label>
    <input type="text" name="race" id="race">

    <label for="age">Age</label>
    <input type="number" name="age" id="age">

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <label for="medical_history">Medical History</label>
    <textarea name="medical_history" id="medical_history" placeholder="If no medical history, skip this field"></textarea>

    <label for="feeding_schedule">Feeding Schedule</label>
    <select name="feeding_schedule" id="feeding_schedule">
        @foreach ($feedingschedules as $feeding_schedule)
            <option value="{{$feeding_schedule->id}}">{{$feeding_schedule->name}}</option>
        @endforeach
    </select>
    
    <button type="submit">Post Animal</button>
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