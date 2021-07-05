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

// if ( ! function_exists('base_url'))
// {
// 	/**
// 	 * Base URL
// 	 *
// 	 * Create a local URL based on your basepath.
// 	 * Segments can be passed in as a string or an array, same as site_url
// 	 * or a URL to a file can be passed in, e.g. to an image file.
// 	 *
// 	 * @param	string	$uri
// 	 * @param	string	$protocol
// 	 * @return	string
// 	 */
// 	function base_url($uri = '', $protocol = NULL)
// 	{
// 		return get_instance()->config->base_url($uri, $protocol);
// 	}
// }
