const AllChars = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L","M","N","O","P"];
var counter1;
var counter2;
var table;
function CreateTableHeader(Size) {
    for (counter1 = 0; counter1 < Size; counter1++) {
        console.log("header"+Size);
        if (counter1 === 0) {
             
             table = document.getElementById(`table`);
             var th= table.createTHead();
             var tr= th.insertRow(0);
             
            for (counter2 = Size-1; counter2 > -1; counter2--) {
            
             
             var td= tr.insertCell(0);
             td.setAttribute("class","TableHeader");
             td.innerHTML = AllChars[counter2];
            }
            var td= tr.insertCell(0);
            td.innerHTML = "";
        }
}}
function CreateContent(Size, Number){
    console.log("content"+Size + "number="+Number);
    table = document.getElementById(`table`);
    var tr = table.insertRow(0);
    var td = tr.insertCell(0);
    td.setAttribute("class","NumberInTable");
    td.innerHTML= (Number);
    for(counter2 = 1;counter2 < Size;counter2++){
        let pos = Number+AllChars[counter2-1];
        var td = tr.insertCell(counter2);
        let content= `<button onmouseout="RemovePlacementIndicator('${pos}')" onmouseover="PlacementIndicator('${pos}')"\
        onclick="TableClick('${pos}')" id="${pos}" class="shipbutton"> </button>`
        td.innerHTML= (content);
    }
}
function CreateTable(Size){
    
    for(x =Size;x>0;x--){
        CreateContent(Size+1 , x);
    }
    CreateTableHeader(Size);
}
CreateTable(12);