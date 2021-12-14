<?php
include_once "Dbconnect.php";

class BaseModel
{
    protected $DbConnect;
    protected $table;

    public function __construct()
    {
        $dt = new DbConnect();
        $this->DbConnect = $dt->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->DbConnect->query($sql);
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $sql = "delete from $this->table where id=" . $id;
        $stmt = $this->DbConnect->query($sql);
        $stmt->execute();
    }
}