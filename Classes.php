<?php
class car_model {
    public $model;
    public $engine;
    public $recipt;

    public $model_name;
    public static $minModelLength = 10;

    public static function validateModel_name($model_name){
        if (strlen($model_name) >= self::$minModelLength) {
            return true;

        }else{
            return false;
        }
    }


    function __construct ($model, $engine, $recipt) {
        $this -> model = $model;
        $this -> engine = $engine;
        $this -> recipt = $recipt;
    }

    function set_model($model){
        $this->model = $model;
    }

    function get_model() {
        return $this -> model;
    }

    function get_engine() {
        return $this ->engine;
    }

     function get_recipt() {
        return $this->recipt;
    }
}
class car_warranty extends car_model {
    public  function set_model($model){
        if($model == 'Nissan' || 'Ferrari'){
            $this->model = $model;
        } else if ($model == 'Nissan' || 'Ferrari')
            car_model:: set_model($model);
    }
}
?>