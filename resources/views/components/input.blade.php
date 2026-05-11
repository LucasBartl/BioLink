@props([
'name',
'prefix' => null
])

<label class="input input-bordered flex items-center gap-2 w-full">
@if($prefix)
<span>{{$prefix}}</span>
@endif

    <input {{$attributes}} name={{$name}} class="grow" />
    @error($name)
    <span class="text-sm text-error">{{ $message }}</span>
    @enderror
</label>