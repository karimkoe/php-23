<?php
$host = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'php23';
$connect = new mysqli($host, $username, $passwd, $dbname);

class book
{
    private $id;
    private $title;
    private $price;
    private $stock;

    public function __construct() {

    }


    public static function getBookById($id) {
        global $connect;
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }


        $query = "SELECT * FROM book WHERE id LIKE '$id'";

        $result = $connect->query($query);
        while ($row = $result->fetch_object()) {
            return ['id' => $row->id, 'title' => $row->title, 'price' => $row->price, 'stock' => $row->stock];
        }
        $connect->close();
    }



    public static function getAll() {
        global $connect;
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }


        $query = "SELECT * FROM book";

            $result = $connect->query($query);
            while ($row = $result->fetch_object()) {
                return ['id' => $row->id, 'title' => $row->title, 'price' => $row->price, 'stock' => $row->stock];
            }
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }
}