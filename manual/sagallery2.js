   
    $(document).ready(function() {  $('#ul li:first').before($('#ul li:last'));
            //move the last list item before the first item. The purpose of this is if the user clicks previous he will be able to see the last item.  
                
  /*  $("#ul").animateAuto("left",5010;); */

      
            //when user clicks the image for sliding right  
            $('#right img').click(function(){  
      
                //get the width of the items ( i like making the jquery part dynamic, so if you change the width in the css you won't have o change it here too ) '  
                var item_width = $('#ul li').outerWidth() + 20;  
      
                //calculate the new left indent of the unordered list  
                var left_indent = parseInt($('#ul').css('left')) - item_width;  
      
                //make the sliding effect using jquery's anumate function '  
                $('#ul').animate({'left' : left_indent},{queue:false, duration:500,complete: function(){
         $('#ul li:last').after($('#ul li:first'));  
      
                    //and get the left indent to the default -210px  
                    $('#ul').css({'left' : '-510px'});  
    }}, function(){  
      
                    //get the first list item and put it after the last list item (that's how the infinite effects is made) '  
                    $('#ul li:last').after($('#ul li:first'));  
      
                    //and get the left indent to the default -210px  
                    $('#ul').css({'left' : '-510px'});  
                });  
            });  
      
            //when user clicks the image for sliding left  
            $('#left img').click(function(){  
      
                var item_width = $('#ul li').outerWidth() + 20;  
      
                /* same as for sliding right except that it's current left indent + the item width (for the sliding right it's - item_width) */  
                var left_indent = parseInt($('#ul').css('left')) + item_width;  
      
                $('#ul').animate({'left' : left_indent},{queue:false, duration:500,complete: function(){
        $('#ul li:first').before($('#ul li:last'));  
      
                /* and again, when we make that change we are setting the left indent of our unordered list to the default -210px */  
                $('#ul').css({'left' : '-510px'});

    }}, function(){  
      
                /* when sliding to left we are moving the last item before the first item */  
                
                });  
      
            });  


/*
           $("li img:gt(0)").hide();
           $("li img:gt(0)").fadeIn('slow');  
    setInterval(function() {  
        //get the current image - it is the visible one  
        var current = $('li img:visible');  
  
        //get immediate next image after the current if exists, otherwise find the first one  
        var next = current.next().length ? current.next() : $('li img:eq(3)');  
       
        next.fadeIn(1000);  
    }, 15 ); 
      */






















      });  