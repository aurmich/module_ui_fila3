{{--
/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * InlineDatePicker View - KISS Principle
 * 
 * La logica è nella classe PHP InlineDatePicker.php
 * Questa vista si limita a renderizzare i dati ricevuti
=======
 * InlineDatePicker View: Manifestazione Visuale del Continuum Temporale
 * 
 * Questa view rappresenta la materializzazione fisica dell'essenza
 * temporale, dove ogni giorno esiste come un punto nell'universo
 * delle possibilità, aspettando il collasso quantistico della selezione.
 * 
 * @philosophy
 * - Geometria dell'Informazione: Layout a griglia 7x6 per armonia settimanale
 * - Cromatismo Semantico: Colori che comunicano stati ontologici
 * - Interattività Fenomenologica: Ogni click è un atto di volontà temporale
 * - Accessibilità Universale: Navigazione semantica per screen reader
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
 * InlineDatePicker View - Design One Theme
 * 
 * Implementa il design calendar.html con:
 * - Navigazione puramente frontend (Alpine.js)
 * - Localizzazione tramite Carbon (no traduzioni)
 * - UI/UX conforme al tema One
 * - Principi DRY e KISS
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
=======
 * InlineDatePicker View - KISS Principle
 * 
 * La logica è nella classe PHP InlineDatePicker.php
 * Questa vista si limita a renderizzare i dati ricevuti
>>>>>>> 16a242b3 (✨ (InlineDatePicker): implement advanced navigation architecture for better UX and performance)
 */
--}}

@php
<<<<<<< HEAD
<<<<<<< HEAD
    $statePath = $getStatePath();
    $calendarData = $calendarData ?? [];
    $currentValue = $currentValue ?? null;
    $enabledDates = $enabledDates ?? collect();
    $currentViewMonth = $currentViewMonth ?? now()->format('Y-m');
    $monthName = $monthName ?? 'Loading...';
    $weekdays = $weekdays ?? ['L', 'M', 'M', 'G', 'V', 'S', 'D'];
<<<<<<< HEAD
=======
    $id = $getId();
    $statePath = $getStatePath();
    $calendar = $calendar ?? [];
    $enabledDates = $enabledDates ?? [];
    $compactMode = $compactMode ?? false;
    $showNavigation = $showNavigation ?? true;
    $highlightColor = $highlightColor ?? 'bg-indigo-600 text-white';
    $currentValue = $getState();
    $componentId = $componentId ?? uniqid('inline-date-picker-');
    // Dati per navigazione
    $currentViewMonth = $getViewData()['currentViewMonth'] ?? now();
    $previousMonth = $getViewData()['previousMonth'] ?? now()->subMonth();
    $nextMonth = $getViewData()['nextMonth'] ?? now()->addMonth();
    $monthYearLabel = $getViewData()['monthYearLabel'] ?? 'Gennaio 2025';
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
    $statePath = $getStatePath();
    $calendarData = $calendarData ?? [];
    $currentValue = $currentValue ?? null;
    $enabledDates = $enabledDates ?? collect();
    $currentViewMonth = $currentViewMonth ?? now()->format('Y-m');
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
=======
>>>>>>> 16a242b3 (✨ (InlineDatePicker): implement advanced navigation architecture for better UX and performance)
@endphp

<x-dynamic-component 
    :component="$getFieldWrapperView()" 
    :field="$field"
>
    <div 
