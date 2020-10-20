<?php

class SkillGroupModel extends Illuminate\Database\Eloquent\Model {
    protected $table = 'skill_group';
    public $timestamps = false;

    public function getName() {
        return $this->{'name_' . Context::getContext()->getLanguage()};
    }

}