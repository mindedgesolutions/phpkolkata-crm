$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

const baseUrl = "http://127.0.0.1:8000";

//----------------------- Pointers -----------------------//

function numbersonly(input){
	var regex = /[^0-9]/gi;
	input.value = input.value.replace(regex, "");
}

function letterswithspace(input){
	var regex = /[^a-z ]/gi;
	input.value = input.value.replace(regex, "");
}

function validateEmail(param) {
	const email = param;
	const email_valid= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	
	if (email_valid.test(email)){
		return true;
	}else{
		return false;
	}
}

function validateMobile(param){
	const mobile = param;
	const mobile_valid = /^(0|91)?[6-9][0-9]{9}$/;
	
	if (mobile_valid.test(mobile)){
		return true;
	}else{
		return false;
	}
}

//----------------------- Login form (login) -----------------------//

function validateFormLogin() {
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;

	if (!email){
		alertify.alert(`Email is required`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}else if (!password){
		alertify.alert(`Password is required`, function () {
			document.getElementById('password').focus();
		});
		return false;
	}
}

//----------------------- User add form (user.create) -----------------------//

function validateFormUser() {
	const name = document.getElementById('name').value;
	const email = document.getElementById('email').value;
	const mobile = document.getElementById('mobile').value;

	if (!name){
		alertify.alert(`Name is required`, function () {
			document.getElementById('name').focus();
		});
		return false;
	}else if (!email){
		alertify.alert(`Email is required`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}else if (validateEmail(email)==false){
		alertify.alert(`Invalid email`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}else if (mobile && validateMobile(mobile)==false){
		alertify.alert(`Invalid contact no.`, function () {
			document.getElementById('mobile').focus();
		});
		return false;
	}else if ($('input[name="access[]"]:checked').length == 0){
		alertify.alert('You have not selected any action');
		return false;
	}else if (validateEmail(email)===false){
		alertify.alert(`Invalid email address`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}
}

//----------------------- User list (user.index) -----------------------//

function deleteUser(param) {
	const userId = param;

	alertify.confirm("Delete user?",
	function(){
		$.ajax({
			url: baseUrl + '/user/' + userId + '/destroy',
			type: 'post',
			data: {userId:userId},
			success: function(data){
				alertify.alert(`User deleted`, function () {
					window.location.reload();
				});
			}
		})
	},
	function(){})
}

//----------------------- Lead add form (lead.create) -----------------------//

function fillWA() {
	const contact_no = document.getElementById('contact_no').value;

	if (contact_no){
		document.getElementById('whatsapp_no').value = contact_no;
	}
}

function validateLeadForm() {
	const business_name = document.getElementById('business_name').value;
	const location = document.getElementById('location').value;
	const contact_person = document.getElementById('contact_person').value;
	const job_title = document.getElementById('job_title').value;
	const contact_no = document.getElementById('contact_no').value;
	const whatsapp_no = document.getElementById('whatsapp_no').value;
	const email = document.getElementById('email').value;
	const lead_source = document.getElementById('lead_source').value;

	if (!business_name){
		alertify.alert(`Enter business name`, function () {
			document.getElementById('business_name').focus();
		});
		return false;
	}else if (!location){
		alertify.alert(`Enter location`, function () {
			document.getElementById('location').focus();
		});
		return false;
	}else if (!contact_person){
		alertify.alert(`Enter contact person's name`, function () {
			document.getElementById('contact_person').focus();
		});
		return false;
	}else if (!job_title){
		alertify.alert(`Enter job title`, function () {
			document.getElementById('job_title').focus();
		});
		return false;
	}else if (!contact_no){
		alertify.alert(`Enter contact no.`, function () {
			document.getElementById('contact_no').focus();
		});
		return false;
	}else if (validateMobile(contact_no)===false){
		alertify.alert(`Invalid contact no.`, function () {
			document.getElementById('contact_no').focus();
		});
		return false;
	}else if (!whatsapp_no){
		alertify.alert(`Enter WhatsApp no.`, function () {
			document.getElementById('whatsapp_no').focus();
		});
		return false;
	}else if (validateMobile(whatsapp_no)===false){
		alertify.alert(`Invalid WhatsApp no.`, function () {
			document.getElementById('whatsapp_no').focus();
		});
		return false;
	}else if (!email){
		alertify.alert(`Enter email`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}else if (validateEmail(email)===false){
		alertify.alert(`Invalid email`, function () {
			document.getElementById('email').focus();
		});
		return false;
	}else if (!lead_source){
		alertify.alert(`Enter lead source`, function () {
			document.getElementById('lead_source').focus();
		});
		return false;
	}else if (!$("input[name='lead_type']").is(':checked')){
		alertify.alert(`Lead type is not selected`);
		return false;
	}else if (!$("input[name='action']").is(':checked')){
		alertify.alert(`Action is not selected`);
		return false;
	}
}

//----------------------- Lead list (lead.index) -----------------------//

function assignUser(param) {
	const lead_id = param;
	const assign_to = document.getElementById('assign_to_'+param).value;
	
	$.ajax({
		type: "post",
		url: baseUrl + "/lead/update-assignTo",
		data: {lead_id:lead_id, assign_to:assign_to},
		success: function (response) {
			alertify.alert(`Assigned successfully`);
		}
	});
}

function deleteLead(param) {
	const leadId = param;
	
	alertify.confirm("Delete lead?",
	function(){
		$.ajax({
			url: baseUrl + '/lead/destroy',
			type: 'post',
			data: {leadId:leadId},
			success: function(data){
				alertify.alert(`Lead deleted`, function () {
					window.location.reload();
				});
			}
		})
	},
	function(){})
}

//----------------------- Lead view (lead.show) -----------------------//
//---------------- Deals/pending view (deal.pending.show) starts ---------------//

function goToLead(param) {
	const leadId = document.getElementById('otherLead').value;
	const path = param;
	
	if (leadId){
		window.location = baseUrl + path + leadId + '/view';
	}else{
		alertify.alert(`Select a lead`);
	}
}

function approveDeal(param, param2) {
	const status = param;
	const leadId = param2;
	const finalStatus = $('input[name="action"]:checked').val();
	const comments = document.getElementById('comments').value;
	const message = status==1 ? 'approve' : 'disapprove';
	
	alertify.confirm("Sure you wish to " + message + "?",
	function(){
		$.ajax({
			url: baseUrl + '/deal/pending/' + leadId + '/update',
			type: 'post',
			data: {leadId:leadId, status:status, finalStatus:finalStatus, comments:comments},
			success: function(data){
				alertify.alert(`Deal ${message}`, function () {
					window.location = baseUrl + '/deal/pending/list';
				});
				// alert(data);
			}
		})
	},
	function(){})
}
//---------------- Deals/pending view (deal.pending.show) ends ---------------//

function assignUserFromView() {
	const lead_id = document.getElementById('leadId').value;
	const assign_to = document.getElementById('assignTo').value;

	$.ajax({
		type: "post",
		url: baseUrl + '/lead/update-assignTo',
		data: {lead_id:lead_id, assign_to:assign_to},
		success: function (response) {
			alertify.alert(`Assigned successfully`);
		}
	});
}

//----------------------- Folloup modal form (followup.store) -----------------------//

function validateFollowUpForm() {
	const actionType = document.getElementById('actionType').value;
	const comments = document.getElementById('comments').value;
	const leadStatus = document.getElementById('leadStatus').value;
	const nextFollowUpDate = document.getElementById('nextFollowUpDate').value;

	if (!actionType){
		alertify.alert(`Select an action type`, function () {
			document.getElementById('actionType').focus();
		});
		return false;
	}else if (!comments){
		alertify.alert(`Comment is required`, function () {
			document.getElementById('comments').focus();
		});
		return false;
	}else if (!leadStatus){
		alertify.alert(`Select lead status`, function () {
			document.getElementById('leadStatus').focus();
		});
		return false;
	}else if (leadStatus==21 && !nextFollowUpDate){
		alertify.alert(`Follow-up date is required`, function () {
			document.getElementById('nextFollowUpDate').focus();
		});
		return false;
	}
}