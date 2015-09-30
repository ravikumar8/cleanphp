<?php namespace CleanPhp\Invoicer\Domain\Entity;

abstract class AbstractEntity   {
    protected $id;

    public function getID() {
        return $this->id;
    }

    public function setID( $id ) {
        $this->id = $id;
        return $this;
    }
}
