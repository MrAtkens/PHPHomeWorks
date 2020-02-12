<?php
class Matrix {
    private $matrix;

    public function __construct(array $arr)
    {
        $this->matrix = $arr;
    }

    public function add(Matrix $matrix){
        $array = $matrix->toArray();
        for($i=0; $i<count($array); $i++){
            for($j=0;$j<count($array[$i]); $j++){
                if(is_numeric($this->matrix[$i][$j]) && is_numeric($array[$i][$j]))
                    $this->matrix[$i][$j] += $array[$i][$j];
            }
        }
    }

    public function diff(Matrix $matrix){
        $array = $matrix->toArray();
        for($i=0; $i<count($array); $i++){
            for($j=0;$j<count($array[$i]); $j++){
                if(is_numeric($this->matrix[$i][$j]) && is_numeric($array[$i][$j]))
                    $this->matrix[$i][$j] -= $array[$i][$j];
            }
        }
    }

    public function mult(Matrix $matrix){

        $array = $matrix->toArray();
        for($i=0; $i<count($array); $i++){
            for($j=0;$j<count($array[$i]); $j++){
                if(is_numeric($this->matrix[$i][$j]) && is_numeric($array[$i][$j]))
                    $this->matrix[$i][$j] *= $array[$i][$j];
            }
        }
    }

    public function toArray() : array {
        return $this->matrix;
    }

}
