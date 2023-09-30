<div>
    <div> {{ $counter }}</div>

    <x-primary-button wire:click="count">
        +1
    </x-primary-button>

    <br>
    <strong>
        Nome : {{ $firstName }} {{ $secondName }}
    </strong>
</div>
