<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClientInfo;
use App\PropertiesRequests;
use App\InfoForm;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Toastr;
use Carbon\Carbon;

class ClientInfoController extends Controller
{
    public function index()
    {
        $infos = ClientInfo::get(); 

        return view('admin.clientinfo.index', compact('infos'));
    }

    public function create()
    {
        if(request()->has('type') && request()->has('orderID')){
            if(request()->type == 1){
            $request = InfoForm::findOrFail(request()->orderID);

            return view('admin.clientinfo.create', compact('request'));

            }elseif(request()->type == 2){
            $request = PropertiesRequests::findOrFail(request()->orderID);

            return view('admin.clientinfo.create', compact('request'));

            }
        }
            abort(404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'monthly' => 'string|max:255',
            'timeLeft' => 'string|max:255',
            'paymentLeft' => 'string|max:255',
            'Bank' => 'string|max:255',
            'property' => 'string|max:255',
            'dateToVisit' => 'date',
            'payCheckFile' => 'mimes:pdf,docx',
            'type' => 'required|integer|between:1,2',
            'orderID' => 'required|integer'
        ]);

      
        $payCheckFile = $request->file('payCheckFile');
        $clientInfo = new ClientInfo();
        $clientInfo->monthly = $request->monthly;
        $clientInfo->timeLeft = $request->timeLeft;
        $clientInfo->paymentLeft = $request->paymentLeft;
        $clientInfo->Bank = $request->Bank;
        $clientInfo->property = $request->property;
        $clientInfo->dateToVisit = $request->dateToVisit;
        if($request->type == 1){

            $ClientRequest = InfoForm::findOrFail($request->orderID);
            $clientInfo->fund_id = $request->orderID;

        }elseif($request->type == 2){
            $ClientRequest = PropertiesRequests::findOrFail($request->orderID);
            $clientInfo->request_id = $request->orderID;

        }

        $clientInfo->type = $request->type;

        if(isset($payCheckFile)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $currentDate.'-'.uniqid().'.'.$payCheckFile->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('clientInfo')){
                Storage::disk('public')->makeDirectory('clientInfo');
            }
            Storage::disk('public')->put('clientInfo/'.$fileName, file_get_contents($payCheckFile));
            $clientInfo->payCheckFile = $fileName;

        } 



        $clientInfo->save();
        Toastr::success('message', 'تم الإنشاء بنجاح.');
        return redirect()->route('admin.clientinfo.index');
    }

    public function edit($id)
    {
        $clientinfo = ClientInfo::find($id);

        return view('admin.clientinfo.edit',compact('clientinfo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'monthly' => 'string|max:255',
            'timeLeft' => 'string|max:255',
            'paymentLeft' => 'string|max:255',
            'Bank' => 'string|max:255',
            'property' => 'string|max:255',
            'dateToVisit' => 'date',
            'payCheckFile' => 'mimes:pdf,docx',
            'status' => 'required|integer|between:1,4',
        ]);


        $clientInfo = ClientInfo::findOrFail($id);
        $clientInfo->monthly = $request->monthly;
        $clientInfo->timeLeft = $request->timeLeft;
        $clientInfo->paymentLeft = $request->paymentLeft;
        $clientInfo->Bank = $request->Bank;
        $clientInfo->property = $request->property;
        $clientInfo->dateToVisit = $request->dateToVisit;
        $clientInfo->status = $request->status;

        $payCheckFile = $request->file('payCheckFile');

        if(isset($payCheckFile)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $currentDate.'-'.uniqid().'.'.$payCheckFile->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('clientInfo')){
                Storage::disk('public')->makeDirectory('clientInfo');
            }
            Storage::disk('public')->put('clientInfo/'.$fileName, file_get_contents($payCheckFile));
            $clientInfo->payCheckFile = $fileName;

        }


        $clientInfo->save();

        Toastr::success('message', 'تم التحديث بنجاح.');
        return redirect()->route('admin.clientinfo.index');
    }

    public function destroy($id)
    {
        $Cinfo = ClientInfo::findOrFail($id);
        $Cinfo->delete();

        Toastr::success('message', 'تم الحذف بنجاح.');
        return redirect()->route('admin.clientinfo.index');
    }

}
