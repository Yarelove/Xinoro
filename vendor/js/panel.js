// Varables
let showInfoBox = document.getElementById("showInfo");
let hideInfoBox = document.getElementById("hideInfo");
let pageControll = document.getElementById("create-page-controll");
let inputUrl = document.getElementById("url");
let inputController = document.getElementById("controller");
let inputAction = document.getElementById("action");

// hidden
showInfoBox.hidden = true;
pageControll.hidden = true;

// function`s
function showInfo(title, url, controller, action)
{
	showInfoBox.hidden = false;
	hideInfoBox.hidden = true;
	document.getElementById("url").value = url;
	document.getElementById("controller").value = controller;
	document.getElementById("action").value = action;
	document.getElementById("title_").value = title;
}

function openPageControll()
{
	pageControll.hidden = false;
}