<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> d3fc412d (.)
@props(['widget'])
<div>
    {{--  
    <x-dynamic-component :component="$widget" />
    --}}
    
    @livewire($widget, $block->data)
</div>
