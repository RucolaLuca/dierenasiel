<x-base-layout>
    <h1>Edit Feeding Schedule</h1>
    <form action="{{ route('feedingschedules.update', $feedingschedule->id)}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $feedingschedule->name }}" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ $feedingschedule->description }}</textarea>
        
        <label for="nutrients">Nutriets</label>
        <textarea name="nutrients" id="nutrients" required>{{ $feedingschedule->nutrients }}</textarea>

        <button type="submit" class="sumbit-button">Update Feeding Schedule</button>
    </form>
    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-base-layout>