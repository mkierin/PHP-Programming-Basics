<?php

class Product
{

    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => '3D Camera',
            'code' => '3DcAM01',
            'image' => 'images/image1.png',
            'price' => '1500.00'
        ),
        "USB02" => array(
            'id' => '2',
            'name' => 'External Hard Drive',
            'code' => 'USB02',
            'image' => 'images/image2.png',
            'price' => '800.00'
        ),
        "wristWear03" => array(
            'id' => '3',
            'name' => 'Wrist Watch',
            'code' => 'wristWear03',
            'image' => 'images/image3.png',
            'price' => '300.00'
        )
    );
#function get all product returns all the products from the array
    public function getAllProduct()
    {
        return $this->productArray;
    }
}
