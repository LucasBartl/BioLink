<x-layout.app>
    <div>
        <h1>Profile</h1>

        @if($message = session('message'))
        <div>{{$message}}</div>
        @endif


        <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
            <!-- Faz com que somente post da nossa aplicação seja enviado -->
            @csrf
            @method('PUT')

            <div>
                <img src="{{$user->photo}}" alt="Profile Picture">
                <input type="file" name="photo" />
            </div>
            <div>
                <input name="name" id="" placeholder="Name" value="{{ old('name', $user->name) }}">
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <textarea name="description" id="" placeholder="Resumo">{{ old('description', $user->description) }}</textarea>
                @error('description')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="handler" id="" placeholder="@seulink" value="{{ old('handler',$user->handler) }}">
                @error('handler')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>

            <a href="{{ route('dashboard') }}">Cancelar</a>
            <button>Update</button>
        </form>



    </div>
</x-layout.app>