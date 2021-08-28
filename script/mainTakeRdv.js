let submitButton=document.getElementById("submit");
submitButton.addEventListener("click",(e)=>{
let id=document.getElementById("id").value;
if(id===""){
    e.preventDefault();
    alert("svp entrez le Id");
   
}else  {
    alert("recherche reussi");
}


})