// JQUERY
$(document).ready(function () {
  $(".coursePlan").hide();
});

$(".courseDrop").click(function () {
  $(".coursePlan").slideUp();

  const course = $(this).closest(".course");
  const coursePlan = course.find(".coursePlan");

  const rotate = $(this).closest(".course");
  const rotateOne = rotate.find(".iRotate");

  if (!coursePlan.is(":visible")) {
    coursePlan.slideDown("slow");
    rotateOne.css("transform", "rotate(180deg)");
  } else {
    coursePlan.slideUp("slow");
    rotateOne.css("transform", "rotate(0deg)");
  }
});
