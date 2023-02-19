// function misc() {
// 	// just testing the Prettier extension
// 	const v = 1;
// 	let a = 2;
// 	a += 1;
// }

let bShowingAllMeetingGroups = false

$(document).ready(function () {
	console.log("ready2! >>>>>>>>>>>>>>>>>>>>>>>>>>!");
	const urlParams = new URLSearchParams(window.location.search);
	//const myParam = urlParams.get('myParam');
	// console.log(divIdClickQuery);

	// $("#submitVote").click(function () {
	// 	let someDatem = $("#election-form").serialize();
	// 	ajaxEmailCheck(someDatem);
	// });

	//bMeetingsGroup
	$(".bMeetingsGroup").click(doMeetingsButtonClick);
	$("#bMeetingsIP").click();
	$("#meetingsLinkDivButton").click(gotoMeetingsPage);
	$("#showAllMeetings").click(showAllMeetingGroups);

	
	// About Us page buttons
	$(".bAboutGroup").click(doAboutButtonClick);
	$("#bAboutPhilosophy").click();

	if (divIdClickQuery !== false) {
		console.log("whgat is divIdClickQuery: ", divIdClickQuery);
		$("#" + divIdClickQuery).click();
	}

	$(".whosWhere").click(openMail);

	$("#2022_ballot").find("input:checkbox").on("click", ballotNameChecked);
	ballotNameChecked();

	$(".status").click(statusCheck);
});

function statusCheck() {
	console.log(this.name);
	console.log(this.value);
	console.log(this.dataset.id);
	ajaxSetVoterStatus(this.value, this.dataset.id);
	// .is(':checked')
}

function ballotNameChecked() {
	let votesCast = $("#2022_ballot").find("input:checkbox:checked").length;
	if (votesCast > 7) {
		$("#toomany").show();
	} else {
		$("#toomany").hide();
	}
	if (votesCast < 1) {
		$("#toofew").show();
	} else {
		$("#toofew").hide();
	}
	// console.log("heynow checked! ", votesCast);
}

function openMail() {
	window.location = "mai" + "lto:" + "info" + "@" + "safaustin." + "org";
}

const objMeetingsButtons = {
	bMeetingsIP: { offClass: "btn-secondary", contentDiv: "divMeetingsIP" },
	bMeetingsOL: { offClass: "btn-secondary-2", contentDiv: "divMeetingsOL" },
	bMeetingsEV: { offClass: "btn-secondary", contentDiv: "divMeetingsEV" },
};

function showAllMeetingGroups(){
	if(bShowingAllMeetingGroups == true){
		$('#accordion .collapse').each( function() { $(this).removeClass( "show" ) } )
	} else {
		$('#accordion .collapse').each( function() { $(this).addClass( "show" ) } )
	}
	bShowingAllMeetingGroups = !bShowingAllMeetingGroups // toggle
}

function doMeetingsButtonClick() {
	// console.log($(this).attr("id"));
	const thisId = $(this).attr("id");
	console.log(objMeetingsButtons[thisId]["offClass"]);

	$.each(objMeetingsButtons, function (key, value) {
		$("#" + key)
			.removeClass()
			.addClass("btn bMeetingsGroup " + objMeetingsButtons[key]["offClass"]);
		$("#" + objMeetingsButtons[key]["contentDiv"]).hide();
	});

	// $(".bMeetingsGroup").removeClass().addClass("btn bMeetingsGroup btn-secondary");
	$(this).removeClass(objMeetingsButtons[thisId]["offClass"]).addClass("btn-primary active");
	$("#" + objMeetingsButtons[thisId]["contentDiv"]).show();
}

const objAboutButtons = {
	bAboutPhilosophy: { offClass: "btn-secondary", contentDiv: "divAboutPhilosophy" },
	bAboutHistory: { offClass: "btn-secondary", contentDiv: "divAboutHistory" },
};

function doAboutButtonClick() {
	// console.log($(this).attr("id"));
	const thisId = $(this).attr("id");
	console.log(objAboutButtons[thisId]["offClass"]);

	$.each(objAboutButtons, function (key, value) {
		$("#" + key)
			.removeClass()
			.addClass("btn bAboutGroup " + objAboutButtons[key]["offClass"]);
		$("#" + objAboutButtons[key]["contentDiv"]).hide();
	});

	// $(".bMeetingsGroup").removeClass().addClass("btn bMeetingsGroup btn-secondary");
	$(this).removeClass(objAboutButtons[thisId]["offClass"]).addClass("btn-primary active");
	$("#" + objAboutButtons[thisId]["contentDiv"]).show();
}

function gotoMeetingsPage() {
	console.log("click meeting 3 column");
	window.location = "/meetings";
}

function ajaxSetVoterStatus(status, id) {
	console.log("start ajaxSetVoterStatus");
	let url = "/process/voter_status_set.php?status=" + status + "&id=" + id;
	console.log(url);
	$.ajax({
		type: "GET",
		url: url,
		success: function (data) {
			// data = JSON object that contact.php returns
			// we recieve the type of the message: success x danger and apply it to the
			// let messageAlert = "alert-" + data.type;
			let messageText = data.message;
			console.log("message", messageText);
			console.dir(data);
			// // let's compose Bootstrap alert box HTML
			// let alertBox =
			// 	'<div class="alert ' +
			// 	messageAlert +
			// 	' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
			// 	messageText +
			// 	"</div>";

			// // If we have messageAlert and messageText
			// if (messageAlert && messageText) {
			// 	// inject the alert to .messages div in our form
			// 	$(".messages").html(alertBox);
			// 	// empty the form
			// 	$("#election-form")[0].reset();
			// 	$("#election-form").hide();
			// }
		},
	});
	console.log("end ajaxSetVoterStatus");
}

function ajaxEmailCheck(datam) {
	// console.log(datam);
	console.log("++++++");
	let result = false;
	$.ajax({
		type: "POST",
		url: "/process/email_check.php",
		data: datam,
		success: function (data) {
			// data = JSON object that contact.php returns

			// we recieve the type of the message: success x danger and apply it to the
			// let messageAlert = "alert-" + data.type;
			let messageText = data.message;
			let num_rows = data.num_rows;
			console.log("messageText", messageText);
			console.log("num_rows", num_rows); //$stmt
			if (messageText == "found_rows") {
				console.log("return true found yo email!");
				result = true;
			} else {
				result = false;
				console.log("return false");
			}
		},
	});
	return result;
}
