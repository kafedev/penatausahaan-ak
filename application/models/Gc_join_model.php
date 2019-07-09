<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gc_join_model extends Grocery_crud_model  {
 
    function get_list()
    {
        list($field_name, $related_table, $related_field_name) = $this->join;
        $select = "{$this->table_name}.*,$related_table.*";
        
         if(!empty($this->relation))
         {
              foreach($this->relation as $relation)
              {
                   list($field_name , $related_table , $related_field_title) = $relation;
                   $unique_join_name = $this->_unique_join_name($field_name);
                   $unique_field_name = $this->_unique_field_name($field_name);
                  
                    if(strstr($related_field_title,'{'))
                    {
                        $select .= ", CONCAT('".str_replace(array('{','}'),array("',COALESCE({$unique_join_name}.",", ''),'"),str_replace("'","\'",$related_field_title))."') as $unique_field_name";
                    }
                    else
                    {  
                        $select .= ", $unique_join_name.$related_field_title as $unique_field_name";
                    }
                      
                   if($this->field_exists($related_field_title))
                   {
                        $select .= ", {$this->table_name}.$related_field_title as '{$this->table_name}.$related_field_title'";
                   }
              }
          }
         
         $this->db->select($select, false);
         $this->db->join("$related_table","$related_table.$related_field_name = {$this->table_name}.$field_name");
         $results = $this->db->get($this->table_name)->result();
         return $results;
    }

}