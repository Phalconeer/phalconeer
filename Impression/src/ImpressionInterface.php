<?php
namespace Phalconeer\Impression;

use Phalconeer\Data;
use Phalconeer\Dto;

interface ImpressionInterface extends Dto\ArrayObjectExporterInterface,
                                        Data\TagableInterface
{
    public function setBody(array $body = null);
}