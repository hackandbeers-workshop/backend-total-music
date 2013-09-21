<?php
namespace TotalMusic\Repository;
use TotalMusic\Entity\Entity;

abstract class Repository
{
    abstract public function findBy($criteria, $value);
}