<?php
/**
 * ModelBase.php
 *
 */
namespace App\Models;

abstract class ModelBase extends \Pails\Mvc\Model
{
    public function getSource()
    {
        $source = parent::getSource();
        return str_plural($source);
    }
}
