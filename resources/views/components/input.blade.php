@props([
'name'
])

<div>
    <input {{$attributes}} name={{$name}} class="input input-bordered w-full" />
    @error($name)
    <span class="text-sm text-error">{{ $message }}</span>
    @enderror
</div>