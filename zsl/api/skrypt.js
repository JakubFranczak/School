let first_num = prompt("Gimmie first number: ");
let second_num = prompt("Gimmie second number: ");
if(second_num=="0"){
    second_num = prompt("Gimmie other number: ");
}
let result = parseInt(first_num)+parseInt(second_num);
document.write("Dodawianie: ",result);
let result2 = parseInt(first_num)-parseInt(second_num);
document.write("<br>Odejmowanie: ",result2);
let result3 = parseInt(first_num)*parseInt(second_num);
document.write("<br>Mnożenie: ",result3);
let result4 = parseInt(first_num)/parseInt(second_num);
document.write("<br>Dzielenie: ",result4);

let third_num = prompt("Gimmie third number: ");
if ((parseInt(first_num)+parseInt(second_num))>parseInt(third_num) && (parseInt(second_num)+parseInt(third_num))>parseInt(first_num) &&(parseInt(first_num)+parseInt(third_num))>parseInt(second_num)){
    document.write("<br>Mozna stworzy trojkat")
}
else{
    document.write("<br>Nie mozna strworzyc trojkata")
}
let a = parseInt(first_num);
let b = parseInt(second_num);
let c = a+b;
if(c%3==0){
    document.write("<span style='color:red'><br>"+c+"</span>");
}
else{
    
}