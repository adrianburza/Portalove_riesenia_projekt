<?php

namespace kaviaren;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function insertMenuItem($sysName, $displayName)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO menu(sys_name, display_name, created_at, updated_at)
                VALUE ('".$sysName."', 
                '".$displayName."', 
                '".$dateTime."', 
                '".$dateTime."')";

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertEmail($name, $email, $message)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO email(name, email, message, created_at, updated_at) 
                VALUE ('".$name."', '".$email."', '".$message."', '".$dateTime."', '".$dateTime."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertCafe($sys_name, $display_name, $image, $size_S, $size_M, $size_L, $type)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO cafe_menu(sys_name, display_name, image, size_S,size_M,size_L, created_at, updated_at, type) 
                VALUE ('".$sys_name."', '".$display_name."', '".$image."', '".$size_S."', '".$size_M."', '".$size_L."', '".$dateTime."', '".$dateTime."', '".$type."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getAllEmails()
    {
        $emails = [];
        $sql = "SELECT * FROM email";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $emails[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'message' => $row['message'],
                'created_at' => $row['created_at']
            ];
        }

        return $emails;
    }

    public function getAllContent()
    {
        $contents = [];
        $sql = "SELECT * FROM content";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $contents[] = [
                'id' => $row['id'],
                'sys_name' => $row['sys_name'],
                'display_name' => $row['display_name'],
                'content' => $row['content'],
                'created_at' => $row['created_at']
            ];
        }

        return $contents;
    }

    public function getAllMenu()
    {
        $menus = [];
        $sql = "SELECT * FROM menu";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $menus[] = [
                'id' => $row['id'],
                'sys_name' => $row['sys_name'],
                'display_name' => $row['display_name'],
                'created_at' => $row['created_at']
            ];
        }

        return $menus;
    }

    public function getAllCafe($type)
    {
        $menus = [];
        $sql = "SELECT * FROM cafe_menu WHERE type = '" . $type . "'";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $menus[] = [
                'id' => $row['id'],
                'sys_name' => $row['sys_name'],
                'display_name' => $row['display_name'],
                'image' => $row['image'],
                'size_S' => $row['size_S'],
                'size_M'=> $row['size_M'],
                'size_L' => $row['size_L']
            ];
        }

        return $menus;
    }

    public function deleteEmail($id)
    {
        $sql = "DELETE FROM email WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteCafe($id)
    {
        $sql = "DELETE FROM cafe_menu WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getEmailDetails($id)
    {
        $sql = "SELECT id, name, email, message FROM email WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }
    }

    public function getMenuDetails($id)
    {
        $sql = "SELECT id, display_name FROM menu WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }
    }

   public function getContentDetails($id)
    {
        $sql = "SELECT id, content FROM content WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }
    }

    public function getCafeMenuDetails($id)
    {
        $sql = "SELECT id, sys_name, display_name, image, size_S, size_M, size_L FROM cafe_menu WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }
    }

    public function updateEmail($id, $from, $email, $message)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE email 
                SET name = '".$from."', email = '".$email."', message = '".$message."', updated_at = '".$dateTime."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateMenu($id, $display_name)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE menu 
                SET display_name = '".$display_name."', updated_at = '".$dateTime."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateContent($id, $content)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE content 
                SET content = '".$content."', updated_at = '".$dateTime."' 
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateCafeMenu($id, $sys_name, $display_name, $image, $size_S, $size_M, $size_L)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE cafe_menu
                SET sys_name = '".$sys_name."', display_name = '".$display_name."', image = '".$image."', size_S = '".$size_S."' , size_M = '".$size_M."' , size_L = '".$size_L."' , updated_at = '".$dateTime."'
                WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function login($username, $password)
    {
        $hasPassword = sha1($password);
        $sql = "SELECT COUNT(id) AS is_admin FROM user WHERE username = '".$username."' AND password = '".$hasPassword."'";

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($result['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }
}