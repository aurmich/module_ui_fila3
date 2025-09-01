<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
=======
>>>>>>> 90e8530 (.)
use Filament\Forms\Get;
use Filament\Forms\Set;
use Modules\Geo\Models\Comune;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Support\Htmlable;

/**
 * LocationSelector Component - Selezione geografica gerarchica
<<<<<<< HEAD
 *
=======
use Filament\Forms\Get;
use Filament\Forms\Set;
use Modules\Geo\Models\Comune;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Support\Htmlable;

/**
 * LocationSelector Component - Selezione geografica gerarchica
 * 
>>>>>>> 60908d2 (.)
=======
 * 
>>>>>>> 90e8530 (.)
 * Componente Filament per la selezione gerarchica di:
 * - Regione
 * - Provincia (dipendente da regione)
 * - CAP (dipendente da regione e provincia)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * 
 * @package Modules\UI\Filament\Forms\Components
>>>>>>> 60908d2 (.)
=======
 * 
 * @package Modules\UI\Filament\Forms\Components
>>>>>>> 90e8530 (.)
 */
class LocationSelector extends Group
{
    /**
     * Il nome del campo regione.
     */
    protected string $regionFieldName = 'region';

    /**
     * Il nome del campo provincia.
     */
    protected string $provinceFieldName = 'province';

    /**
     * Il nome del campo CAP.
     */
    protected string $capFieldName = 'cap';

    /**
     * Se i campi devono essere searchable.
     */
    protected bool $searchable = true;

    /**
     * Se i campi devono essere required.
     */
    protected bool $required = false;

    /**
     * Label personalizzate per i campi.
     */
    protected array $labels = [];

    /**
     * Placeholder personalizzati per i campi.
     */
    protected array $placeholders = [];

