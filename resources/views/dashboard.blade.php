<div>
   <h1>Dashboard</h1>

   @if($message = session()->get('message'))
      <div>{{ $message }}</div>
   @endif

   <ul>
      @foreach ($links as $link)
      <li>
         <!-- <a href="/links/{{ $link->id }}/edit">{{ $link->name}}</a> -->
         <!--Aqui utilizamos um metodo de ajuda do proprio framework.-->
         <a href="{{ route('links.edit', $link) }}">{{ $link->name}}</a>

      </li>
      @endforeach
   </ul>
</div>