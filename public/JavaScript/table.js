const AllChars = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P"];
var counter1;
var counter2;
var table;
function CreateTableHeader(Size, player) {
    for (counter1 = 0; counter1 < Size; counter1++) {
        console.log("header" + Size);
        if (counter1 === 0) {

            table = document.getElementById(`table${player}`);
            var th = table.createTHead();
            var tr = th.insertRow(0);

            for (counter2 = Size - 1; counter2 > -1; counter2--) {


                var td = tr.insertCell(0);
                td.setAttribute("class", "TableHeader");
                td.innerHTML = AllChars[counter2];
            }
            var td = tr.insertCell(0);
            td.innerHTML = "";
        }
    }
}
function CreateContent(Size, Number, player) {
    let content
    console.log("content" + Size + "number=" + Number);
    table = document.getElementById(`table${player}`);
    var tr = table.insertRow(0);
    var td = tr.insertCell(0);
    td.setAttribute("class", "NumberInTable");
    td.innerHTML = (Number);
    for (counter2 = 1; counter2 < Size; counter2++) {
        let pos = Number + AllChars[counter2 - 1];
        var td = tr.insertCell(counter2);
        if (player === 1) {//this is the html code for the upper playing field(friendly field/1 player) (excluding header)
            content = `<button onmouseout="RemovePlacementIndicator('${pos}')" onmouseover="PlacementIndicator('${pos}')"\
        onclick="TableClick('${pos}')" id="${pos}" class="shipbutton"> </button>`
        } else {// this is the html code for the lower playing field (enemie field/ 2 player )(exlcluding header which is almost identical to player 1)
            content = `<button id="2${pos}" onmouseover="ShotIndicator('${pos}')"\ 
            onmouseout="RemoveShotIndicator('${pos}')" onclick="Shoot('${pos}')" class='shipbutton'> </button>`
        }// the 2 before ${pos} is to deifferentiate between field 1 and 2
        td.innerHTML = (content);
    }
}
function CreateTable(Size) {
    for (y = 1; y <= 2; y++) {
        for (x = Size; x > 0; x--) {
            CreateContent(Size + 1, x, y);
        }

        CreateTableHeader(Size, y);
    }
}
CreateTable(12);