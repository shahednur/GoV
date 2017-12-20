// var accordions = document.getElementsByClassName('has-submenu');

// for(var i=0;i<accordions.length;i++){
//   accordions[i].onclick=function(){
//     this.classList.toggle('is-active');

//     var submenu = this.nextElementSibling;
//     if(submenu.style.maxHeight){
//       //menu is open, we need to close it now
//       submenu.style.maxHeight=null;
//       submenu.style.margin= null;
//     }else{
//       //menu is close, we need to open it
//       submenu.style.maxHeight = submenu.scrollHeight+"px";
//       submenu.style.margin = "0.75em";
//     }
//   }
// }

var acc = document.getElementsByClassName("has-submenu");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("is-active");

        /* Toggle between hiding and showing the active panel */
        var submenu = this.nextElementSibling;
        if (submenu.style.maxHeight) {
            submenu.style.maxHeight =null;
            submenu.style.margin =null;
        } else {
            submenu.style.maxHeight = submenu.scrollHeight+"px";
            submenu.style.margin ="0.75em";
        }
    }
}