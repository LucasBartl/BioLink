<div>
    <h1>Registrar</h1>

    @if($message = session()->get('message'))
    <div>{{$message}}</div>
    @endif

    <form action="{{route('register')}}" method="post">
        <!-- Faz com que somente post da nossa aplicação seja enviado -->
        @csrf


        <div>
            <input type="name" name="name" id="" placeholder="name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email" id="" placeholder="email" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email_confirmation" id="" placeholder="email confirmation">
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="senha">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Registrar</button>
    </form>



</div>