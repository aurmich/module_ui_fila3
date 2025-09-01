<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
=======
use Exception;
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
>>>>>>> 60908d2 (.)
=======
use Exception;
use Illuminate\Support\Arr;
use Spatie\ModelStates\State;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\SelectColumn;
>>>>>>> 90e8530 (.)
use Spatie\ModelStates\HasStatesContract;

class SelectState extends Select
{
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 90e8530 (.)
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
            
            /**
             * @var array<int|string>
<<<<<<< HEAD
             *
=======

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
            
            /**
             * @var array<int|string>
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
             * @phpstan-ignore argument.type
             */
            return array_combine($states, $states);
        });
        $this->required();
<<<<<<< HEAD
<<<<<<< HEAD

    }
=======
       
    }

   
>>>>>>> 60908d2 (.)
=======
       
    }

   
>>>>>>> 90e8530 (.)
}
