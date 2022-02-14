// 
//  Initializations of variables
// 

let infobox_title = document.getElementById("title_info");
let infobox_url = document.getElementById("url_info");
let infobox_controller = document.getElementById("controller_info");
let infobox_action = document.getElementById("action_info");
let selectedPage;

//
// Modal window`s
//

var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalBodyInput.value = recipient
})

var exampleModal = document.getElementById('exampleModal2')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalBodyInput.value = recipient
})

//
// Button`s Function
//

// Open page in page editor
document.getElementById("openInEditor").addEventListener("click", function (event) {
  window.location.href = "admin/editor?url_edit="+infobox_url.value+"&controller_edit="+infobox_controller.value+"&action_edit="+infobox_action.value;
});

// Save list library used
document.getElementById("savelibbtn").addEventListener("click", function (event) {
  let libs = "";
  for(let elem of ["bootstrap","jquery","xohebb"])
  {
    if(document.getElementById(elem).checked)
      libs += elem+";";
  }
  window.location.href = "admin/panel?lib&lib_url="+selectedPage+"&libs_select="+libs;
});

// Show info box and input info
function showInfo(title, url, controller, action, visible, libs){

  // Init variables
  
  infobox_title.value = title;
  infobox_url.value = url;
  infobox_controller.value = controller;
  infobox_action.value = action;
  let library = libs.split(";");
  selectedPage = url;

  // unchecked checkbox
  for (let elem of  document.querySelectorAll('.custom-checkbox')) {
    elem.checked = false;
  }

  // find match in list library
  library.forEach(element => {
    try
    {
      document.getElementById(element).checked = true;
    }
    catch{}
  });

  if(visible > 0)
  {
    if(document.getElementById("unvisible_info").classList.contains("btn-selected"))
      document.getElementById("unvisible_info").classList.remove("btn-selected")
    document.getElementById("visible_info").classList.add("btn-selected")
  }
  else
  {
    if(document.getElementById("visible_info").classList.contains("btn-selected"))
        document.getElementById("visible_info").classList.remove("btn-selected")
      document.getElementById("unvisible_info").classList.add("btn-selected")
  }

}