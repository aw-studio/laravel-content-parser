<?php

namespace AwStudio\ContentParser;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class SiteContent implements CastsAttributes
{
    /**
     * Create new SiteContent instance.
     *
     * @param  string $collection
     * @return void
     */
    public function __construct(
        protected $collection = Content::class
    ) {
        //
    }

    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string                              $key
     * @param  mixed                               $value
     * @param  array                               $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        $items = json_decode($value, true);

        return new ($this->collection)($model, $items);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string                              $key
     * @param  mixed                               $value
     * @param  array                               $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value);
    }
}
