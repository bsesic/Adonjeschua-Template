/**
 * Created by Benni on 07.03.2016.
 */
$(document).ready(function () {
    $(".nav > li").mouseenter(
        function () {
            $(".submenu").show();
            //alert("Hallo Welt");
        }).mouseleave(
           function() {
               $(".submenu").hide();
           }
    );
});