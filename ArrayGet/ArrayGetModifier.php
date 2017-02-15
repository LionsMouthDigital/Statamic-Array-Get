<?php

namespace Statamic\Addons\ArrayGet;

use Statamic\Extend\Modifier;

class ArrayGetModifier extends Modifier
{
    /**
     * Get a value from an array.
     *
     * @param array  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $key = array_get($params, '0', $context['zero_index']);

        $key = gettype($key) === 'string' && !in_array($key, $value)
            ? array_get($context, $key, $key)
            : $key;

        return array_get($value, $key);
    }
}
