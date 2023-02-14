<?php
error_reporting(0);

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $table = 'dukcapil';

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->table);
    }

    function allPost($table, $order)
    {
        $sql = "SELECT * FROM $table ORDER BY $order DESC";
        $result = $this->conn->query($sql);
        while ($data = $result->fetch_assoc()) {
            $res[] = $data;
        }
        $this->conn->close();
        return $res;
    }

    function selectPost($table, $where)
    {
        $sql = "SELECT * FROM $table WHERE $where";
        $result = $this->conn->query($sql);
        while ($data = $result->fetch_assoc()) {
            $res[] = $data;
        }
        $this->conn->close();
        return $res;
    }

    function updatePost($table, $params = array(), $where)
    {
        $args = array();
        foreach ($params as $field => $value) {
            $args[] = $field . '="' . $value . '"';
        }
        $sql = 'UPDATE ' . $table . ' SET ' . implode(',', $args) . ' WHERE ' . $where;
        $this->conn->query($sql);
        $this->conn->close();
    }

    function insertPost($table, $params = array())
    {
        $sql = 'INSERT INTO `' . $table . '` (`' . implode('`, `', array_keys($params)) . '`) VALUES ("' . implode('", "', $params) . '")';
        $this->conn->query($sql);
        $this->conn->close();
    }

    function deletePost($table, $where)
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE ' . $where;
        $this->conn->query($sql);
        $this->conn->close();
    }
}
