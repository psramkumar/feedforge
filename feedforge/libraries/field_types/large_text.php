<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//This library will do processing on text fields 
class large_text
{
    public function get_database_column_type()
    {
        return array('type'=>'VARCHAR','constraint'=>1024);
    }
    
    public function database_preprocess($value)
    {
       return $value; 
    }
    
    public function display_admin_input($name)
    {
        return '<textarea id="'.$name.'" name="'.$name.'"></textarea>';
    }
    
    public function display_tag_value($value, $params = array())
    {
        return $value;
    }
}

?>