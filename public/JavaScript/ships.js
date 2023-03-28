var SmallShips = { // hier wird die shiffsposition gespeichert jedes shiff ist ein objekt (also ship1,ship2,ship3) die anzahl der objekt (also schiffe) hängt von der anzahl der platzierbaren schiffe ab.
  ship1: ["0", "0"],// Jedes Objekt ist ein array die länge der arrays hängt von der größe des schiffs ab
  ship2: ["0", "0"],
  ship3: ["0", "0"],
  Assigned: ["n", "n", "n"] // hier wird gespeichert welche schiffe schon eine position zugewiesen bekommen haben die länge dieses arrays hängt von der anzahl der anderen objekte (schiffe) ab n= unbelegt y =belegt
};


var MediumShips = { // selbe wie bei SmallShips nur weniger Objekte(weniger schiffe) und dafür längeres array(größere schiffe)
  ship1: ["0", "0", "0"],
  ship2: ["0", "0", "0"],
  Assigned: ["n", "n"]
};
const BigShips = {
  ship1: ["0", "0", "0", "0"],
  Assigned: 0
};
var alignment = "v";// h horizontal // v vertical
var Buttonpressed = 0; //1=kleines Schiff 2=Mittleres Schiff 3=großes Schiff
var counter;// für die for schleifen
var counter2;
var GridNumber; // hier wird die Nummer des ausgewählten ortes zwischengespeichert
var GridChar; // hier wird der Buchstabe des gewählten ortes zwischengespeichert
var secondplace; // hier werden die belegten felder zwischengespeichert
var thirdplace;
var fourthplace;
var HitCounter; // hier werden die treffer gespeichert
var ShipfieldsNumber = 16; // hier wird die anzahl der (gegenerischen) felder gespeichert die noch getroffen werden müssen
var CurrentPlayer = 1; // hier wird der active spieler gespeichert
ChangeAlignment("h"); // der anfangs aktive radiobutton wird festgelegt
function PlayerChange() { // hier wird der spieler geändert
  if (1 === CurrentPlayer) {
    CurrentPlayer =2;
  }
  else {
    CurrentPlayer =1;
  }
}
function BotMove(){ // hier soll der bot hinkommen
  
}
function TestForShip(place) { // hier wird geschuat ob das attackierte feld ein schiff besitz und falls ja wird die nummer der felder mit aktiven schiffen reduziert
  if (NotMarked(place)) {
    document.getElementById(place).style.backgroundColor = "red";
  }
  else {
    document.getElementById(place).style.backgroundColor = "yellow";
    HitCounter++;
    if (HitCounter === ShipfieldsNumber) {
      alert("Spielende");// muss erweitert werden
    }
  }
}
function NotMarked(place) { // hier wird getestet ob ein feld belegt ist false = belegt  true = nicht belegt
  let marked = true;
  let specialcounter;//so it does not interfere with the oother counters
  let specialcounter2;
  for (specialcounter = 1; specialcounter < 3; specialcounter++) {
    console.log(specialcounter);
    for (specialcounter2 = 0; specialcounter2 < SmallShips[`ship${specialcounter}`].length; specialcounter2++) {
      console.log(specialcounter2);
      if (SmallShips[`ship${specialcounter}`][specialcounter2] === place) {

        marked = false;
      }
    }
  }
  for (specialcounter = 1; specialcounter < 2; specialcounter++) {
    for (specialcounter2 = 0; specialcounter2 < MediumShips[`ship${specialcounter}`].length; specialcounter2++) {
      if (MediumShips[`ship${specialcounter}`][specialcounter2] === place) {
        marked = false;
      }
    }
  }
  for (specialcounter = 1; specialcounter < 1; specialcounter++) {
    for (specialcounter2 = 0; specialcounter2 < BigShips[`ship${specialcounter}`].length; specialcounter2++) {
      if (BigShips[`ship${specialcounter}`][specialcounter2] === place) {
        marked = false;
      }
    }
  }
  return marked;
}
function ChangeAlignment(current) { // für die radio buttons
  document.getElementById(alignment).checked = false;
  alignment = current;
  document.getElementById(current).checked = true;
}
function SelectedButton() { // hier wird ein button auf weiß zurückgesetzt wenn er nicht mehr aktiv ist (muss in zukunft verbessert werden)
  switch (Buttonpressed) {
    case 0:
      console.log(SmallShips[`ship${1}`].length);
      break;
    case 1:
      document.getElementById("SmallShipButton").style.backgroundColor = "white";
      break;
    case 2:
      document.getElementById("MediumShipButton").style.backgroundColor = "white";
      break;
    case 3:
      document.getElementById("BigShipButton").style.backgroundColor = "white";
      break;
  }


}

