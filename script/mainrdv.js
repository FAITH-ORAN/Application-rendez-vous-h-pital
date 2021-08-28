let submitButton=document.getElementById("submit");
submitButton.addEventListener("click",(e)=>{

let date=document.getElementById("meeting-time").value;

let id=document.getElementById("id").value;
if(date===""||id===""){
    e.preventDefault();
    alert("svp entrez les informations manquantes");
   
}else  {
    alert("rdv ajouté");
}


})