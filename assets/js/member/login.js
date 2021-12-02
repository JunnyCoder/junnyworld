let main_form = document.logInSection;
let reg_btn = document.querySelector( '#register');
let find_btn = document.querySelector( '#id_find');
function to_reg(){
    location.href = "assets/subHTML/register.html";
}
function to_find(){
    location.href = "assets/subHTML/idFind.html";
}
reg_btn.addEventListener("click",to_reg);
find_btn.addEventListener("click",to_find);
