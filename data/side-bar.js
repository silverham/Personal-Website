
$( document ).ready(function() {  
    
    var isMobile = window.matchMedia("only screen and (max-width: 760px)");

    if (isMobile.matches) {
        /* rename the first link, hide all but first, then clone and show them underneath */
        var sidebar = "closed";
        $('.left-sidebar-item').not(':first').hide();
        $('.left-sidebar-item').first().addClass("left-sidebar-button");
        var menuButtonText = $(".left-sidebar-button").text();
        $(".left-sidebar-button a").text("Sub Menu");
        $(".left-sidebar-button a").removeClass("active");
        $('.left-sidebar-item').not(':first').addClass("left-sidebar-item-hidden");
        $(".left-sidebar-button").click(function() {
            if (sidebar === "closed") {
                $(".nav-left-sidebar").children().clone().addClass('left-sidebar-cloned').appendTo(".nav-left-sidebar");
                $('.left-sidebar-cloned a').first().text(menuButtonText);
                $(".left-sidebar-cloned").removeClass("left-sidebar-button");
                $(".left-sidebar-cloned").show();
                sidebar = "open";
            } else {
                $(".left-sidebar-cloned").remove();
                sidebar = "closed";
            }
            return false; /* stop the link working */
        }); 
    }
 });