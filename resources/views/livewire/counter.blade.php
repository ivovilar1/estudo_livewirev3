<div>
    <div> Counter:: {{ $counter }}</div>
    <br>

    <x-primary-button wire:click="count">
        +1
    </x-primary-button>
    <br>

    <x-text-input wire:model.live="counter"/>
    <x-primary-button wire:click="refresh"> Refresh </x-primary-button>

    <br> <br>
    <strong>
        Nome : {{ $firstName }} {{ $secondName }}
    </strong>
</div>
