<?php

class PassionModel extends Illuminate\Database\Eloquent\Model {
    protected $table = 'passions';
    public $timestamps = false;

    public function getName() {
        return $this->{'name_' . Context::getContext()->getLanguage()};
    }

}