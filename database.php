<?php

class Database{

    public function __construct(){
        $this->connection = mysqli_connect("localhost", "root", "", "categories");  
    }

    public function insert($table, $data){
        
           $string = "INSERT INTO ".$table." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->connection, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->connection);  
           } 
    }

    public function delete($table,$id){
           $string = "UPDATE ".$table." SET active = 0 WHERE id = ".$id."";            

           if(mysqli_query($this->connection, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->connection);  
           } 
    }

        public function edite($table,$id){
            $query = "SELECT * From ".$table." WHERE id=".$id." ";  
            $result = mysqli_query($this->connection, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  
        //     if(mysqli_query($this->connection, $string))  
        //    {  

        //         return true;  
        //    }  
        //    else  
        //    {  
        //         echo mysqli_error($this->connection);  
        //    }           

        // }

        public function update($table, $data, $id)  
      {  
           $query = '';  
           $condition = '';  
           foreach($data as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2); 
      
           $query = "UPDATE ".$table." SET ".$query." WHERE id=".$id."";  
           if(mysqli_query($this->connection, $query))  
           {  
                return true;  
           }  
      }  

      public function select($table)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table." WHERE active=1";  
           $result = mysqli_query($this->connection, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  
 }  



