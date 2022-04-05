function misc() {
	// just testing the Prettier extension
	const v = 1;
	let a = 2;
	a += 1;
}

$(document).ready(function () {
	console.log("ready! >>>>>>>>>>>>>>>>>>>>>>>>>>!");
	const urlParams = new URLSearchParams(window.location.search);
	//const myParam = urlParams.get('myParam');
	console.log(divIdClickQuery);
	
	//bMeetingsGroup
	$(".bMeetingsGroup").click(doMeetingsButtonClick);
	$("#bMeetingsIP").click();
	$("#meetingsLinkDivButton").click(gotoMeetingsPage);

	// About Us page buttons
	$(".bAboutGroup").click(doAboutButtonClick);
	$("#bAboutPhilosophy").click();

	if(divIdClickQuery !== false){
		console.log("whgat is divIdClickQuery: ",divIdClickQuery);
		$("#" + divIdClickQuery).click();
	}

	$(".whosWhere").click(openMail);
});

function openMail() {
    window.location = "mai" + "lto:" + "info" + "@" + "safaustin." + "org";
}

const objMeetingsButtons = {
	bMeetingsIP: { offClass: "btn-secondary", contentDiv: "divMeetingsIP" },
	bMeetingsOL: { offClass: "btn-secondary-2", contentDiv: "divMeetingsOL" },
	bMeetingsEV: { offClass: "btn-secondary", contentDiv: "divMeetingsEV" },
};

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
	console.log('click meeting 3 column')
	window.location = "/meetings";
}