    /**
     * Setup del componente.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Imposta le label di default se non personalizzate
        $this->labels = array_merge([
            'region' => 'ui::location_selector.region.label',
<<<<<<< HEAD
<<<<<<< HEAD
            'province' => 'ui::location_selector.province.label',
=======
            'province' => 'ui::location_selector.province.label', 
>>>>>>> 60908d2 (.)
=======
            'province' => 'ui::location_selector.province.label', 
>>>>>>> 90e8530 (.)
            'cap' => 'ui::location_selector.cap.label',
        ], $this->labels);

        // Imposta i placeholder di default se non personalizzati
        $this->placeholders = array_merge([
            'region' => 'ui::location_selector.region.placeholder',
            'province' => 'ui::location_selector.province.placeholder',
            'cap' => 'ui::location_selector.cap.placeholder',
        ], $this->placeholders);

        // Configura lo schema dei campi figlio
        $this->schema($this->getChildComponentsSchema());
    }

    /**
     * Imposta il nome del campo regione.
     */
    public function regionField(string $fieldName): static
    {
        $this->regionFieldName = $fieldName;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Imposta il nome del campo provincia.
     */
    public function provinceField(string $fieldName): static
    {
        $this->provinceFieldName = $fieldName;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Imposta il nome del campo CAP.
     */
    public function capField(string $fieldName): static
    {
        $this->capFieldName = $fieldName;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Rende tutti i campi required.
     */
    public function required(bool $condition = true): static
    {
        $this->required = $condition;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Abilita/disabilita la ricerca in tutti i select.
     */
    public function searchable(bool $condition = true): static
    {
        $this->searchable = $condition;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Imposta label personalizzate.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  array<string, string>  $labels
=======
     * 
     * @param array<string, string> $labels
>>>>>>> 60908d2 (.)
=======
     * 
     * @param array<string, string> $labels
>>>>>>> 90e8530 (.)
     */
    public function labels(array $labels): static
    {
        $this->labels = array_merge($this->labels, $labels);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Imposta placeholder personalizzati.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  array<string, string>  $placeholders
=======
     * 
     * @param array<string, string> $placeholders
>>>>>>> 60908d2 (.)
=======
     * 
     * @param array<string, string> $placeholders
>>>>>>> 90e8530 (.)
     */
    public function placeholders(array $placeholders): static
    {
        $this->placeholders = array_merge($this->placeholders, $placeholders);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
        return $this;
    }

    /**
     * Genera lo schema dei componenti figlio.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
=======
     * 
>>>>>>> 90e8530 (.)
     * @return array<Component>
     */
    protected function getChildComponentsSchema(): array
    {
        return [
            // Campo Regione
            Select::make($this->regionFieldName)
                ->label($this->labels['region'])
                ->placeholder($this->placeholders['region'])
                ->options($this->getRegionOptions())
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
                ->afterStateUpdated(function (Set $set) {
                    // Reset province e cap quando cambia la regione
                    $set($this->provinceFieldName, null);
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.region.help')
<<<<<<< HEAD
<<<<<<< HEAD
                ),
=======
            ),
>>>>>>> 60908d2 (.)
=======
            ),
>>>>>>> 90e8530 (.)

            // Campo Provincia
            Select::make($this->provinceFieldName)
                ->label($this->labels['province'])
                ->placeholder($this->placeholders['province'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
                    return is_string($region) ? $this->getProvinceOptions($region) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
                ->live()
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName))
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName))
>>>>>>> 60908d2 (.)
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName))
>>>>>>> 90e8530 (.)
                ->afterStateUpdated(function (Set $set) {
                    // Reset cap quando cambia la provincia
                    $set($this->capFieldName, null);
                })
                ->helperText(__('ui::location_selector.province.help')
<<<<<<< HEAD
<<<<<<< HEAD
                ),
=======
            ),
>>>>>>> 60908d2 (.)
=======
            ),
>>>>>>> 90e8530 (.)

            // Campo CAP
            Select::make($this->capFieldName)
                ->label($this->labels['cap'])
                ->placeholder($this->placeholders['cap'])
                ->options(function (Get $get): array {
                    $region = $get($this->regionFieldName);
                    $province = $get($this->provinceFieldName);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60908d2 (.)
=======
>>>>>>> 90e8530 (.)
                    return (is_string($region) && is_string($province)) ? $this->getCapOptions($region, $province) : [];
                })
                ->searchable($this->searchable)
                ->required($this->required)
<<<<<<< HEAD
<<<<<<< HEAD
                ->disabled(fn (Get $get): bool => ! $get($this->regionFieldName) || ! $get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')
                ),
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')
            ),
>>>>>>> 60908d2 (.)
=======
                ->disabled(fn (Get $get): bool => !$get($this->regionFieldName) || !$get($this->provinceFieldName))
                ->helperText(__('ui::location_selector.cap.help')
            ),
>>>>>>> 90e8530 (.)
        ];
    }

    /**
     * Ottiene le opzioni per il campo regione.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
=======
     * 
>>>>>>> 90e8530 (.)
     * @return array<string, string>
     */
    protected function getRegionOptions(): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::select('regione')
                ->distinct()
                ->orderBy('regione->nome')
                ->get()
                ->pluck('regione.nome', 'regione.codice')
                ->toArray();
        } catch (\Exception $e) {
            // Log dell'errore per debug
            Log::error('LocationSelector: Errore nel caricamento regioni', [
                'error' => $e->getMessage(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 60908d2 (.)
=======
            
>>>>>>> 90e8530 (.)
            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo provincia basate sulla regione.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  string  $region  Codice regione
=======
     * 
     * @param string $region Codice regione
>>>>>>> 60908d2 (.)
=======
     * 
     * @param string $region Codice regione
>>>>>>> 90e8530 (.)
     * @return array<string, string>
     */
    protected function getProvinceOptions(string $region): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::query()
                ->where('regione->codice', $region)
                ->select('provincia')
                ->distinct()
                ->orderBy('provincia->nome')
                ->get()
                ->pluck('provincia.nome', 'provincia.codice')
                ->toArray();
        } catch (\Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento province', [
                'region' => $region,
                'error' => $e->getMessage(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 60908d2 (.)
=======
            
>>>>>>> 90e8530 (.)
            return [];
        }
    }

    /**
     * Ottiene le opzioni per il campo CAP basate su regione e provincia.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  string  $region  Codice regione
     * @param  string  $province  Codice provincia
=======
     * 
     * @param string $region Codice regione
     * @param string $province Codice provincia
>>>>>>> 60908d2 (.)
=======
     * 
     * @param string $region Codice regione
     * @param string $province Codice provincia
>>>>>>> 90e8530 (.)
     * @return array<string, string>
     */
    protected function getCapOptions(string $region, string $province): array
    {
        try {
            /** @phpstan-ignore return.type */
            return Comune::query()
                ->where('regione->codice', $region)
                ->where('provincia->codice', $province)
                ->select('cap')
                ->distinct()
                ->orderBy('cap')
                ->get()
                ->pluck('cap.0', 'cap.0')
                ->toArray();
        } catch (\Exception $e) {
            Log::error('LocationSelector: Errore nel caricamento CAP', [
                'region' => $region,
                'province' => $province,
                'error' => $e->getMessage(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 60908d2 (.)
=======
            
>>>>>>> 90e8530 (.)
            return [];
        }
    }

    /**
     * Validazione custom per verificare la coerenza dei dati.
     */
    public function validate(): array
    {
        $state = $this->getState();
        $errors = [];

        // Verifica che se è selezionata una provincia, sia selezionata anche la regione
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
=======
        if (!empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
>>>>>>> 60908d2 (.)
=======
        if (!empty($state[$this->provinceFieldName]) && empty($state[$this->regionFieldName])) {
>>>>>>> 90e8530 (.)
            $errors[] = __('ui::location_selector.validation.region_required_for_province');
        }

        // Verifica che se è selezionato un CAP, siano selezionate regione e provincia
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible, offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($state[$this->capFieldName]) && (empty($state[$this->regionFieldName]) || empty($state[$this->provinceFieldName]))) {
=======
        if (!empty($state[$this->capFieldName]) && (empty($state[$this->regionFieldName]) || empty($state[$this->provinceFieldName]))) {
>>>>>>> 60908d2 (.)
=======
        if (!empty($state[$this->capFieldName]) && (empty($state[$this->regionFieldName]) || empty($state[$this->provinceFieldName]))) {
>>>>>>> 90e8530 (.)
            $errors[] = __('ui::location_selector.validation.region_province_required_for_cap');
        }

        return $errors;
    }

    /**
     * Ottiene i dati geografici completi basati sulla selezione corrente.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 60908d2 (.)
=======
     * 
>>>>>>> 90e8530 (.)
     * @return array<string, mixed>|null
     */
    public function getGeographicData(): ?array
    {
        $state = $this->getState();
        /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
        if (empty($state[$this->regionFieldName])) {
            return null;
        }

        try {
            $query = Comune::query()
                ->where('regione->codice', $state[$this->regionFieldName]);

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
<<<<<<< HEAD
            if (! empty($state[$this->provinceFieldName])) {
=======
            if (!empty($state[$this->provinceFieldName])) {
>>>>>>> 60908d2 (.)
=======
            if (!empty($state[$this->provinceFieldName])) {
>>>>>>> 90e8530 (.)
                $query->where('provincia->codice', $state[$this->provinceFieldName]);
            }

            /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
<<<<<<< HEAD
            if (! empty($state[$this->capFieldName])) {
=======
            if (!empty($state[$this->capFieldName])) {
>>>>>>> 60908d2 (.)
=======
            if (!empty($state[$this->capFieldName])) {
>>>>>>> 90e8530 (.)
                $query->where('cap->0', $state[$this->capFieldName]);
            }

            $comune = $query->first();

<<<<<<< HEAD
<<<<<<< HEAD
            if (! $comune) {
=======
            if (!$comune) {
>>>>>>> 60908d2 (.)
=======
            if (!$comune) {
>>>>>>> 90e8530 (.)
                return null;
            }

            return [
                'region' => [
                    'code' => $comune->regione['codice'] ?? null,
                    'name' => $comune->regione['nome'] ?? null,
                ],
                'province' => [
                    'code' => $comune->provincia['codice'] ?? null,
                    'name' => $comune->provincia['nome'] ?? null,
                ],
                /** @phpstan-ignore offsetAccess.nonOffsetAccessible */
                'cap' => $state[$this->capFieldName] ?? null,
                /** @phpstan-ignore-next-line */
                'city' => $comune->nome ?? null,
            ];
        } catch (\Exception $e) {
            Log::error('LocationSelector: Errore nel recupero dati geografici', [
                'state' => $state,
                'error' => $e->getMessage(),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

            return null;
        }
    }
}
=======
            
            return null;
        }
    }
} 
>>>>>>> 60908d2 (.)
=======
            
            return null;
        }
    }
} 
>>>>>>> 90e8530 (.)
