function showPass() {
  var fjalkalimi = document.getElementById("password");
  var teksti = document.getElementById("showId");
  var fjalkalimiConfirm = document.getElementById("confirmPassword");
  if (fjalkalimi.type === "password") {
      fjalkalimi.type = "text";
      fjalkalimiConfirm.type = "text";
      teksti.innerHTML="Hide Password";
  } else {
      fjalkalimi.type = "password";
      teksti.innerHTML="Show Password";
      fjalkalimiConfirm.type = "password";
  }
}

function validimi(){
  var emri=document.getElementById('emri').value;
  var mbiemri=document.getElementById('mbiemri').value;
  var dita=document.getElementById('dita').value;
  var muaji=document.getElementById('muaji').value;
  var viti=document.getElementById('viti').value;
  var gjinia=document.getElementById('gjinia').value;
  var email=document.getElementById('email').value;
  var password=document.getElementById('password').value;
  var confirm=document.getElementById('confirmPassword').value;
  var capitalRegex = /[A-Z]/;
  var numberRegex = /[0-9]/;

  if(emri.charAt(0) !== emri.charAt(0).toUpperCase()){
    alert("Shkronja e pare e emrit duhet te jete e madhe!");
    return false;
  }
  else if(mbiemri.charAt(0) !== mbiemri.charAt(0).toUpperCase()){
    alert("Shkronja e pare e mbiemrit duhet te jete e madhe!");
    return false;
  }
  else if(dita == 0 || muaji == 0 || viti == 0){
    alert("Datelindja nuk eshte plotesuar!")
    return false;
  }
  else if(gjinia == 0){
    alert("Gjinia nuk eshte plotesuar!")
    return false;
  }
  else if(password.length < 8){
    alert("Fjalkalimi duhet te jete se pakti 8 karaktere");
    return false;
  }
  else if(capitalRegex.test(password) == false || numberRegex.test(password) == false){
    alert("Fjalkalimi duhet te permbaje se paku nje shkronje te madhe dhe nje numer");
    return false;
  }
  else if(password !== confirm){
    alert("Fjalkalimet nuk perputhen!");
    return false;
  }
  else{
    return true;
  }
}