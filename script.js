// JQUERY
$(document).ready(function () {
  $(".coursePlan").hide();
  $(".iRotate").css("transform", "rotate(270deg)");
  $(".mobileContent").hide();
});

$(".courseWide").click(function () {
  $(".coursePlan").slideUp();

  const course = $(this).closest(".course");
  const coursePlan = course.find(".coursePlan");

  const rotate = $(this).closest(".course");
  const rotateOne = rotate.find(".iRotate");

  if (!coursePlan.is(":visible")) {
    coursePlan.slideDown("slow");
    rotateOne.css("transform", "rotate(360deg)");
  } else {
    coursePlan.slideUp("slow");
    rotateOne.css("transform", "rotate(270deg)");
  }
});

$(".mobileOptimizedLink").click(function () {
    $(".mobileContent").slideUp();


  console.log("baer");
  const mobileItem = $(this).closest(".nav-item");
  const theItem = mobileItem.find(".mobileContent");

  if(!theItem.is(":visible")) {
    theItem.slideDown();
  } else {
    theItem.slideUp();
  }
});
