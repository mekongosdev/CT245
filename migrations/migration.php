<?php
/**
 *
 */
 // Kết nối database
 require_once 'db.php';

 class Migration
 {
     protected $_table = '';

     function __construct()
     {
        $db = new DB();
        $db->connect();
        $db->set_char('utf8');
     }

     function setNameTable($tableName) {
        $this->_table = $tableName;
     }

     function createTableWithIdString() {
        $sql_create_table_with_id_string = "CREATE TABLE {$this->_table}(id CHAR(15) NOT NULL PRIMARY KEY);";
        // echo $sql_create_table_with_id_string;
        $qry_create_table_with_id_string = $db->query($sql_create_table_with_id_string);
     }

     function createTableWithIdNum() {
        $sql_create_table_with_id_num = "CREATE TABLE {$this->_table}(id INT(15) NOT NULL AUTO_INCREMENT PRIMARY KEY);";
        // echo $sql_create_table_with_id_num;
        $qry_create_table_with_id_num = $db->query($sql_create_table_with_id_num);
     }

     function up($colunmName = null, $datatype = null, $after = null) {
        if($colunmName == null && $datatype == null) {
            echo "<script>alert('Không tồn tại đối số truyền vào!<br />Not available parameters!')</script>";
        } else {
            if($after == null) {
                $sql_up_table = "ALTER TABLE {$this->_table} ADD {$colunmName} {$datatype};";
            } else {
                $sql_up_table = "ALTER TABLE {$this->_table} ADD {$colunmName} {$datatype} AFTER {$after};";
            }
            // echo $sql_up_table;
            $qry_up_table = $db->query($sql_up_table);
        }
     }

     function down($colunmName = null) {
        if($colunmName == null) {
            echo "<script>alert('Không tồn tại đối số truyền vào!<br />Not available parameters!')</script>";
        } else {
            $sql_down_table = "ALTER TABLE {$this->_table} DROP COLUMN {$colunmName}";
            $qry_down_table = $db->query($sql_down_table);
        }
     }
 }

?>
