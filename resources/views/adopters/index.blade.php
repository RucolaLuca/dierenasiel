<x-base-layout>
    <h1 style="text-align: center">Adopters</h1>
    <div class="adopters-container">
        @foreach ($adopters as $adopter)
            <div class="adopter-item">
                <h2>
                    {{$adopter->first_name}}
                    @if ($adopter->prefix)
                        {{$adopter->prefix}}
                    @endif
                    {{$adopter->last_name}}
                </h2>
            </div>
        @endforeach
    </div>
</x-base-layout>