<<<<<<< HEAD
<<<<<<< HEAD
        x-data="{
            selectedDate: @js($currentValue),
            enabledDates: @js($enabledDates->toArray()),
            
            selectDate(dateString) {
                if (this.enabledDates.includes(dateString)) {
                    // Data abilitata: seleziona
                    this.selectedDate = dateString;
                    $wire.set('{{ $statePath }}', dateString);
                } else {
                    // Data NON abilitata: deseleziona tutto
                    this.selectedDate = null;
                    $wire.set('{{ $statePath }}', null);
                }
            },
            // ✅ Metodi per navigazione mese - chiamata diretta al widget parent
            previousMonth() {
                $wire.call('previousMonth');
            },
            nextMonth() {
                $wire.call('nextMonth');
            }
        }"
        class="space-y-4"
    >
        <!-- Container calendario -->
        <div class="relative">
            <!-- Navigazione -->
            <button 
                type="button" 
                wire:click="previousMonth()"
                class="absolute -left-1.5 -top-1 flex items-center justify-center h-8 w-8 bg-white border border-gray-300 rounded-full shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 z-10"
            >
                <svg class="h-4 w-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button 
                type="button" 
                wire:click="nextMonth()"
                class="absolute -right-1.5 -top-1 flex items-center justify-center h-8 w-8 bg-white border border-gray-300 rounded-full shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 z-10"
            >
                <svg class="h-4 w-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Calendario -->
            <section class="text-center">
                <!-- Titolo mese -->
                <h2 class="text-sm font-semibold text-gray-900">{{ $monthName }}</h2>
                
                <!-- Intestazioni giorni -->
                <div class="mt-6 grid grid-cols-7 text-xs/6 text-gray-500">
                    @foreach($weekdays as $weekday)
                        <div>{{ $weekday }}</div>
                    @endforeach
                </div>
                
                <!-- Griglia calendario -->
                <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                    @if(isset($calendarData['weeks']) && is_array($calendarData['weeks']))
                        @foreach($calendarData['weeks'] as $week)
                            @foreach($week as $day)
                                @php
                                    $isEnabled = $enabledDates->contains($day['dateString']);
                                    $isSelected = $currentValue === $day['dateString'];
                                    $isCurrentMonth = $day['isCurrentMonth'];
                                    
                                    // ✅ Pre-calcolo classi CSS per performance
                                    if ($isSelected) {
                                        $classes = 'relative py-2 px-1 text-sm font-semibold bg-blue-600 text-white ring-2 ring-blue-600 ring-offset-2 shadow-lg z-10';
                                    } elseif ($isEnabled && $isCurrentMonth) {
                                        $classes = 'relative py-2 px-1 text-sm font-semibold bg-green-50 text-green-700 border-2 border-green-200 hover:bg-green-100 cursor-pointer';
                                    } elseif ($isCurrentMonth) {
                                        $classes = 'relative py-2 px-1 text-sm font-medium bg-gray-50 text-gray-400 border border-gray-200 cursor-not-allowed opacity-60';
                                    } else {
                                        $classes = 'relative py-2 px-1 text-sm font-medium bg-gray-50/30 text-gray-300 cursor-not-allowed opacity-40';
                                    }
                                @endphp
                                
                                <button 
                                    type="button" 
                                    x-on:click="selectDate('{{ $day['dateString'] }}')"
                                    class="{{ $classes }}"
                                >
                                    {{ $day['day'] }}
                                    
                                    @if($isEnabled && $isCurrentMonth)
                                        <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                    @endif
                                    
                                    @if($isSelected)
                                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-blue-400 rounded-full"></span>
                                    @endif
                                </button>
                            @endforeach
                        @endforeach
                    @else
                        <div class="col-span-7 p-4 text-center text-gray-500">Caricamento calendario...</div>
                    @endif
                </div>

               
            </section>
        </div>
    </div>
</x-dynamic-component>

{{-- CSS minimo --}}
<style>
.inline-date-picker button {
    transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
}
=======
        id="{{ $componentId }}"
        class="inline-date-picker-container {{ $compactMode ? 'compact-mode' : '' }}"
