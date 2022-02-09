// open madal
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalBodyInput.value = recipient
})

// showinfo
function showInfo(title, url, controller, action, visible){
  document.getElementById("title_info").value = title;
  document.getElementById("url_info").value = url;
  document.getElementById("controller_info").value = controller;
  document.getElementById("action_info").value = action;

  if(visible)
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