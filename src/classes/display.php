<?php

class display{
    private array $productList;

    public function __construct()
    {
        $this->productList = array();
    }


    public function addToDisplay(products $product){

        array_push($this->productList,$product);
    }


    public function getProducts(){
        return $this->productList;
    }

    public function isIdExist($id){
        foreach($this->productList as $key => $p){
            if($p->id == $id){
                return $p;
            }
        }
    }
}
