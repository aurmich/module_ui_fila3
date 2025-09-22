<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Exception;
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\ModelStates\HasStatesContract;
use Spatie\ModelStates\State;

class SelectState extends Select
{
    protected function setUp(): void
    {
        parent::setUp();

        //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name = $this->getName();
            if (is_null($record)) {
                $model = $this->getModel();
                $states = Arr::wrap(app($model)->getDefaultStateFor($name));
                /**
                 * @var array<int|string>
                 * @phpstan-ignore argument.type
                 */
                return array_combine($states, $states);
            }

            $states = $record->getStatesFor($name)->toArray();

=======
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
use Spatie\ModelStates\HasStatesContract;

class SelectState extends Select
{

    protected function setUp(): void
    {
        parent::setUp();
       
      //  $this->selectablePlaceholder(false);
        $this->options(function ((Model&HasStatesContract)|null $record): array {
            $name=$this->getName();
            if(is_null($record)){
                $model=$this->getModel();
                $states=Arr::wrap(app($model)->getDefaultStateFor($name));
                /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
                return array_combine($states, $states);
                
            }
            
            $states=$record->getStatesFor($name)->toArray();
            
>>>>>>> d3fc412d (.)
            /**
             * @var array<int|string>
             * @phpstan-ignore argument.type
             */
            return array_combine($states, $states);
        });
        $this->required();
<<<<<<< HEAD
    }
=======
       
    }

   
>>>>>>> d3fc412d (.)
}
