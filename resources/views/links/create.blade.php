<x-layout.app>
    <div>
        <!-- Validar se esta logado -->
        <h1>Criar um link </h1>
        @if($message = session()->get('message'))
        <div>{{$message}}</div>
        @endif

        <form action="{{route('links.create')}}" method="post">
            <!-- Faz com que somente post da nossa aplicação seja enviado -->
            @csrf

            <div>
                <input name="link" id="" placeholder="link" value="{{ old('link') }}">
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