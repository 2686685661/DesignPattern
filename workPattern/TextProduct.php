<?php
include_once('Product.php');

class TextProduct implements Product {
    private $mfgProduct;
    public function getProperties() {
        $this->mfgProduct = 'this is text';
        return $this->mfgProduct;
    }
}

?>