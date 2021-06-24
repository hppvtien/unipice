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
