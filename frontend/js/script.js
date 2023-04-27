//Starting point for JQuery init
$(document).ready(function () {
  loaddata();
});

function loaddata() {
  $.ajax({
    type: "GET",
    url: "../../backend/serviceHandler.php",
    cache: false,
    data: { method: "getData" },
    dataType: "json",
    success: function (response) {
      console.log(response);
      console.log("test");
    },
  });
}
