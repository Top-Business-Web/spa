<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $contacts = Contact::latest()->get();
            return Datatables::of($contacts)
                ->addColumn('action', function ($contacts) {
                        return '
                                <button type="button" data-id="' . $contacts->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $contacts->id . '" data-title="' . $contacts->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('description', function($data) {
                    return '<td>' . Str::limit($data->description, 50) . '</td>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/contacts/index');
        }
    }


    public function edit(Contact $contact)
    {
        return view('admin.contacts.parts.edit',compact('contact'));
    } 
    // end  of edit

    public function destroy(Request $request)
    {
        $contact_us = Contact::where('id', $request->id)->first();

        $contact_us->delete();
        return response(['message'=>'Deleted successfully','status'=>200],200);

    } 
    //end of delete

}
