<?php

namespace Modules\User\Http\Controllers;

use App\Models\Favourite;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller;
class UserFavouriteController extends Controller
{

    public function index()
    {
        $favourites = Favourite::with('course:id,c_name,c_slug,c_avatar')
            ->where('f_user_id', get_data_user('web'))
            ->paginate(12);

        $viewData = [
            'favourites' => $favourites
        ];

        return view('user::pages.favourite.index', $viewData);
    }

    public function processFavourite(Request $request, $id, $type)
    {
        
            $typeID = $type == 'course' ? 1 : 2;
          
               Favourite::insert([
                    'f_user_id' => get_data_user('web'),
                    'f_id' => $id,
                    'f_type' => $typeID,
                    'created_at' => Carbon::now()
                ]);
              
                    return response([
                        'status' => 200,
                    ]);
                
           
           

            
        
    }
}
