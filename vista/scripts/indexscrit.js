let btnMenu=document.querySelector("#btn-menu");
let Menu=document.querySelector("#menu");
btnMenu.addEventListener("click",function(){
    //el .toggle añade una clase si no tiene y si tiene la quita
    Menu.classList.toggle("mostrar");
});
let subMenubtn=document.querySelectorAll(".submenu-btn");
for(let i=0;i<subMenubtn.length;i++){
    subMenubtn[i].addEventListener("click",function(){
        if(window.innerWidth<1024){
            let submenu=this.nextElementSibling;
            let height=submenu.scrollHeight;
            if(submenu.classList.contains("desplegar")){
                submenu.classList.remove("desplegar");
                submenu.removeAttribute("style");
            }else{
            submenu.classList.add("desplegar");
            submenu.style.height=height+"px";
        }
    }
    });
}