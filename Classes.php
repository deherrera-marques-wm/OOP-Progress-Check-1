<?php
class car_model {
    public $model;
    public $engine;
    public $cpu;
    public $model_cpu;
    public $recipt;

    function __construct ($model, $engine, $cpu, $model_cpu , $recipt) {
        $this -> model = $model;
        $this -> engine = $engine;
        $this -> cpu = $cpu;
        $this -> model_cpu = $model_cpu;
        $this -> recipt = $recipt;
    }

    function set_model($model){
        $this->model = $model;
    }

    function get_model () {
        return $this -> model;
    }

    function get_model_cpu () {
        return $this -> model_cpu;
    }

    function get_cpu () {
        return $this -> cpu;
    }

    function get_engine () {
        return $this -> engine;
    }
    private function get_recipt(){
        return $this->recipt;
    }
}
class car_warranty extends car_model {
    public function set_model($model){
        if($model == 'Nissan' || 'Buick'){
            $this->model = $model;
        } else if ($model == 'Toyota' || 'Nissan')
            car:: set_name($model);
    }
}
?>