<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> d3fc412d (.)
@props(['blocks'])

@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" tpl="v2"/>
@endforeach
