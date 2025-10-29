@props(['name'])

@error($name)
<p {{$attributes->merge(['class'=>'mt-4 text-sm text-red-500 font-semibold'])}}>
    {{$message}}
</p>

@enderror
