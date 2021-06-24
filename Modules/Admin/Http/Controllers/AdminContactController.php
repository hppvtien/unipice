<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Education\Tag;
use App\Models\Contact;
use Carbon\Carbon;
use App\Models\Contact_job;
use Illuminate\Http\Request;
// use Modules\Admin\Http\Requests\AdminFreebookRequest;

class AdminContactController extends AdminController
{
    public function index()
    {
        $contact = Contact::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'contact' => $contact
        ];

        return view('admin::pages.contact.index', $viewData);
    }
    public function jobsapply()
    {
        $contact_job = Contact_job::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'contact_job' => $contact_job
        ];
        return view('admin::pages.contact.jobs_apply', $viewData);
    }
    public function update(Request $request)
    {
        $id = $request->v_id;
        $contact = Contact::where('id', $id)->first();
        $contact->status = $contact->status == 1 ? 0 : 1;
        $contact->save();
    }
    public function updateJobsapply(Request $request)
    {
        $id = $request->j_id;
        $contact_job = Contact_job::where('id', $id)->first();
        $contact_job->j_status = $contact_job->j_status == 1 ? 0 : 1;
        $contact_job->save();
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $contact = Contact::findOrFail($id);


            $contact->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
    public function delete_apply(Request $request, $id)
    {
        if ($request->ajax()) {
            $contact_job = Contact_job::findOrFail($id);


            $contact_job->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
