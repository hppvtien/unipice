<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Education\Tag;
use App\Models\Uni_Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Modules\Admin\Http\Requests\AdminFreebookRequest;

class AdminUniContactController extends AdminController
{
    public function index()
    {
        $contact = Uni_Contact::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'contact' => $contact
        ];

        return view('admin::pages.uni_contact.index', $viewData);
    }
 
    public function update(Request $request)
    {
        $id = $request->v_id;
        $contact = Uni_Contact::where('id', $id)->first();
        $contact->status = $contact->status == 1 ? 0 : 1;
        $contact->save();
    }


    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $contact = Uni_Contact::findOrFail($id);


            $contact->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
