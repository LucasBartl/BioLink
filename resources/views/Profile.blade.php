<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="profile-form" enctype="multipart/form-data">
                
            <div class="flex gap-2 itens-center justify-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{$user->photo}}" alt="Profile Picture" class="avatar">
                        </div>
                    </div>
                    <x-file-input name="photo" />
                </div>
                
                
                <x-input name="name" type="text" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" type="text"  value="{{ old('description', $user->description) }}"/>
                <x-input name="handler" prefix="biolink.com.br/" type="text" placeholder="Handler" value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Return dashboard</x-a>
                <x-button type="submit" form="profile-form">Update link</x-button>
                </x-slot>
        </x-card>
    </x-container>
</x-layout.app>
