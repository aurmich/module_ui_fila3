<?php
<<<<<<< HEAD

namespace Modules\UI\Filament\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
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

class UserCalendarWidget extends FullCalendarWidget
{
    use \Saade\FilamentFullCalendar\Widgets\Concerns\InteractsWithEvents;
<<<<<<< HEAD

    public string $type;

    public function getActionName(string $function): string
    {
        $action_suffix = Str::of($function)->studly()->append('Action')->toString();
        $resource = XotData::make()->getUserResourceClassByType($this->type);
        $model = $resource::getModel();
        $action = \Illuminate\Support\Str::of($model)
            ->replace('\Models\\', '\Actions\\')
            ->append('\Calendar\\'.$action_suffix)
            ->toString();

        return $action;
    }

    public function fetchEvents(array $fetchInfo): array
    {
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
        return app($action)->execute($fetchInfo);
    }

    public function getFormSchema(): array
    {
        $action = $this->getActionName(__FUNCTION__);
<<<<<<< HEAD

        if (class_exists($action)) {
            return app($action)->execute();
        }

        // Fallback schema
        return [
            TextInput::make('title'),

=======
        
        if (class_exists($action)) {
            return app($action)->execute();
        }
        
        // Fallback schema
        return [
            TextInput::make('title'),
 
>>>>>>> 60908d2 (.)
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

<<<<<<< HEAD
=======
   
>>>>>>> 60908d2 (.)
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
}
=======

    
}
>>>>>>> 60908d2 (.)
