<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90e8530 (.)
namespace Modules\UI\Filament\Widgets;


use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use App\Filament\Resources\EventResource;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
<<<<<<< HEAD
=======
namespace Modules\UI\Filament\Widgets;


use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use App\Filament\Resources\EventResource;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;
>>>>>>> 60908d2 (.)
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;
>>>>>>> 90e8530 (.)

class UserCalendarWidget extends FullCalendarWidget
{
    use \Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 90e8530 (.)
    public string $type;

    
    public function getActionName(string $function): string
    {
        $action_suffix=Str::of($function)->studly()->append('Action')->toString();
        $resource=XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action=\Illuminate\Support\Str::of($model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();
        return $action;
    }
    
    public function fetchEvents(array $fetchInfo): array
    {
<<<<<<< HEAD
        $action = $this->getActionName(__FUNCTION__);

=======
    public string $type;

    
    public function getActionName(string $function): string
    {
        $action_suffix=Str::of($function)->studly()->append('Action')->toString();
        $resource=XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action=\Illuminate\Support\Str::of($model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();
        return $action;
    }
    
    public function fetchEvents(array $fetchInfo): array
    {
        $action=$this->getActionName(__FUNCTION__);
>>>>>>> 60908d2 (.)
=======
        $action=$this->getActionName(__FUNCTION__);
>>>>>>> 90e8530 (.)
        return app($action)->execute($fetchInfo);
    }

    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 90e8530 (.)
        if (class_exists($action)) {
            return app($action)->execute();
        }
        
        // Fallback schema
        return [
            TextInput::make('title'),
<<<<<<< HEAD

=======
        
        if (class_exists($action)) {
            return app($action)->execute();
        }
        
        // Fallback schema
        return [
            TextInput::make('title'),
 
>>>>>>> 60908d2 (.)
=======
 
>>>>>>> 90e8530 (.)
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
   
>>>>>>> 60908d2 (.)
=======
   
>>>>>>> 90e8530 (.)
    /*
    protected function modalActions(): array
    {
        return [
            \Saade\FilamentFullCalendar\Actions\EditAction::make(),
            \Saade\FilamentFullCalendar\Actions\DeleteAction::make(),
        ];
    }
    */

    public function onDateSelect(string $start, ?string $end, bool $allDay, ?array $view, ?array $resource): void
    {
        // TODO: Implementare la logica per la selezione della data
        // dd('test');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======

    
}
>>>>>>> 60908d2 (.)
=======

    
}
>>>>>>> 90e8530 (.)
