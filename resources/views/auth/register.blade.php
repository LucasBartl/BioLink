<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" type="text" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="email" type="email" placeholder="email" value="{{ old('email') }}" />
                <x-input name="email_confirmation" type="email" placeholder="email confirmation" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="password" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Alrendy have an account!</x-a>
                <x-button type="submit" form="register-form">Register</x-button>
                </x-slot>
        </x-card>
    </x-container>
</x-layout.app>


