// Переключатель навигации
// for(let div of document.querySelectorAll("#nav-btn")) {
//     div.addEventListener("click", function(e) {

//         $('#items-box').children().remove();

//         $.ajax({
//             url: "admin/ajax",
//             type: "POST",
//             data: {
//               type: "getBlocksCategory",
//               category: this.getAttribute("type"),
//             },
//             success: function(result) {
//               document.getElementById("items-box").innerHTML += result.substr(result.indexOf("<body>", "</body>"));  
//             }
//         });
//     });
// }