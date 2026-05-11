<!-- Definindo propriedades ao componente -->
@props([
'title',
'actions'
])

<div class="card  bg-base-100 w-2/3 shadow-xl">
    <div class="card-body">
        <div class="card-title mb-6">{{$title}}</div>

        {{$slot}}

        <div class="card-actions flex itens-center justify-between mt-6">
            {{$actions}}
        </div>
    </div>
</div>