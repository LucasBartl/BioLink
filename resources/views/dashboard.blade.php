<div>
   <h1>Dashboard</h1>

   @if($message = session()->get('message'))
   <div>{{ $message }}</div>
   @endif

   <a href="{{ route('links.create') }}">Criar</a>

   <ul>
      @foreach ($links as $link)
      <li style="display: flex;">
         
         @unless($loop->last)
         <form action=" {{ route('links.down',$link) }} " method="post">
            @csrf
            @method('PATCH')

            <button>⬇️</button>
         </form>
         @endunless

         @unless($loop->first)
            <form action=" {{ route('links.up',$link) }} " method="post">
               @csrf
               @method('PATCH')

               <button>⬆️</button>
            </form>
         @endunless
         <!-- <a href="/links/{{ $link->id }}/edit">{{ $link->name}}</a> -->
         <!--Aqui utilizamos um metodo de ajuda do proprio framework.-->
         <a href="{{ route('links.edit', $link) }}">{{ $link->name}}</a>
         <form action=" {{ route('links.destroy',$link) }} " method="post" onsubmit="return confirm('Tem certeza')">
            @csrf
            @method('DELETE')

            <button>Deletar</button>
         </form>
      </li>
      @endforeach
   </ul>
</div>