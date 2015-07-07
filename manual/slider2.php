<html>
<head>
	<meta charset="UTF-8">
	<title>Sagacious Slider Plugin</title>
    
	<style type="text/css">
  .img{
  	width:500px;
  	height:410px;

  }

    #carousel {  
    float:left; /* important for inline positioning */  
    width:1040px;
    height:420px ; /* important (this width = width of list item(including margin) * items shown */  
    overflow: hidden;  /* important (hide the items outside the div) */  
    /* non-important styling bellow */  
    background: #F0F0F0; 

    }  
      
    #ul {  
    position:relative;  
    left:-520px; /* important (this should be negative number of list items width(including margin) */  
    list-style-type: none; /* removing the default styling for unordered list items */  
    margin: 0px;  
    padding: 0px;  
    width:9999px; /* important */  
    /* non-important styling bellow */  
    padding-bottom:10px; 
  
    }  
      
    #ul li{  
    float: left; /* important for inline positioning of the list items */  
    width:500px;  /* fixed width, important */  
    /* just styling bellow*/  
    padding:0px;  
    height:110px;  
    background: #000000;  
    margin-top:10px;  
    margin-bottom:10px;  
    margin-left:10px;  
    margin-right:10px;  
    }  
      
    #ul li img {  
    .margin-bottom:-4px; /* IE is making a 4px gap bellow an image inside of an anchor (<a href...>) so this is to fix that*/  
    /* styling */  
       border:0px;   
    }  

    #left, #right{  
    float:left;  
        margin-top:150px;  
    }  
    #left img, #right img{  
    /*styling*/  
    cursor: pointer;  
    cursor: hand;  
    height:75px;  
    width:75px; 
    }  

</style>

</head>
<body >
	
	       <div id='carousel_container'>  
      <div id='left'><img src='img/left.png' /></div>  
      <div id='carousel'>  
            <ul id='ul'>  
                <li><img class="img" src="img/1.png"></li>  
                <li><img class="img" src="img/2.png"></li>  
                <li><img class="img" src="img/3.png"></li>  
                <li><img class="img" src="img/4.jpg"></li>  
                <li><img class="img" src="img/5.jpg"></li>  

            </ul>  
      </div>  
      <div id='right'><img src='img/right.png' /></div>  
    </div>  
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="sagallery2.js"></script>
<script>
/*var ul = $( "#ul" );
function runout(){

    ul
    .show( "slow" )
    .animate({ left: "+=500"},10000)
   
    

}
 
function runIt() {
  ul
    .show( "slow" )
    .animate({ left: "-=500"},10000)
    if(-2000 < '#ul.length')
    {
    runIt();
        }
        else{


            runout();
        }
    
    
}
 

 
runIt();
*/
</script>
</body>
</html>

    