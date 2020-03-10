(function() {
  window.onscroll = function() { scrollLogo() };

  function scrollLogo() {
    var logo = document.getElementById("logo");

    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

      logo.src = "http://informatica.ieszaidinvergeles.org:9025/proyectofinalWP/wp-content/themes/racks/images/WIFIdark.png";

    }else{
      logo.src = "http://informatica.ieszaidinvergeles.org:9025/proyectofinalWP/wp-content/themes/racks/images/wifilight.png";
    }
  }
})();
