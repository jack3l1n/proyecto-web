<?php


class TareasController extends Controller{
    
    public function actionIndex(){
        $model=Tareas::model();
        $tareas=$model->findAll();
        $this->render('index', array('tareas'=>$tareas));
    }

    public function actionView($id){
        $model = Tareas::model()->findByPK($id);
        $this->render('view', array('model'=>$model));    
    }

    public function actionEdit($id){
        $model = Tareas::model()->findByPK($id);
        if(isset($_POST['Tareas'])){
            $model->attributes=$_POST['Tareas'];
            if($model->save())
                $this->redirect(array('view', 'id'=>$model->id));
        }
        $this->render('edit', array('model'=>$model));
    }
    public function actionAdd(){
        $model=new Tareas();
        if (isset($_POST['Tareas'])){
        $model->attributes-$_POST['Tareas'];
        if($model->save())
            $this->redirect(array('view','id'=>$model->id));
        }
        $this->render('add',array('model'=>$model));
         
        }
    public function actionDelete($id){
    $model= Tareas::model()-> findByPK($id);
        $model->delete();
    $this->redirect(array('index'));
    }
}