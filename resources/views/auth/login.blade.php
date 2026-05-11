<!-- Chamando um component blade -->
<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" type="email"  placeholder="email" value="{{ old('email') }}"/>
                <x-input name="password" type="password"  placeholder="senha"/>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">I need create a new account!</x-a>
                <x-button type="submit" form="login-form">Logar</x-button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>