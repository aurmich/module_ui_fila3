<?php

declare(strict_types=1);

namespace Modules\UI\Forms\Components;

<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Closure;

/**
 * Radio Card Selector Component
 * 
=======
use Closure;
use Filament\Forms\Components\Field;

/**
 * Radio Card Selector Component
 *
>>>>>>> d635998 (.)
 * Componente riutilizzabile per selezione tramite card radio.
 * Popola automaticamente un TextInput con il nome dell'elemento selezionato.
 */
class RadioCardSelector extends Field
{
    protected string $view = 'ui::forms.components.radio-card-selector';

    /**
     * @var array<int, array<string, mixed>>|Closure
     */
    protected array|Closure $cards = [];

<<<<<<< HEAD
    /**
     * @var string|null
     */
    protected ?string $sectionTitle = null;

    /**
     * @var string|null
     */
    protected ?string $sectionSubtitle = null;

    /**
     * @var string|null
     */
    protected ?string $targetFieldName = null;

    /**
     * @var string|null
     */
    protected ?string $emptyStateTitle = null;

    /**
     * @var string|null
     */
=======
    protected ?string $sectionTitle = null;

    protected ?string $sectionSubtitle = null;

    protected ?string $targetFieldName = null;

    protected ?string $emptyStateTitle = null;

>>>>>>> d635998 (.)
    protected ?string $emptyStateDescription = null;

    /**
     * Imposta le card disponibili per la selezione.
     *
<<<<<<< HEAD
     * @param array<int, array<string, mixed>>|Closure $cards
     * @return static
=======
     * @param  array<int, array<string, mixed>>|Closure  $cards
>>>>>>> d635998 (.)
     */
    public function cards(array|Closure $cards): static
    {
        $this->cards = $cards;

        return $this;
    }

    /**
     * Imposta il titolo della sezione.
<<<<<<< HEAD
     *
     * @param string|null $title
     * @return static
=======
>>>>>>> d635998 (.)
     */
    public function sectionTitle(?string $title): static
    {
        $this->sectionTitle = $title;

        return $this;
    }

    /**
     * Imposta il sottotitolo della sezione.
<<<<<<< HEAD
     *
     * @param string|null $subtitle
     * @return static
=======
>>>>>>> d635998 (.)
     */
    public function sectionSubtitle(?string $subtitle): static
    {
        $this->sectionSubtitle = $subtitle;

        return $this;
    }

    /**
     * Campo da popolare quando si seleziona una card.
<<<<<<< HEAD
     *
     * @param string $fieldName
     * @return static
=======
>>>>>>> d635998 (.)
     */
    public function populatesField(string $fieldName): static
    {
        $this->targetFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il titolo dello stato vuoto.
<<<<<<< HEAD
     *
     * @param string|null $title
     * @return static
=======
>>>>>>> d635998 (.)
     */
    public function emptyStateTitle(?string $title): static
    {
        $this->emptyStateTitle = $title;

        return $this;
    }

    /**
     * Imposta la descrizione dello stato vuoto.
<<<<<<< HEAD
     *
     * @param string|null $description
     * @return static
=======
>>>>>>> d635998 (.)
     */
    public function emptyStateDescription(?string $description): static
    {
        $this->emptyStateDescription = $description;

        return $this;
    }

    /**
     * Ottiene le card per la visualizzazione.
<<<<<<< HEAD
     *
     * 
=======
>>>>>>> d635998 (.)
     */
    public function getCards(): array
    {
        $result = $this->evaluate($this->cards);
<<<<<<< HEAD
        
=======

>>>>>>> d635998 (.)
        return is_array($result) ? $result : [];
    }

    /**
     * Ottiene il titolo della sezione.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> d635998 (.)
     */
    public function getSectionTitle(): ?string
    {
        return $this->sectionTitle;
    }

    /**
     * Ottiene il sottotitolo della sezione.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> d635998 (.)
     */
    public function getSectionSubtitle(): ?string
    {
        return $this->sectionSubtitle;
    }

    /**
     * Ottiene il nome del campo target.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> d635998 (.)
     */
    public function getTargetFieldName(): ?string
    {
        return $this->targetFieldName;
    }

    /**
     * Ottiene il titolo dello stato vuoto.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> d635998 (.)
     */
    public function getEmptyStateTitle(): ?string
    {
        return $this->emptyStateTitle;
    }

    /**
     * Ottiene la descrizione dello stato vuoto.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> d635998 (.)
     */
    public function getEmptyStateDescription(): ?string
    {
        return $this->emptyStateDescription;
    }
<<<<<<< HEAD
} 
=======
}
>>>>>>> d635998 (.)
