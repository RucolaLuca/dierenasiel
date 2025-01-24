<x-base-layout>
    <h1 class="animal-create">Register Adopter</h1>
    <form action="{{ route('adopters.store') }}" method="post">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="prefix">Prefix</label>
        <input type="text" name="prefix" id="prefix">

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" required>

        <button type="submit" class="submit-button">Register Adopter</button>
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