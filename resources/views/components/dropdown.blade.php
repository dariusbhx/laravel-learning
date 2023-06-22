@props(['trigger'])

<div x-data={show:false} @click.away="show=false" s>
    <!-- trigger -->
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    <!-- links -->
    <div>
        {{ $slot }}
    </div>
</div>