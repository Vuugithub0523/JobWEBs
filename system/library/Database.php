<?php
/*Class này giúp thực hiện các thao tác truy vấn và chèn dữ liệu vào cơ sở dữ liệu 
mà không cần phải lặp lại mã xử lý kết nối và thực thi câu lệnh trong các đoạn mã khác*/
class Database extends PDO {
    public function __construct($connect, $user, $pass) {
        parent::__construct($connect, $user, $pass);
    }

    public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC) {
        $statement = $this->prepare($sql);

        foreach($data as $key => $value) {
            $statement->bindParam($key, $value);
        }
        
        $statement->execute();
        return $statement->fetchAll($fetchStyle);
    }

    public function insert($table_jobs, $data) {
        $keys = implode(',',array_keys($data));

        $values = ":" . implode(', :',array_keys($data));

        $sql = "insert into $table_jobs($keys) values($values)";
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function update($table, $data, $where) {
        $fields = "";
        foreach ($data as $key => $value) {
            $fields .= "$key = :$key, ";
        }
        $fields = rtrim($fields, ", ");
    
        $sql = "UPDATE $table SET $fields WHERE $where";
        $statement = $this->prepare($sql);
    
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
    
        return $statement->execute();
    }    
    
 }