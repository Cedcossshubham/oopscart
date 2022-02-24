<?php 

class products{
    public int $id;
    public string $image;
    public string $name;
    public float $price;
    public float $tPrice;

    

    public function __construct($id,$image,$name,$price,$qnty,$tPrice)
    {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->qnty = $qnty;
        $this->tPrice = $tPrice;
    }

}

