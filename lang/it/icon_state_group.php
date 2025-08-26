<?php

declare(strict_types=1);

return [
    'fields' => [
        'name' => [
            'label' => 'Nome',
        ],
        'first_name' => [
            'label' => 'Nome',
        ],
        'suspended' => [
            'label' => 'Sospeso',
        ],
        'rejected' => [
            'label' => 'Rifiutato',
        ],
        'pending' => [
            'label' => 'In attesa',
        ],
        'integration_requested' => [
            'label' => 'Integrazione richiesta',
        ],
        'integration_completed' => [
            'label' => 'Integrazione completata',
        ],
        'inactive' => [
            'label' => 'Inattivo',
        ],
        'active' => [
            'label' => 'Attivo',
        ],
        'state' => [
            'label' => 'Stato',
        ],
        'state_action' => [
            'label' => 'Azione stato',
        ],
        'scheduled' => [
            'label' => 'Programmato',
        ],
        'rescheduled' => [
            'label' => 'Riprogrammato',
        ],
        'report_pending' => [
            'label' => 'Report in attesa',
        ],
        'report_completed' => [
            'label' => 'Report completato',
        ],
        'refund_to_integrate' => [
            'label' => 'Rimborso da integrare',
        ],
        'refund_pending' => [
            'label' => 'Rimborso in attesa',
        ],
        'refund_completed' => [
            'label' => 'Rimborso completato',
        ],
        'refund_accepted' => [
            'label' => 'Rimborso accettato',
        ],
        'pro_bono' => [
            'label' => 'Pro bono',
        ],
        'no_show' => [
            'label' => 'Non presentato',
        ],
        'in_progress' => [
            'label' => 'In corso',
        ],
        'd27993a5-70e9-42c2-b961-9b00ffa459dc' => [
            'label' => 'UUID specifico',
        ],
    ],
    
    'states' => [
        'active' => [
            'label' => 'Attivo',
            'description' => 'Stato attivo del sistema',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'success',
        ],
        'inactive' => [
            'label' => 'Inattivo',
            'description' => 'Stato inattivo del sistema',
            'icon' => 'heroicon-o-x-circle',
            'color' => 'danger',
        ],
        'pending' => [
            'label' => 'In attesa',
            'description' => 'Stato in attesa di approvazione',
            'icon' => 'heroicon-o-clock',
            'color' => 'warning',
        ],
        'suspended' => [
            'label' => 'Sospeso',
            'description' => 'Stato sospeso temporaneamente',
            'icon' => 'heroicon-o-pause',
            'color' => 'warning',
        ],
        'rejected' => [
            'label' => 'Rifiutato',
            'description' => 'Stato rifiutato',
            'icon' => 'heroicon-o-x-mark',
            'color' => 'danger',
        ],
    ],
    
    'actions' => [
        'change_state' => [
            'label' => 'Cambia stato',
            'description' => 'Modifica lo stato corrente',
            'success' => 'Stato modificato con successo',
            'error' => 'Errore durante la modifica dello stato',
        ],
        'activate' => [
            'label' => 'Attiva',
            'description' => 'Attiva l\'elemento',
            'success' => 'Elemento attivato con successo',
        ],
        'deactivate' => [
            'label' => 'Disattiva',
            'description' => 'Disattiva l\'elemento',
            'success' => 'Elemento disattivato con successo',
        ],
        'suspend' => [
            'label' => 'Sospendi',
            'description' => 'Sospende temporaneamente l\'elemento',
            'success' => 'Elemento sospeso con successo',
        ],
        'approve' => [
            'label' => 'Approva',
            'description' => 'Approva l\'elemento',
            'success' => 'Elemento approvato con successo',
        ],
        'reject' => [
            'label' => 'Rifiuta',
            'description' => 'Rifiuta l\'elemento',
            'success' => 'Elemento rifiutato con successo',
        ],
    ],
    
    'messages' => [
        'state_changed' => 'Stato modificato da :old_state a :new_state',
        'state_change_failed' => 'Impossibile modificare lo stato',
        'invalid_transition' => 'Transizione di stato non valida',
        'state_required' => 'Lo stato è obbligatorio',
        'message_required' => 'Il messaggio è obbligatorio per questa transizione',
    ],
    
    'validation' => [
        'state_exists' => 'Lo stato selezionato non esiste',
        'transition_allowed' => 'La transizione di stato non è consentita',
        'message_min_length' => 'Il messaggio deve contenere almeno :min caratteri',
        'message_max_length' => 'Il messaggio non può superare :max caratteri',
    ],
];