function RemovePlacementIndicator(place) { // hier wird die markierung zurückgesetzt sobald der mausziger das feld verlässt (funktioniert noch nicht perfekt)
  if (Buttonpressed === 1) { 
    if (place.length > 2) {  
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") { 
      if (GridChar === "L") { 
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";

          }
        }
      }
    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      var place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
    }
  }
  else if (Buttonpressed === 2) {
    if (place.length > 2) {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") {
      if (GridChar === "L" || GridChar === "K") {
        //nothin happens
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
          }
        }
      }
    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
    }
  }
  else if (Buttonpressed === 3) {
    if (place.length > 2) {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") {
      if (GridChar === "L" || GridChar === "J" || GridChar === "K") {
        //nothin happens
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "black";
          }
        }
      }
    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
    }
  }
}

function PlacementIndicator(place)// Hier wird angezeigt wo das schiff sein würde wenn man das feld anklickt über das die maus gerdee ist
{
  if (Buttonpressed === 1) {
    if (place.length > 2) {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") {
      if (GridChar === "L") {
        //nothin happens
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
          }
        }
      }

    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
    }
  }
  else if (Buttonpressed === 2) {
    if (place.length > 2) {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") {
      if (GridChar === "L" || GridChar === "K") {
        //nothin happens
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
          }
        }
      }
    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
    }
  }
  else if (Buttonpressed === 3) {
    if (place.length > 2) {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);
    }
    else {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
    }
    if (alignment === "h") {
      if (GridChar === "L" || GridChar === "J" || GridChar === "K") {
        //nothin happens
      }
      else {
        for (counter = 0; counter < AllChars.length; counter++) {
          if (AllChars[counter] === GridChar) {
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
            counter++;
            place = GridNumber + AllChars[counter];
            if (NotMarked(place))
              document.getElementById(place).style.backgroundColor = "#009900";
          }
        }
      }
    }
    else if (alignment === "v") {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
      GridNumber++;
      place = GridNumber + GridChar;
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "#009900";
    }
  }
}
function PlaceSmallShip() //
{
  if (Buttonpressed != 1 && Buttonpressed < 4) {
    document.getElementById("SmallShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 1;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
  //else if (Buttonpressed === 1)
}
function PlaceMediumShip() {
  if (Buttonpressed != 2 && Buttonpressed < 4) {
    document.getElementById("MediumShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 2;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
}
function PlaceBigShip() {
  if (Buttonpressed != 3 && Buttonpressed < 4) {
    document.getElementById("BigShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 3;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
}

function TableClick(place) { // wenn man ein feld auswählt wird hier die gewählzt e position gespeichert und markiert
  if (Buttonpressed === 1) {
    if (alignment === "h") {
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);

      for (counter = 0; counter < AllChars.length; counter++) {// goes up the alphabet one place
        if (AllChars[counter] === GridChar) {
          counter++;
          GridChar = AllChars[counter];
          if (counter === AllChars.length) { // ends function if the rightmost field was selected to prevent error
            break;
          }
          secondplace = GridNumber + GridChar;
          for (counter2 = 0; counter2 <= 2; counter2++)
          // look if a ship is unassigned if yes assign it if not give error
          {
            console.log(counter2);
            if (SmallShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)) {
              //Because arrays begin with 0 but my objects not
              counter2++;
              SmallShips[`ship${counter2}`][0] = place;
              SmallShips[`ship${counter2}`][1] = secondplace;
              counter2--;
              SmallShips.Assigned[counter2] = "y"


              console.log(SmallShips)// delete before release
              // Mark fields and return button to default state
              document.getElementById(secondplace).style.backgroundColor = "#006600";
              document.getElementById("SmallShipButton").style.backgroundColor = "white";
              document.getElementById(place).style.backgroundColor = "#006600";
              Buttonpressed = 0;
              break;

            }
            else if (counter2 === 2) {
              alert("error")
            }
          }
        }
      }
    }
  } else if (Buttonpressed === 2) {
    if (alignment === "h") {//looks if vertical or horizontal is selected
      GridNumber = place.slice(0, 1);
      GridChar = place.slice(1, 2);
      for (counter = 0; counter < AllChars.length; counter++) {// goes up the alphabet one place
        if (AllChars[counter] === GridChar) {
          counter++;
          GridChar = AllChars[counter];
          if (counter === AllChars.length - 1) { // ends function if the rightmost field was selected to prevent error
            break;
          }
          secondplace = GridNumber + GridChar;
          counter++;
          GridChar = AllChars[counter];
          thirdplace = GridNumber + GridChar;
          for (counter2 = 0; counter2 < 2; counter2++)
          // look if a ship is unassigned if yes assign it if not give error
          {
            console.log(counter2);
            if (MediumShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)
              && NotMarked(thirdplace)) {
              //Because arrays begin with 0 but my objects not
              counter2++;
              MediumShips[`ship${counter2}`][0] = place;
              MediumShips[`ship${counter2}`][1] = secondplace;
              MediumShips[`ship${counter2}`][2] = thirdplace;

              counter2--;
              MediumShips.Assigned[counter2] = "y";


              console.log(MediumShips)// delete before release
              // Mark fields and return button to default state
              document.getElementById(thirdplace).style.backgroundColor = "#006600";
              document.getElementById(secondplace).style.backgroundColor = "#006600";
              document.getElementById("MediumShipButton").style.backgroundColor = "white";
              document.getElementById(place).style.backgroundColor = "#006600";
              Buttonpressed = 0;
              break;

            }
            else if (counter2 === 1) {
              alert("error")
            }
          }
        }
      }
    }
  }

}
function TableClickBig(place) { // für größere zahlen ( kann warscheinlich später rausgenommen und durch eine lösung wie bei placementindikator erstzt werden)
  if (Buttonpressed === 1) {
    if (alignment === "h") {
      GridNumber = place.slice(0, 2);
      GridChar = place.slice(2, 3);

      for (counter = 0; counter < AllChars.length; counter++) {// goes up the alphabet one place
        if (AllChars[counter] === GridChar) {
          counter++;
          GridChar = AllChars[counter];
          if (counter === AllChars.length) { // ends function if the rightmost field was selected to prevent error
            break;
          }
          secondplace = GridNumber + GridChar;
          for (counter2 = 0; counter2 <= 2; counter2++)
          // look if a ship is unassigned if yes assign it if not give error
          {
            console.log(counter2);
            if (SmallShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)) {
              //Because arrays begin with 0 but my objects not
              counter2++;
              SmallShips[`ship${counter2}`][0] = place;
              SmallShips[`ship${counter2}`][1] = secondplace;
              counter2--;
              SmallShips.Assigned[counter2] = "y";


              console.log(SmallShips)// delete before release
              // Mark fields and return button to default state
              document.getElementById(secondplace).style.backgroundColor = "#006600";
              document.getElementById("SmallShipButton").style.backgroundColor = "white";
              document.getElementById(place).style.backgroundColor = "#006600";
              Buttonpressed = 0;
              break;

            }
            else if (counter2 === 2) {
              alert("error")
            }
          }
        }
      }
    }
  }
}


