/**
 * File name.js
 * 
 * Describe purpose of the file
 * resouces is any
 */

//It creates an anonymous function and executes it immediately, passing it jQuery as a parameter. 
//Since the anonymous function accepts a parameter $, within the function $ is the jQuery object, 
//allowing you to use $ for jQuery objects as you're used to 
//even if $ is being used by something else (such as another library) outside the function. 
//Wrapping code in an anonymous function like this protects against variable naming collisions, 
//because any variable defined inside the function is limited to that function's scope.
(function($){
    //1. jQuery syntax
    $(function(){
        $(document).mouseup(function(e){
            var menu = $('.popout-menu');
            if(!menu.is(e.target) && menu.has(e.target).length === 0) {
                $('.dimmed').fadeOut(200);
                $('#popout').css({
                    '-webkit-transform':'translateX(100%)',
                    transform: 'translateX(100%)'
                })
            }
        })
    })
    //is the same as..
    $(document).ready(function(){

    })
})
