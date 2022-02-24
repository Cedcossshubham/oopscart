<?php

class cart{
    private array $cart;

    public function __construct()
    {
       $this->cart =array();
    }

    public function addToCart(products $product){

        if($this->isProductExist($product)){
            $product-> quantity = 1;
            array_push($this->cart,$product);
        }
       
    }


    private function isProductExist(products $product){
        foreach($this->cart as $key => $p){
            if($p->id == $product->id){
                $this->cart[$key]->quantity +=1;
                return false;
            }
        }

        return true;
    }


    public function removeProductFromCart($id){
        foreach($this->cart as $key => $p){
            if($p->id == $id){
              unset($this->cart[$key]);
              break;
            }
        }
    }


    public function editQuantity($id,$qnty){
        foreach($this->cart as $key => $p){
            if($p->id == $id){
              $this->cart[$key]->quantity = $qnty;
              break;
            }
        }
    }


    public function getCart(){
        return $this->cart;
    }


}