<x-layout.app>
    <x-container>
        <x-card title="Crate a new Link">
            <x-form :route="route('links.create')" post id="createLink-form">
                <x-input name="link" type="text" placeholder="link" value="{{ old('link') }}" />
                <x-input name="name" type="text" placeholder="Name" value="{{ old('name') }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Return dashboard</x-a>
                <x-button type="submit" form="createLink-form">Create</x-button>
                </x-slot>
        </x-card>
    </x-container>
</x-layout.app>