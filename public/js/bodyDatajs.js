function minusValue(x) {
    var originalValue = document.getElementById(x).value;
    var input = document.getElementById(x);
    if(originalValue<=0)
    input.style.color = 'red';
    else {
        input.style.color = 'black';
        originalValue = originalValue - 1;
        input.value = originalValue;
    }
}
function plusValue(y)
{
    var input = document.getElementById(y);
    var originalValue = document.getElementById(y).value;
    input.style.color = 'black';
    originalValue = (parseInt(originalValue)+1);
    input.value = originalValue;
}
