let selectedPage;

// open madal
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

document.getElementById("openInEditor").addEventListener("click", function (event) {
  window.location.href = "admin/editor?url_edit="+document.getElementById("url_info").value;
});

document.getElementById("savelibbtn").addEventListener("click", function (event) {
  let libs = "";
  for(let elem of ["bootstrap","jquery","xohebb"])
  {
    if(document.getElementById(elem).checked)
      libs += elem+";";
  }
  window.location.href = "admin/panel?lib&lib_url="+selectedPage+"&libs_select="+libs;
});

// showinfo
function showInfo(title, url, controller, action, visible, libs){
  document.getElementById("title_info").value = title;
  document.getElementById("url_info").value = url;
  document.getElementById("controller_info").value = controller;
  document.getElementById("action_info").value = action;
  let library = libs.split(";");

  selectedPage = url;

  for (let elem of  document.querySelectorAll('.custom-checkbox')) {
    elem.checked = false;
  }

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