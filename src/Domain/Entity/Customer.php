<?php namespace Webloper\CleanPhp\Invoicer\Domain\Entity;

class Customer extends AbstractEntity {
    protected $name;
    protected $email;
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function getEmail() {
        return $this->emailAddress;
    }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
}
