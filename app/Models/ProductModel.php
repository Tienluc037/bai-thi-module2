<?php
include_once "BaseModel.php";

class ProductModel extends BaseModel
{
    protected $table = "ProductModel";

    public function store($request)
    {
        $sql = "insert into $this->table (name ,sectors,   quantily, date_created,   description) values (?,?,?,?,?,?)";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request["name"]);
        $stmt->bindValue(2, $request["sectors"]);
        $stmt->bindValue(3, $request["price"]);
        $stmt->bindValue(4, $request["quantily"]);
        $stmt->bindValue(5, $request["date_created"]);
        $stmt->bindValue(6, $request["description"]);
        $stmt->execute();
    }

}