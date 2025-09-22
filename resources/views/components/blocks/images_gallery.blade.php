<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> d3fc412d (.)
@php
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
@endphp

<div>
  @include('ui::components.blocks.'.$tpl.'.'.$data['version'])
</div>
