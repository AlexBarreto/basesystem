$(".buttomMenu").click(function () {
  $("#idMenu").slideToggle("slow");
});

$(".buttomMenu").click(function () {
  if (menu == 0) {
    $("#idDeslogar").css("display", "none");
    $(".buttomMenu img").animate({ width: "35px", height: "35px" });
    $(".container-max").css("flex-direction", "row");

    menu = 1;
  } else {
    $(".buttomMenu img").animate({ width: "30px", height: "30px" });
    $("#faixa").css("width", "100%)");
    menu = 0;
  }
});

$("#login").click(function () {
  $("#idDeslogar").slideToggle("slow");
});

$("#login").click(function () {
  $(".deslogar").css("display", "flex");
  $("#idMenu").css("display", "none");
  $(".buttomMenu img").animate({ width: "30px", height: "30px" });
  menu = 0;
});
