<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Closure;
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
=======
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)

class RadioCollection extends Field
{
    protected string $view = 'ui::filament.forms.components.radio-collection';
    
     /**
     * Callback per ottenere gli studi.
     */
    protected Closure | Collection | null $options = null;
    protected string $itemView;
    protected string $valueKey = 'id';
    
    /**
     * Set the options collection for the radio buttons.
     */
    public function options(Closure | Collection | null $options): static
    {
        $this->options = $options;
        
        return $this;
    }
    
    /**
     * Set the custom item view template.
     */
    public function itemView(string $view): static
    {
        $this->itemView = $view;
        
        return $this;
    }
    
    /**
     * Set the key to use as the value for each option.
     */
    public function valueKey(string $key): static
    {
        $this->valueKey = $key;
        
        return $this;
    }
    
    /**
     * Get the options collection.
     */
    public function getOptions(): Collection
    {
        $options = $this->evaluate($this->options);
        return $options;
    }
    
    /**
     * Get the item view template path.
     */
    public function getItemView(): string
    {
        return $this->itemView ?? 'ui::filament.forms.components.radio-collection-item';
    }
    
    /**
     * Get the value key for options.
     */
    public function getValueKey(): string
    {
        return $this->valueKey;
    }
    
    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
<<<<<<< HEAD
<<<<<<< HEAD
     * 
     * @param mixed $option
     * @return bool
     */
    public function isOptionSelected($option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
        $optionData = data_get($option, $this->getValueKey());
        /** @phpstan-ignore-next-line */
        $optionValue = SafeStringCastAction::cast($optionData);
=======
=======
     * 
     * @param mixed $option
     * @return bool
>>>>>>> 345f8677 (phpstan)
     */
    public function isOptionSelected($option): bool
    {
        $currentValue = (string) $this->getState();
        $optionValue = (string) data_get($option, $this->getValueKey());
>>>>>>> 94659d1c (✨ (RadioCollection): introduce a new RadioCollection component for customizable radio button groups in Filament forms)
        
        return $currentValue === $optionValue;
    }
}