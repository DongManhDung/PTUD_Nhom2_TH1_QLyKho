$ = (selector) =>{
    document.querySelector(selector);
}
isNull = (selector) =>{
    return selector.val() == "";
}
const checkValidation = (idInput, idSpan) =>{
    val = isNull($(idInput));
    if (val) {
        $(idSpan).html("Please fill out this field!");
        return false;
    } else {
        $(idSpan).html("");
        return true;
    }
}
const isNegative = (idInput, idSpan) =>{
    val = $(idInput).val();
    if(val === 0){
        $(idSpan).html("The number must be greater than zero!");
        return false;
    }else{
        $(idSpan).html("");
        return true;
    }
}
const validNum = (idInput, idSpan) =>{
    val = isNull($(idInput));
    num = $(idInput).val()
    if (val) {
        $(idSpan).html("Please fill out this field!");
        return false;
    }else if(num <= 0 ){
        $(idSpan).html("The number must be greater than zero!");
        return false;
    }else{
        $(idSpan).html("");
        return true;
    }
}
const validDate = (idInput, idSpan) =>{
    console.log(Date());
}
const enableButton = (a) => {
    const btnAdd = document.getElementById("btnAdd");
    a.forEach((item) => {
        
        if (item.trim()!=='') {
            btnAdd.disabled=false;
        }
        else{
            btnAdd.disabled=true;
        }
    })
}

document.addEventListener('DOMContentLoaded', () => {
    a = [];
    i = 0;
    inputs = document.querySelectorAll('input');
    inputs.forEach((input, i)=>{
        input.addEventListener('change', (event) => {
        a[i] = event.target.value;
        i++;
        console.log(a);
        enableButton(a)
    });
   
    });
})