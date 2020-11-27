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


    window.onpopstate = function(event) {
        /* alert("location: " + document.location + ", state: " + JSON.stringify(event.state));
         window.onpopstate = null;
         history.back();*/
        $("#tview").load(document.location.href + "&acti=IndexSelect", function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success") {
                $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });

                var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                //if ($this.href === path) {
                    $(".link-ajax").removeClass("active");
                    //$($this).addClass("active");
                //}

                //console.log(path);
                //console.log($this.href);
               // $("h3").html($($this).html());
            }
        });
        console.log(document.location.href);
    };


    $(document).ready(function() {
        $('a.link-ajax').click(function(e) { // For all links with the class "hash"
            e.preventDefault(); // Don't follow link
            var $this = this;

            if (this.href != "#") {
                $("#tview").load(this.href + "&acti=IndexSelect", function(responseTxt, statusTxt, xhr) {
                    if (statusTxt == "success") {
                        history.pushState(null, '', $this.href); // Change the current URL (notice the capital "H" in "History")
                        $('#table-data').DataTable({

                            "language": {
                                "url": "views/assets/js/spanish.json"
                            }
                        });

                        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                        if ($this.href === path) {
                            $(".link-ajax").removeClass("active");
                            $($this).addClass("active");
                        }
                    }
                });
            }
        });
    })

    function epa(){
        alert("Julio");
    }






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