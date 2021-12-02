function lengthCheck(){

}
function pwCheck(){
    regTest()

}
function regTest(name){
    var check_result = condition_arr['name']['condition'].test(testValue);

}
function regulationCheck(docValue, restrict, msg ){
    var testValue = document.querySelector('input[name=docValue]')
    if(check_result === false){
        return false
    }
}
let condition_arr ={
    "userid" : {
        required : true,
        type:"length",
        condition : "5~12" ,
        msg : ""
    },
    "userpw" : {
        required : true,
        type:"pwTest",
        condition :/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/,
        msg : ""
    },
    "userpw_confirm" : {
        required : true,
        type:"equal",
        condition :"",
        msg : ""
    },
    "username" : {
        required : true,
        type:"regularTest",
        condition : /\d/ ,
        msg : ""
    }
}
let input_list = document.querySelectorAll("input");

