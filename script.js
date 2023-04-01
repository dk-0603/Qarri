

var navLinks = document.getElementById("nav-links");

function myFunction(x) {
   tog= x.classList.toggle("change");
if( document.documentElement.clientWidth<=700 ){
    if(tog==true || tog==null ){
        navLinks.style.display="block";  
  
    }

    else{     
            navLinks.style.display="none";  
    }
    
}


console.log(tog);    
}



function prev(){
    document.getElementById('slider-container').scrollLeft -= 270;
}

function next()
{
    document.getElementById('slider-container').scrollLeft += 270;
}


$(".slide img").on("click" , function(){
$(this).toggleClass('zoomed');
$(".overlay").toggleClass('active');
})

