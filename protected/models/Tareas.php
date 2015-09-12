<?php


Class Tareas extends CActiveRecord{
    
    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function rules(){
        return array(
                    array('nombre, descripcion', 'required')
                );
    }

}