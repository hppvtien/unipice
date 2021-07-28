<?php

namespace Modules\Admin\Http\Controllers\Acl;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminRoleRequest;
use Spatie\Permission\Models\Permission;

class AdminVotesController extends AdminController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $votes = Vote::all();
        return view('admin::pages.acl.votes.index', compact('votes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable

     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $id = $request->v_id;
        $vote = Vote::where('id', $id)->first();
        $vote->v_status = $vote->v_status == 1 ? 0 : 1;    
        $vote->save();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    // public function delete(Request $request)
    // { 
    //     Vote::destroy($request->v_idd);
    // }


    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            Vote::findOrFail($id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
    }
}
