<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> d3fc412d (.)
<div class="flex gap-2 justify-center">
    @foreach($getActions() as $action)
        {!! $action->record($getRecord())->render() !!}
    @endforeach

    <x-filament-actions::modals />
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> d3fc412d (.)
