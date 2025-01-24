<x-base-layout>
    <h1 class="animal-create">Create Feeding Schedule</h1>
    <form action="{{ route('feedingschedules.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>

        <label for="nutrients">Nutrients</label>
        <textarea name="nutrients" id="nutrients" placeholder="e.g. Protein, Fat etc"></textarea>

        <button type="submit" class="submit-button">Create Feeding Schedule</button>
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