<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\Relation;
use Webmozart\Assert\Assert;

/**
 * Class AddressField
 * 
 * @property string|callable|null $relationship
 */
class AddressField extends Forms\Components\Field
{
    protected string $view = 'filament-forms::components.group';

    /**
     * La relazione che collega questo campo all'indirizzo.
     * Può essere una stringa o una callable che restituisce una stringa.
     * 
     * @var string|callable|null
     */
    protected mixed $relationship = null;
=======
>>>>>>> 4eb3395 (.)
use Webmozart\Assert\Assert;

class AddressField extends Forms\Components\Field
{
    /** @var string|callable|null */
    public $relationship;

    protected string $view = 'filament-forms::components.group';
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
=======
<<<<<<< HEAD
        $this->afterStateHydrated(function (AddressField $component, ?Model $record): void {
=======
        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
>>>>>>> origin/dev
            if ($record === null) {
                return;
            }

<<<<<<< HEAD
>>>>>>> 4eb3395 (.)
=======
 
>>>>>>> 9256606 (.)
            $data = [
                'country' => null,
                'street' => null,
                'city' => null,
                'state' => null,
                'zip' => null,
            ];
<<<<<<< HEAD
            $address = $record->getRelationValue($this->getRelationship());
            if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
=======

            $relationship = $this->getRelationship();
            if (!$relationship) {
                return;
            }

            $address = $record->getRelationValue($relationship);
            if ($address !== null && is_object($address) && method_exists($address, 'toArray')) {
>>>>>>> 4eb3395 (.)
                $data = $address->toArray();
            }

            $component->state($data);
        });

        $this->dehydrated(false);
    }

    public function relationship(string|callable $relationship): static
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function saveRelationships(): void
    {
        $state = $this->getState();
        $record = $this->getRecord();
<<<<<<< HEAD
<<<<<<< HEAD
        $relationship = $record->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
=======
<<<<<<< HEAD
        
=======

>>>>>>> origin/dev
=======
>>>>>>> 9256606 (.)
        if ($record === null) {
            return;
        }

        $relationship = $this->getRelationship();
        if (!$relationship) {
            return;
        }

<<<<<<< HEAD
        /** @var Relation $relation */
        $relation = $record->{$relationship}();
        if (!$relation instanceof Relation) {
=======
        $relation = $record->{$relationship}();
<<<<<<< HEAD
        if (!$relation) {
>>>>>>> origin/dev
=======
        if (!$relation instanceof Relation) {
>>>>>>> 9256606 (.)
            return;
        }

        if ($address = $relation->first()) {
            $address->update($state);
        } else {
            $relation->updateOrCreate($state);
>>>>>>> 4eb3395 (.)
        }
        $record->touch();
    }

    public function getChildComponents(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\Select::make('country')
<<<<<<< HEAD
=======
<<<<<<< HEAD
                        ->required()
                        ->searchable(),
                ]),
            Forms\Components\TextInput::make('street')
                ->required()
=======
>>>>>>> 4eb3395 (.)
                        ->searchable(),
                ]),
            Forms\Components\TextInput::make('street')
<<<<<<< HEAD

=======
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
                ->maxLength(255),
            Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\TextInput::make('city')
<<<<<<< HEAD
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')

                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')

=======
<<<<<<< HEAD
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')
                        ->required()
=======
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
                        ->maxLength(255),
                ]),
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function getRelationship(): ?string
    {
        $relationship = $this->evaluate($this->relationship);
        
        if ($relationship === null) {
            return $this->getName();
        }

        Assert::string($relationship);

        return $relationship;
=======
>>>>>>> 4eb3395 (.)
    public function getRelationship(): string
    {
        Assert::string($res = $this->evaluate($this->relationship) ?? $this->getName());
        return $res;
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 4eb3395 (.)
    }
    }
}
