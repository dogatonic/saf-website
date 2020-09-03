function misc() {
	// just testing the Prettier extension
	const v = 1;
	let a = 2;
	a += 1;
}

$(document).ready(function () {
	console.log("ready! >>>>>>>>>>>>>>>>>>>>>>>>>>");
	//bMeetingsGroup
	$(".bMeetingsGroup").click(doMeetingsButtonClick);
	$("#bMeetingsIP").click();
	$("#meetingsLinkDivButton").click(gotoMeetingsPage);
});

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

function gotoMeetingsPage() {
	window.location = "/meetings";
}
