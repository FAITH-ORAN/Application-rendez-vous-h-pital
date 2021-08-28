let submitButton=document.getElementById("submit");
submitButton.addEventListener("click",(e)=>{
let lastName=document.getElementById("name").value;
let firstName=document.getElementById("prenom").value;
let id=document.getElementById("id").value;

if((lastName=== ""||firstName=== "") && (id==="")){
    e.preventDefault();
    alert("svp entrez le nom et le prénom ou le id Patient");
   
}else  {
    alert("recherche reussi");
}


})