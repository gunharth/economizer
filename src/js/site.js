// Alpine.js handles the show/hide of the mobile nav
import 'alpinejs'
// bootstrap js
window.$ = window.jQuery = require("jquery");
window.Popper = require("popper.js");
require("bootstrap");


$(document).ready(function(){
    $("#navDropdown").on("shown.bs.dropdown", function() {
      if ($(window).width() > 1200 ) {
        let h = $("#navDropdown .dropdown-menu.show").height() + $("#navDropdown .dropdown-menu.show").offset().top;
        $("#nav-dropdown-bg").height(h + 16);
        console.log($("#navDropdown .dropdown-menu:eq(0)").height());
        console.log($("#navDropdown .dropdown-menu:eq(0)").offset().top);
        $("#nav-dropdown-bg").show();
      }
    }).on("hidden.bs.dropdown", function() {
      // do something…
      $("#nav-dropdown-bg").hide();
    });

    $("#share").jsSocials({
      showLabel: false,
      showCount: false,
      shareIn: "popup",
      shares: ["twitter", "facebook", "linkedin", "email"]
    });
})
