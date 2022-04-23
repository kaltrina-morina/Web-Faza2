function showPass() {
    var fjalkalimi = document.getElementById("password");
    var teksti = document.getElementById("showId");
    if (fjalkalimi.type === "password") {
        fjalkalimi.type = "text";
        teksti.innerHTML="Hide Password";
    } else {
        fjalkalimi.type = "password";
        teksti.innerHTML="Show Password";
    }
}
