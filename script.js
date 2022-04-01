//This function adds the animation to the non-decimals
var nondecimalAnimation = function () {
  $("#counter1").addClass("counter1");
  $("#counter2").addClass("counter2");
  $("#counter3").addClass("counter3");
  $("#counter4").addClass("counter4");
};

var runAnimationSection = function (the_id_of_element, the_function_to_run) {
  //Animations for the section "Numbers"
  var section = $(the_id_of_element);
  var visibility = VisSense(section[0], { fullyvisible: 0.25 });

  visibility
    .monitor({
      fullyvisible: function () {
        if (section && section[0]) {
          the_function_to_run();
        }
      },
      hidden: function () {},
    })
    .start();
};

$(document).ready(function () {
  runAnimationSection("#section-numbers", nondecimalAnimation);
});
