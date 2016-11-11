<?php
/**
 * PostTransformer.php -- a sample
 *
 */
namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    public function transform($data)
    {
        return $data->toArray();
    }
}
