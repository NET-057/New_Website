
$(document).ready(function()
           {
           $('#d1 ul li ').hover(function()
           {
               $(this).find('ul').stop().slideToggle(100);
           });
           });
    