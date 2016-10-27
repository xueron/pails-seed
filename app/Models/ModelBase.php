<?php
/**
 * ModelBase.php
 *
 */
namespace App\Models;

abstract class ModelBase extends \Pails\Mvc\Model
{
//  uncomment me to make rails like models name
//
//    public function getSource()
//    {
//        $source = parent::getSource();
//        if ($this->getDI()->has('inflector')) {
//            return $this->getDI()->get('inflector')->pluralize($source);
//        }
//        return $source;
//    }
}
