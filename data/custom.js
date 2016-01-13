/* 
 * Custom JavaScript
 */

/* Stop Links staying focused after clinking, eg collpasing panels */

$(".panel-default>.panel-heading a").mouseup(function(){
    $(this).blur();
});