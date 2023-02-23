<?php
namespace Phalconeer\Data;

use Phalconeer\Data as This;

interface DataInterface extends CommonInterface
{
    public function dirty() : array;

    public function getPrimaryKey() : array;

    public function getPrimaryKeyValue() : array;

    public function isStored() : bool;

    public function setValueByKey(
        string $key,
        $value,
        $isSilent = false
    ) : self;

    public function merge(This\DataInterface $changes) : This\DataInterface;
}