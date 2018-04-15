<?php
include_once('Product.php');

class GraphicProduct implements Product {
    private $mfgProduct;

    public function getProperties() {
        $this->mfgProduct = 'this is a graphic';
        return $this->mfgProduct;
    }
}

?>