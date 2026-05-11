<x-layout.app>
    <div>
        <!-- Validar se esta logado -->
        <h1>Editar um link : {{$link->id}} </h1>
        @if($message = session()->get('message'))
        <div>{{$message}}</div>
        @endif

        <form action="{{route('links.edit', $link)}}" method="post">
            <!-- Faz com que somente post da nossa aplicação seja enviado -->
            @csrf
            @method('put')

            <div>
                <input name="link" id="" placeholder="link" value="{{ old('link', $link->link) }}">
                @error('link')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="name" id="" placeholder="name">
            </div>
            <button>Salvar</button>
            <a href="{{ route('dashboard') }}">Cancelar</a>
        </form>



    </div>
</x-layout.app>