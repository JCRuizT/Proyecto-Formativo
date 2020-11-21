/*!
    * Start Bootstrap - SB Admin v6.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });



    /*

    $('a.nav-link').click(function(e){  // For all links with the class "hash"
       e.preventDefault();  // Don't follow link
       console.log(this.href);
       history.pushState(null, '', this.href);  // Change the current URL (notice the capital "H" in "History")
       $('main').slideUp('slow', function(){  // Animate it sliding up
           var $this = $(this);
           $this.load(this.href, function(){  // Use AJAX to load the page (or do whatever)
              console.log(this.href);
           });
        });
    });*/

    
    /*
    $.confirm({
    title: 'Eliminar aprendiz',
    type: 'red',
    content: '¿Desea eliminar este aprendiz?',
    buttons: {
        confirmar: function () {
            $.alert('Se ha eliminado correctamente');
        },
        cancelar: function () {
            $.alert('Cancelado');
        }
    }
  });*/



    



})(jQuery);


