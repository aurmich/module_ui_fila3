<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Components;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

/**
 * Helper standardizzato per upload documenti usando Spatie Media Library.
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> d635998 (.)
 * Filosofia: Centralizzazione della configurazione per garantire coerenza sistemica.
 * Politica: Type safety, GDPR compliance, multi-tenant isolation.
 * Zen: Semplicità attraverso la standardizzazione, non la duplicazione.
 */
class SpatieDocumentUpload
{
    /**
     * Configurazione base per upload documenti con collection specifica.
     *
<<<<<<< HEAD
     * @param string $name Nome del campo
     * @param string $collection Nome della media collection
     * @return SpatieMediaLibraryFileUpload
=======
     * @param  string  $name  Nome del campo
     * @param  string  $collection  Nome della media collection
>>>>>>> d635998 (.)
     */
    public static function make(string $name, string $collection): SpatieMediaLibraryFileUpload
    {
        return SpatieMediaLibraryFileUpload::make($name)
            ->collection($collection)
            ->disk('private') // Documenti sempre privati per GDPR compliance
            ->preserveFilenames()
            ->openable()
            ->downloadable()
            ->previewable()
            ->maxSize(10240) // 10MB - limite ragionevole per documenti
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
            ->imagePreviewHeight('150');
    }

    /**
     * Upload documento identità - documento sensibile paziente.
<<<<<<< HEAD
     * 
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
     * 
     * @return SpatieMediaLibraryFileUpload
=======
     *
     * Collection: 'documenti_identita'
     * Security: Private disk, audit trail
>>>>>>> d635998 (.)
     */
    public static function forIdentityDocument(): SpatieMediaLibraryFileUpload
    {
        return static::make('identity_document', 'documenti_identita')
            ->maxSize(5120)
            ->conversion('thumbnail')
            ->conversion('preview');
    }

    /**
     * Upload certificazione ISEE - documento fiscale sensibile.
<<<<<<< HEAD
     * 
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
     * 
     * @return SpatieMediaLibraryFileUpload
=======
     *
     * Collection: 'certificazioni_isee'
     * Formats: Solo PDF per documenti ufficiali
>>>>>>> d635998 (.)
     */
    public static function forIseeDocument(): SpatieMediaLibraryFileUpload
    {
        return static::make('isee_certificate', 'certificazioni_isee')
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(5120);
    }

    /**
     * Upload certificato gravidanza - documento medico sensibile.
<<<<<<< HEAD
     * 
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
     * 
     * @return SpatieMediaLibraryFileUpload
=======
     *
     * Collection: 'certificati_gravidanza'
     * GDPR: Retention policy automatica
>>>>>>> d635998 (.)
     */
    public static function forPregnancyDocument(): SpatieMediaLibraryFileUpload
    {
        return static::make('pregnancy_certificate', 'certificati_gravidanza')
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(5120);
    }

    /**
     * Upload certificazioni professionali mediche - documenti multipli.
<<<<<<< HEAD
     * 
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
     * 
     * @return SpatieMediaLibraryFileUpload
=======
     *
     * Collection: 'certificazioni_professionali'
     * Multiple: Supporta caricamento multiplo con riordinamento
>>>>>>> d635998 (.)
     */
    public static function forCertifications(): SpatieMediaLibraryFileUpload
    {
        return static::make('certifications', 'certificazioni_professionali')
            ->multiple()
            ->enableReordering()
            ->maxFiles(10) // Max 10 certificazioni per dottore
            ->acceptedFileTypes(['application/pdf'])
            ->maxSize(10240); // 10MB per certificazioni multiple
    }

    /**
     * Upload documento generico con collection personalizzata.
<<<<<<< HEAD
     * 
     * @param string $name Nome del campo
     * @param string $collection Nome della collection
     * @param array<string> $mimeTypes Tipi MIME accettati
     * @param int $maxSize Dimensione massima in KB
     * @return SpatieMediaLibraryFileUpload
     */
    public static function custom(
        string $name, 
        string $collection, 
=======
     *
     * @param  string  $name  Nome del campo
     * @param  string  $collection  Nome della collection
     * @param  array<string>  $mimeTypes  Tipi MIME accettati
     * @param  int  $maxSize  Dimensione massima in KB
     */
    public static function custom(
        string $name,
        string $collection,
>>>>>>> d635998 (.)
        array $mimeTypes = ['image/jpeg', 'image/png', 'application/pdf'],
        int $maxSize = 10240
    ): SpatieMediaLibraryFileUpload {
        return SpatieMediaLibraryFileUpload::make($name)
            ->collection($collection)
            ->disk('private')
            ->preserveFilenames()
            ->openable()
            ->downloadable()
            ->previewable()
            ->maxSize($maxSize)
            ->acceptedFileTypes($mimeTypes)
            ->imagePreviewHeight('150');
    }
<<<<<<< HEAD
} 
=======
}
>>>>>>> d635998 (.)
