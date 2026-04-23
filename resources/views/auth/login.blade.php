<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
    <div>{{$message}}</div>
    @endif

    <form action="{{route('login')}}" method="post">
        <!-- Faz com que somente post da nossa aplicação seja enviado -->
        @csrf


        <div>
            <input type="email" name="email" id="" placeholder="email" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="senha">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button>Logar</button>
    </form>



</div>