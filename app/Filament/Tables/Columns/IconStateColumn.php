<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Tables\Columns;

use Exception;
use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> 345f8677 (phpstan)
use Webmozart\Assert\Assert;
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
use Filament\Tables\Actions\Action;
<<<<<<< HEAD
=======
use Spatie\ModelStates\State;
use Modules\SaluteOra\Models\User;
>>>>>>> aurmich/dev
=======
>>>>>>> 345f8677 (phpstan)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\ModelStates\HasStatesContract;
=======
use Filament\Tables\Actions\Action;
>>>>>>> aurmich/dev
=======
use Spatie\ModelStates\HasStatesContract;
>>>>>>> 345f8677 (phpstan)

class IconStateColumn extends IconColumn
{

    protected function setUp(): void
    {
        parent::setUp();
        //$this->getStateUsing(fn() => true); // the column requires a state to be passed to it
<<<<<<< HEAD
        $this->icon(fn($state): ?string => $state?->icon());
        $this->color(fn($state): ?string => $state?->color());
        $this->tooltip(fn($state): ?string => $state?->label());
=======
        $this->icon(fn($state): string => $state->icon());
        $this->color(fn($state): string => $state->color());
        $this->tooltip(fn($state): string => $state->label());
>>>>>>> aurmich/dev
        //$this->label('aaa');

        $this->action(Action::make('change-state')
            ->form([
                Select::make('state')
                    ->options(
<<<<<<< HEAD
<<<<<<< HEAD
                        function (Model&HasStatesContract $record ,string $state): array {
=======
                        function (Model $record ,string $state): array {
>>>>>>> aurmich/dev
=======
                        function (Model&HasStatesContract $record ,string $state): array {
>>>>>>> 345f8677 (phpstan)

                            $name=$this->getName();
                            $state=$record->getAttribute($name);
                            if($state==null){
                                $states=Arr::wrap($record->getDefaultStateFor($name));
                                return array_combine($states, $states);
                            }
<<<<<<< HEAD
<<<<<<< HEAD
                            Assert::isInstanceOf($state, State::class);
                            
=======
>>>>>>> aurmich/dev
=======
                            Assert::isInstanceOf($state, State::class);
>>>>>>> 345f8677 (phpstan)
                            try{
                                //$states=$record->getAttribute($name)->transitionableStates();
                                $states=$state->transitionableStates();
                            }catch(Exception $e){
                                $states=$record->getStatesFor($name)->toArray();;
                            }
<<<<<<< HEAD
<<<<<<< HEAD
                            /** @phpstan-ignore-next-line */
                            //$states=[$state::$name, ...$states];
                            //$states=array_combine($states, $states);
                            $states=Arr::mapWithKeys($states,function($state) use ($record){
                                $model=Str::of(class_basename($record))->slug()->toString();
                                /** @phpstan-ignore binaryOp.invalid */
                                Assert::string($label=__('pub_theme::'.$model.'_states.'.$state.'.label'));
                                return [$state=>$label];
                            });
                            
=======
=======
                            /** @phpstan-ignore-next-line */
>>>>>>> 345f8677 (phpstan)
                            $states=[$state::$name, ...$states];
                            $states=array_combine($states, $states);
>>>>>>> aurmich/dev
                            //dddx(['state'=>$state, 'state1'=>$record->getAttribute($name),'record'=>$record]);

                            return $states;
                        }
<<<<<<< HEAD
                    )
                    ->required(),
=======
                    ),
>>>>>>> aurmich/dev
                Textarea::make('message'),
            ])
            ->fillForm(function($record){
                //dddx($record->state);//Modules\SaluteOra\States\User\Pending
                return [
                    'state' => $record->state::$name,
                ];
            })
            ->action(function($record, $data) {
                //dddx(['record'=>$record, 'data'=>$data]);
                $record->state->transitionTo($data['state'],$data['message']);

            })
        );


    }




<<<<<<< HEAD
}
=======
}
>>>>>>> aurmich/dev
