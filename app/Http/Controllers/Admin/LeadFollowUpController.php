<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LeadFollowupModel;
use App\Http\Controllers\Controller;
use App\Models\LeadModel;
use Illuminate\Support\Facades\Auth;

class LeadFollowUpController extends Controller
{
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$data = new LeadFollowupModel;
		$data->lead_id = $request->modalLeadId;
		$data->action_type = $request->actionType;
		$data->annotation = $request->comments;
		$data->lead_status = $request->leadStatus;

		if ($request->nextFollowUpDate){
			$data->next_follow_up_date = $request->nextFollowUpDate;
		}
		$data->user_id = Auth::user()->id;
		$data->action_date = now();
		$data->save();
		
		$update = LeadModel::findOrFail($request->modalLeadId);
		$update->post_followup_status = $request->leadStatus;
		
		if ($request->leadStatus != 21){
			$update->lead_status = 17;
		}
		$update->save();

		$notification = [
			'alert-type' => 'success',
			'message' => 'Comments added',
		];

		return redirect()->back()->with($notification);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
