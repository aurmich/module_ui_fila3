<?php

declare(strict_types=1);

namespace Modules\UI\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Closure;
=======
>>>>>>> 90e8530 (.)
use Filament\Forms\Components\Field;
use Closure;

/**
 * Radio Card Selector Component
<<<<<<< HEAD
 *
=======
use Filament\Forms\Components\Field;
use Closure;

/**
 * Radio Card Selector Component
 * 
>>>>>>> 60908d2 (.)
=======
 * 
>>>>>>> 90e8530 (.)
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
<<<<<<< HEAD
=======
    /**
     * @var string|null
     */
>>>>>>> 90e8530 (.)
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

<<<<<<< HEAD
=======
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
>>>>>>> 60908d2 (.)
=======
    /**
     * @var string|null
     */
>>>>>>> 90e8530 (.)
    protected ?string $emptyStateDescription = null;

    /**
     * Imposta le card disponibili per la selezione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int, array<string, mixed>>|Closure  $cards
=======
     * @param array<int, array<string, mixed>>|Closure $cards
     * @return static
>>>>>>> 60908d2 (.)
=======
     * @param array<int, array<string, mixed>>|Closure $cards
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function cards(array|Closure $cards): static
    {
        $this->cards = $cards;

        return $this;
    }

    /**
     * Imposta il titolo della sezione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string|null $title
     * @return static
>>>>>>> 60908d2 (.)
=======
     *
     * @param string|null $title
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function sectionTitle(?string $title): static
    {
        $this->sectionTitle = $title;

        return $this;
    }

    /**
     * Imposta il sottotitolo della sezione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string|null $subtitle
     * @return static
>>>>>>> 60908d2 (.)
=======
     *
     * @param string|null $subtitle
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function sectionSubtitle(?string $subtitle): static
    {
        $this->sectionSubtitle = $subtitle;

        return $this;
    }

    /**
     * Campo da popolare quando si seleziona una card.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string $fieldName
     * @return static
>>>>>>> 60908d2 (.)
=======
     *
     * @param string $fieldName
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function populatesField(string $fieldName): static
    {
        $this->targetFieldName = $fieldName;

        return $this;
    }

    /**
     * Imposta il titolo dello stato vuoto.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string|null $title
     * @return static
>>>>>>> 60908d2 (.)
=======
     *
     * @param string|null $title
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function emptyStateTitle(?string $title): static
    {
        $this->emptyStateTitle = $title;

        return $this;
    }

    /**
     * Imposta la descrizione dello stato vuoto.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param string|null $description
     * @return static
>>>>>>> 60908d2 (.)
=======
     *
     * @param string|null $description
     * @return static
>>>>>>> 90e8530 (.)
     */
    public function emptyStateDescription(?string $description): static
    {
        $this->emptyStateDescription = $description;

        return $this;
    }

    /**
     * Ottiene le card per la visualizzazione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * 
>>>>>>> 60908d2 (.)
=======
     *
     * 
>>>>>>> 90e8530 (.)
     */
    public function getCards(): array
    {
        $result = $this->evaluate($this->cards);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 60908d2 (.)
=======
        
>>>>>>> 90e8530 (.)
        return is_array($result) ? $result : [];
    }

    /**
     * Ottiene il titolo della sezione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string|null
>>>>>>> 60908d2 (.)
=======
     *
     * @return string|null
>>>>>>> 90e8530 (.)
     */
    public function getSectionTitle(): ?string
    {
        return $this->sectionTitle;
    }

    /**
     * Ottiene il sottotitolo della sezione.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string|null
>>>>>>> 60908d2 (.)
=======
     *
     * @return string|null
>>>>>>> 90e8530 (.)
     */
    public function getSectionSubtitle(): ?string
    {
        return $this->sectionSubtitle;
    }

    /**
     * Ottiene il nome del campo target.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string|null
>>>>>>> 60908d2 (.)
=======
     *
     * @return string|null
>>>>>>> 90e8530 (.)
     */
    public function getTargetFieldName(): ?string
    {
        return $this->targetFieldName;
    }

    /**
     * Ottiene il titolo dello stato vuoto.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string|null
>>>>>>> 60908d2 (.)
=======
     *
     * @return string|null
>>>>>>> 90e8530 (.)
     */
    public function getEmptyStateTitle(): ?string
    {
        return $this->emptyStateTitle;
    }

    /**
     * Ottiene la descrizione dello stato vuoto.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string|null
>>>>>>> 60908d2 (.)
=======
     *
     * @return string|null
>>>>>>> 90e8530 (.)
     */
    public function getEmptyStateDescription(): ?string
    {
        return $this->emptyStateDescription;
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
