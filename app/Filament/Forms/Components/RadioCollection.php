<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Support\Collection;
=======
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
>>>>>>> 60908d2 (.)
=======
use Illuminate\Support\Collection;
use Filament\Forms\Components\Field;
>>>>>>> 90e8530 (.)
use Modules\Xot\Actions\Cast\SafeStringCastAction;

class RadioCollection extends Field
{
    protected string $view = 'ui::filament.forms.components.radio-collection';
<<<<<<< HEAD
<<<<<<< HEAD

    /**
=======
    
     /**
>>>>>>> 90e8530 (.)
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
<<<<<<< HEAD

=======
    
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
    
>>>>>>> 60908d2 (.)
=======
    
>>>>>>> 90e8530 (.)
    /**
     * Set the custom item view template.
     */
    public function itemView(string $view): static
    {
        $this->itemView = $view;
<<<<<<< HEAD
<<<<<<< HEAD

        return $this;
    }

=======
        
        return $this;
    }
    
>>>>>>> 60908d2 (.)
=======
        
        return $this;
    }
    
>>>>>>> 90e8530 (.)
    /**
     * Set the key to use as the value for each option.
     */
    public function valueKey(string $key): static
    {
        $this->valueKey = $key;
<<<<<<< HEAD
<<<<<<< HEAD

        return $this;
    }

=======
        
        return $this;
    }
    
>>>>>>> 60908d2 (.)
=======
        
        return $this;
    }
    
>>>>>>> 90e8530 (.)
    /**
     * Get the options collection.
     */
    public function getOptions(): Collection
    {
        $options = $this->evaluate($this->options);
<<<<<<< HEAD
<<<<<<< HEAD

        return $options;
    }

=======
        return $options;
    }
    
>>>>>>> 60908d2 (.)
=======
        return $options;
    }
    
>>>>>>> 90e8530 (.)
    /**
     * Get the item view template path.
     */
    public function getItemView(): string
    {
        return $this->itemView ?? 'ui::filament.forms.components.radio-collection-item';
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 60908d2 (.)
=======
    
>>>>>>> 90e8530 (.)
    /**
     * Get the value key for options.
     */
    public function getValueKey(): string
    {
        return $this->valueKey;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     *
     * @param  mixed  $option
=======
    
    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     * 
     * @param mixed $option
     * @return bool
>>>>>>> 60908d2 (.)
=======
    
    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
     * 
     * @param mixed $option
     * @return bool
>>>>>>> 90e8530 (.)
     */
    public function isOptionSelected($option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
        $optionData = data_get($option, $this->getValueKey());
        /** @phpstan-ignore-next-line */
        $optionValue = SafeStringCastAction::cast($optionData);
<<<<<<< HEAD
<<<<<<< HEAD

        return $currentValue === $optionValue;
    }
}
=======
        
        return $currentValue === $optionValue;
    }
}
>>>>>>> 60908d2 (.)
=======
        
        return $currentValue === $optionValue;
    }
}
>>>>>>> 90e8530 (.)
