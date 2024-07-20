<?php

class DB
{
    private $host = 'host';
    private $username = 'username';
    private $password = 'password';
    private $database_name = 'database';

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database_name);
    }

    public function findAll($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        while ($data = $result->fetch_assoc()) {
            $res[] = $data;
        }
        $this->conn->close();
        return $res;
    }

    public function findBy($table, $where)
    {
        $sql = "SELECT * FROM $table WHERE $where";
        $result = $this->conn->query($sql);
        while ($data = $result->fetch_assoc()) {
            $res[] = $data;
        }
        $this->conn->close();
        return $res;
    }

    public function update($table, $params = array(), $where)
    {
        $args = array();
        foreach ($params as $field => $value) {
            $args[] = $field . '="' . $value . '"';
        }
        $sql = 'UPDATE ' . $table . ' SET ' . implode(',', $args) . ' WHERE ' . $where;
        $this->conn->query($sql);
        $this->conn->close();
    }

    public function create($table, $params = array())
    {
        $sql = 'INSERT INTO `' . $table . '` (`' . implode('`, `', array_keys($params)) . '`) VALUES ("' . implode('", "', $params) . '")';
        $this->conn->query($sql);
        $this->conn->close();
    }

    public function delete($table, $where)
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE ' . $where;
        $this->conn->query($sql);
        $this->conn->close();
    }
}