=======
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
        x-data="{
            selectedDate: @js($currentValue),
            enabledDates: @js($enabledDates->toArray()),
            
            selectDate(dateString) {
                if (this.enabledDates.includes(dateString)) {
                    // Data abilitata: seleziona
                    this.selectedDate = dateString;
                    $wire.set('{{ $statePath }}', dateString);
                } else {
                    // Data NON abilitata: deseleziona tutto
                    this.selectedDate = null;
                    $wire.set('{{ $statePath }}', null);
                }
            },
            // ✅ Metodi per navigazione mese - chiamata diretta al widget parent
            previousMonth() {
                $wire.call('previousMonth');
            },
            nextMonth() {
                $wire.call('nextMonth');
            }
        }"
        class="space-y-4"
    >
        <!-- Container calendario -->
        <div class="relative">
            <!-- Navigazione -->
            <button 
                type="button" 
                wire:click="previousMonth()"
                class="absolute -left-1.5 -top-1 flex items-center justify-center h-8 w-8 bg-white border border-gray-300 rounded-full shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 z-10"
            >
                <svg class="h-4 w-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button 
                type="button" 
                wire:click="nextMonth()"
                class="absolute -right-1.5 -top-1 flex items-center justify-center h-8 w-8 bg-white border border-gray-300 rounded-full shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 z-10"
            >
                <svg class="h-4 w-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Calendario -->
            <section class="text-center">
                <!-- Titolo mese -->
                <h2 class="text-sm font-semibold text-gray-900">{{ $monthName }}</h2>
                
                <!-- Intestazioni giorni -->
                <div class="mt-6 grid grid-cols-7 text-xs/6 text-gray-500">
                    @foreach($weekdays as $weekday)
                        <div>{{ $weekday }}</div>
                    @endforeach
                </div>
                
                <!-- Griglia calendario -->
                <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                    @if(isset($calendarData['weeks']) && is_array($calendarData['weeks']))
                        @foreach($calendarData['weeks'] as $week)
                            @foreach($week as $day)
                                @php
                                    $isEnabled = $enabledDates->contains($day['dateString']);
                                    $isSelected = $currentValue === $day['dateString'];
                                    $isCurrentMonth = $day['isCurrentMonth'];
                                    
                                    // ✅ Pre-calcolo classi CSS per performance
                                    if ($isSelected) {
                                        $classes = 'relative py-2 px-1 text-sm font-semibold bg-blue-600 text-white ring-2 ring-blue-600 ring-offset-2 shadow-lg z-10';
                                    } elseif ($isEnabled && $isCurrentMonth) {
                                        $classes = 'relative py-2 px-1 text-sm font-semibold bg-green-50 text-green-700 border-2 border-green-200 hover:bg-green-100 cursor-pointer';
                                    } elseif ($isCurrentMonth) {
                                        $classes = 'relative py-2 px-1 text-sm font-medium bg-gray-50 text-gray-400 border border-gray-200 cursor-not-allowed opacity-60';
                                    } else {
                                        $classes = 'relative py-2 px-1 text-sm font-medium bg-gray-50/30 text-gray-300 cursor-not-allowed opacity-40';
                                    }
                                @endphp
                                
                                <button 
                                    type="button" 
                                    x-on:click="selectDate('{{ $day['dateString'] }}')"
                                    class="{{ $classes }}"
                                >
                                    {{ $day['day'] }}
                                    
                                    @if($isEnabled && $isCurrentMonth)
                                        <span class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                    @endif
                                    
                                    @if($isSelected)
                                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-blue-400 rounded-full"></span>
                                    @endif
                                </button>
                            @endforeach
                        @endforeach
                    @else
                        <div class="col-span-7 p-4 text-center text-gray-500">Caricamento calendario...</div>
                    @endif
                </div>

               
            </section>
        </div>
    </div>
</x-dynamic-component>

{{-- CSS minimo --}}
<style>
.inline-date-picker button {
    transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
}
<<<<<<< HEAD

/* Stato di Focus: L'Attenzione nel Continuum */
.inline-date-picker button:focus {
    transform: scale(1.05);
}

/* Pulse Animation per Date Speciali */
.inline-date-picker .special-date {
    animation: gentle-pulse 2s infinite;
}

@keyframes gentle-pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

/* Effetto Hover Quantistico */
.inline-date-picker button:hover:not(:disabled) time {
    transform: scale(1.1);
}

/* Dark Mode: L'Esistenza nell'Ombra */
@media (prefers-color-scheme: dark) {
    .inline-date-picker {
        color-scheme: dark;
    }
}

/* Responsività: Adattamento agli Schermi dell'Universo */
@media (max-width: 640px) {
    .inline-date-picker time {
        width: 2rem;
        height: 2rem;
        font-size: 0.875rem;
    }
}
>>>>>>> 71e6efbe (✨ feat: add InlineDatePicker component for enhanced date selection in forms)
=======
>>>>>>> 794947dd (✨ (InlineDatePicker): introduce InlineDatePicker component with multilingual support and enhanced navigation features)
</style> 