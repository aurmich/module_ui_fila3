<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;

// use Squire\Models\Country;

class AddressField extends Forms\Components\Field
{
    protected string $view = 'filament-forms::components.group';

    /** @var string|callable|null */
    public $relationship;

    public function relationship(string|callable $relationship): static
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function saveRelationships(): void
    {
        $state = $this->getState();
        $record = $this->getRecord();
        $relationship = $record?->{$this->getRelationship()}();

        if (null === $relationship) {
            return;
        } elseif ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
        }

        $record?->touch();
    }

    public function getChildComponents(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\Select::make('country')
                        ->searchable(),
                    // ->getSearchResultsUsing(fn (string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)?->getAttribute('name')),
                ]),
            Forms\Components\TextInput::make('street')
                ->label('Street address')
                ->maxLength(255),
            Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\TextInput::make('city')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')
                        ->label('State / Province')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')
                        ->label('Zip / Postal code')
                        ->maxLength(255),
                ]),
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
            $data = [
                'country' => null,
                'street' => null,
                'city' => null,
                'state' => null,
                'zip' => null,
            ];
            $address = $record?->getRelationValue($this->getRelationship());
            if (null != $address && is_object($address) && method_exists($address, 'toArray')) {
                $data = $address->toArray();
            }

            $component->state($data);
        });

        $this->dehydrated(false);
    }

    public function getRelationship(): string
    {
        return $this->evaluate($this->relationship) ?? $this->getName();
    }
}