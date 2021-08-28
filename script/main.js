

let submitButton=document.getElementById("submit");
submitButton.addEventListener("click",(e)=>{
let lastName=document.getElementById("lastname").value;
let firstName=document.getElementById("firstname").value;
let date=document.getElementById("date").value;
let phone=document.getElementById("phone").value;
let mail=document.getElementById("mail").value;
if(lastName=== ""||firstName=== ""||date===""||phone===""||mail===""){
    e.preventDefault();
    alert("svp entrez les informations manquantes");
   
}else  {
    alert("patient ajouté");
}


})