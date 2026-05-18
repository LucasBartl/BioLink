<x-layout.app>
    <x-container>

        <div class="absolute top-o left-10 flex flex-col gap-4">
            <x-button ghost :href="route('profile')">Update profile</x-button>
            <x-button ghost :href="route('links.create')">Create a new link</x-button>
            <x-button ghost :href="route('logout')"> Logout </x-button>
        </div>
        <div class="text-center space-y-4 w-2/3">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm italic opacity-80 ">{{ $user->description }}</div>
            <ul class="space-y-2 ">
                @foreach ($links as $link)
                    <li class="flex gap-2 itens-center justify-center">

                        {{-- UP --}}
                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>

                                <x-button ghost>
                                    <x-icons.arrow-up class="y-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost><x-icons.arrow-up class="y-6 h-6" /></x-button>
                        @endunless

                        {{-- DOWN --}}
                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.arrow-down class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost><x-icons.arrow-down class="w-6 h-6" /></x-button>
                        @endunless

                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>

                        {{-- delete --}}
                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza')">
                            <x-button ghost><x-icons.trash class="w-6 h-6" /></x-button>
                        </x-form>

                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
