var app = {
  init: function() {
    app.carousel();
  },
  carousel: function() {
  var carousel = require ('bootstrap');
  $('.carouselExampleIndicators').carousel();
  }
};
$(app.init);
