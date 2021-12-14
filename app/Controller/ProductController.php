<?php
include_once "app/Models/ProductModel.php";
class ProductController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function showAll()
    {
        $product = $this->ProductModel->getAll();
        include_once "app/view/product/list.php";
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->ProductModel->delete($_REQUEST['id']);
            header("location:index.php?page=product-list");
        } else {
            header("location:index.php?page=product-list");
        }
    }

}