<?php

class SkillTypeModel extends Illuminate\Database\Eloquent\Model {
    protected $table = 'skill_type';
    public $timestamps = false;

    public function groups()
    {
        return $this->hasMany(SkillGroupModel::class, 'id_skill_type', 'id');
    }


    public function getName() {
        return $this->{'name_' . Context::getContext()->getLanguage()};
    }


    public function getDescription() {
        return $this->{'description_' . Context::getContext()->getLanguage()};
    }

}