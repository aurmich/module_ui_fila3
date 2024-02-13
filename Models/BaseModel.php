<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// //use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     */
    public static bool $snakeAttributes = true;
    public bool $incrementing = true;
    public bool $timestamps = true;

    protected $perPage = 30;

    // use Searchable;
    // use Cachable;

    /**
     * @var array<string>
     */
    protected array $fillable = ['id'];
    /**
     * @var array<string, string>
     */
    protected array $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
    protected string $primaryKey = 'id';
    /**
     * @var array<int, string>
     */
    protected array $hidden = [
        // 'password'
    ];
    protected $connection = 'geo';
}
