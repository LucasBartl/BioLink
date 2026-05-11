<x-layout.app>
    <x-container>
        <x-card title="Editing link :: ID {{$link->id}}">
            <x-form :route="route('links.edit', $link)" put id="edit-form">
                <x-input name="link" type="text" placeholder="link" value="{{ old('link',$link->link) }}" />
                <x-input name="name" type="text" placeholder="Name" value="{{ old('link',$link->name) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Return dashboard</x-a>
                <x-button type="submit" form="edit-form">Update link</x-button>
                </x-slot>
        </x-card>
    </x-container>
</x-layout.app>