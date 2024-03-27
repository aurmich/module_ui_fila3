<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder as QueryBuilder;
// use Laravel\Scout\Builder as ScoutBuilder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Modules\Xot\Actions\Collection\TransCollectionAction;

// use Staudenmeir\LaravelCte\Query\Builder as CteBuilder;

class QueryExport implements FromQuery, ShouldQueue, WithHeadings, WithChunkReading, WithMapping
{
    use Exportable;

    public array $headings = [];
    public ?array $fields = null;

    public ?string $transKey = null;

    public QueryBuilder|EloquentBuilder $query;

    public function __construct(QueryBuilder|EloquentBuilder $query, ?string $transKey = null, ?array $fields = null)
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
        $this->headings = collect($query->first())
            ->keys()
            ->map(
                function ($item) use ($transKey) {
                    $t = $transKey.'.'.$item;
                    $trans = trans($t);
                    if ($trans != $t) {
                        return $trans;
                    }

                    return $item;
                }
            )
            ->toArray();
        */
    }

    public function getHead(): Collection
    {
        if (is_array($this->fields)) {
            return collect($this->fields);
        }
        /**
         * @var \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null
         */
        $first = $this->query->first();
        if (null === $first) {
            return collect([]);
        }

        // Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
    }

    public function headings(): array
    {
        $headings = $this->getHead();
        $transKey = $this->transKey;
        $headings = app(TransCollectionAction::class)->execute($headings, $transKey);

        return $headings->toArray();
    }

    /**
     * se si usa scout aggiungere |ScoutBuilder.
     */
    public function query(): QueryBuilder|EloquentBuilder|Relation
    {
        return $this->query->orderBy('id');
    }

    public function chunkSize(): int
    {
        return 200;
    }

    /**
     * @param \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
     */
    public function map($item): array
    {
        if (null === $this->fields) {
            return collect($item)->toArray();
        }

        // rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)
            ->only($this->fields)
            ->toArray();
    }
}
