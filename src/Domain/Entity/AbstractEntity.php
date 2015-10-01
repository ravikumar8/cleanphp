<?php namespace Webloper\CleanPhp\Invoicer\Domain\Entity;

abstract class AbstractEntity   {
    protected $id;

    public function getID() {
        $this->id;
    }

    public function setID($id) {
        $this->id = $id;
        return $this;
    }
}
