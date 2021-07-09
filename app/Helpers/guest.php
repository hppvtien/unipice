<?php

if( !function_exists('get_data_user'))
{
    function get_data_user($guest, $column = 'id')
    {
        return Auth::guard($guest)->user() ? Auth::guard($guest)->user()->$column : null;
    }

}
if( !function_exists('get_data_user_name'))
{
 
    function get_data_user_name($guest, $column = 'name')
    {
        return Auth::guard($guest)->user() ? Auth::guard($guest)->user()->$column : null;
    }
}
function get_data_table_name($table,$id)
    {
        $data_name = DB::table($table)->find($id);

        return $data_name;
    }
function get_size_name($table,$id)
    {
        $size_name = DB::table($table)->find($id);

        return $size_name;
    }

?>
