<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

enum TableLayout: string
{
    case LIST = 'list';
    case GRID = 'grid';

    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> 60908d2 (.)
=======
        return match($this) {
>>>>>>> 90e8530 (.)
            self::LIST => 'List View',
            self::GRID => 'Grid View',
        };
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> 60908d2 (.)
=======
        return match($this) {
>>>>>>> 90e8530 (.)
            self::LIST => 'primary',
            self::GRID => 'secondary',
        };
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> 60908d2 (.)
=======
        return match($this) {
>>>>>>> 90e8530 (.)
            self::LIST => 'heroicon-o-list-bullet',
            self::GRID => 'heroicon-o-squares-2x2',
        };
    }

    public function toggle(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> 60908d2 (.)
=======
        return match($this) {
>>>>>>> 90e8530 (.)
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
    }
}
