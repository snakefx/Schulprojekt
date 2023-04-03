var TinyShips = {
  ship1: "0",
  ship2: "0",
  ship3: "0",
  ship4: "0",
  Assigned: ["n", "n", "n", "n"]
}

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
  Assigned: "n"
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
    CurrentPlayer = 2;
  }
  else {
    CurrentPlayer = 1;
  }
}
function BotMove() { // hier soll der bot hinkommen

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

function ChangeAlignment(current) { // für die radio buttons
  document.getElementById(alignment).checked = false;
  alignment = current;
  document.getElementById(current).checked = true;
}
function SelectedButton() { // hier wird ein button auf weiß zurückgesetzt wenn er nicht mehr aktiv ist (muss in zukunft verbessert werden)
  switch (Buttonpressed) {
    case 0:
      break;
    case 1:
      document.getElementById("TinyShipButton").style.backgroundColor = "white";
    case 2:
      document.getElementById("SmallShipButton").style.backgroundColor = "white";
      break;
    case 3:
      document.getElementById("MediumShipButton").style.backgroundColor = "white";
      break;
    case 4:
      document.getEdlementById("BigShipButton").style.backgroundColor = "white";
      break;
  }
}



function PlaceTinyShip() {
  if (Buttonpressed != 1 && Buttonpressed < 5) {
    document.getElementById("TinyShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 1;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
  //else if (Buttonpressed === 1)
}
function PlaceSmallShip() //
{
  if (Buttonpressed != 2 && Buttonpressed < 5) {
    document.getElementById("SmallShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 2;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
  //else if (Buttonpressed === 1)
}
function PlaceMediumShip() {
  if (Buttonpressed != 3 && Buttonpressed < 5) {
    document.getElementById("MediumShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 3;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
}
function PlaceBigShip() {
  if (Buttonpressed != 4 && Buttonpressed < 5) {
    document.getElementById("BigShipButton").style.backgroundColor = "grey";
    SelectedButton();
    Buttonpressed = 4;
  }
  else {
    SelectedButton();
    Buttonpressed = 0;
  }
}

function TableClick(place) { // wenn man ein feld auswählt wird hier die gewählzt e position gespeichert und markiert
  if (Buttonpressed === 1) {
    for (counter2 = 0; counter2 <= 3; counter2++)
    // look if a ship is unassigned if yes assign it if not give error
    {
      if (TinyShips.Assigned[counter2] === "n" && NotMarked(place)) {
        counter2++;
        TinyShips[`ship${counter2}`] = place;
        counter2--
        TinyShips.Assigned[counter2] = "y"

        document.getElementById("TinyShipButton").style.backgroundColor = "white";
        document.getElementById(place).style.backgroundColor = "#006600";
        Buttonpressed = 0;
        break;
      }else if (counter2 === 3)
      {
        alert("error");
      }

    }
  }
  if (Buttonpressed === 2) {
    if (alignment === "h") {
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }

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
            if (SmallShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)) {
              //Because arrays begin with 0 but my objects not
              counter2++;
              SmallShips[`ship${counter2}`][0] = place;
              SmallShips[`ship${counter2}`][1] = secondplace;
              counter2--;
              SmallShips.Assigned[counter2] = "y"


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
    if (alignment === "v") {
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }

      if (place + 1 > 12) {// to prevent placing ships outside of field

      }
      else {


        GridNumber++;
        secondplace = GridNumber + GridChar;
        for (counter2 = 0; counter2 <= 2; counter2++)
        // look if a ship is unassigned if yes assign it if not give error
        {
          if (SmallShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)) {
            //Because arrays begin with 0 but my objects not
            counter2++;
            SmallShips[`ship${counter2}`][0] = place;
            SmallShips[`ship${counter2}`][1] = secondplace;
            counter2--;
            SmallShips.Assigned[counter2] = "y"


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
  else if (Buttonpressed === 3) {
    if (alignment === "h") {//looks if vertical or horizontal is selected
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }
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
            if (MediumShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)
              && NotMarked(thirdplace)) {
              //Because arrays begin with 0 but my objects not
              counter2++;
              MediumShips[`ship${counter2}`][0] = place;
              MediumShips[`ship${counter2}`][1] = secondplace;
              MediumShips[`ship${counter2}`][2] = thirdplace;

              counter2--;
              MediumShips.Assigned[counter2] = "y";


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
    if (alignment === "v") {//looks if vertical or horizontal is selected
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }
      if (place + 2 > 12) {// to prevent placing ships outside of field
      }
      else {
        GridNumber++;
        secondplace = GridNumber + GridChar;
        GridNumber++;
        thirdplace = GridNumber + GridChar;
        for (counter2 = 0; counter2 <= 2; counter2++) {
          if (MediumShips.Assigned[counter2] === "n" && NotMarked(place) && NotMarked(secondplace)
            && NotMarked(thirdplace)) {
            //Because arrays begin with 0 but my objects not
            counter2++;
            MediumShips[`ship${counter2}`][0] = place;
            MediumShips[`ship${counter2}`][1] = secondplace;
            MediumShips[`ship${counter2}`][2] = thirdplace;

            counter2--;
            MediumShips.Assigned[counter2] = "y";


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


  } else if (Buttonpressed === 4) {
    if (alignment === "h") {//looks if vertical or horizontal is selected
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }
      for (counter = 0; counter < AllChars.length; counter++) {// goes up the alphabet one place
        if (AllChars[counter] === GridChar) {
          counter++;
          GridChar = AllChars[counter];
          if (counter === AllChars.length - 2) { // ends function if the rightmost field was selected to prevent error
            break;
          }
          secondplace = GridNumber + GridChar;
          counter++;
          GridChar = AllChars[counter];
          thirdplace = GridNumber + GridChar;
          counter++;
          GridChar = AllChars[counter];
          fourthplace = GridNumber + GridChar;



          if (BigShips.Assigned === "n" && NotMarked(place) && NotMarked(secondplace)
            && NotMarked(thirdplace) && NotMarked(fourthplace)) {
            //Because arrays begin with 0 but my objects not
            BigShips[`ship1`][0] = place;
            BigShips[`ship1`][1] = secondplace;
            BigShips[`ship1`][2] = thirdplace;
            BigShips[`ship1`][3] = fourthplace;

            BigShips.Assigned = "y";
            // Mark fields and return button to default state
            document.getElementById(fourthplace).style.backgroundColor = "#006600";
            document.getElementById(thirdplace).style.backgroundColor = "#006600";
            document.getElementById(secondplace).style.backgroundColor = "#006600";
            document.getElementById("BigShipButton").style.backgroundColor = "white";
            document.getElementById(place).style.backgroundColor = "#006600";
            Buttonpressed = 0;
            break;

          }
          else {
            alert("error")
          }
        }
      }
    }
    if (alignment === "v") {//looks if vertical or horizontal is selected
      if (place.length > 2) {
        GridNumber = place.slice(0, 2);
        GridChar = place.slice(2, 3);
      }
      else {
        GridNumber = place.slice(0, 1);
        GridChar = place.slice(1, 2);
      }
      if (place + 3 > 12) {// to prevent placing ships outside of field
      }
      else {
        GridNumber++;
        secondplace = GridNumber + GridChar;
        GridNumber++;
        thirdplace = GridNumber + GridChar;
        GridNumber++;
        fourthplace = GridNumber + GridChar;
        if (BigShips.Assigned === "n" && NotMarked(place) && NotMarked(secondplace)
          && NotMarked(thirdplace) && NotMarked(fourthplace)) {
          //Because arrays begin with 0 but my objects not
          BigShips[`ship1`][0] = place;
          BigShips[`ship1`][1] = secondplace;
          BigShips[`ship1`][2] = thirdplace;
          BigShips[`ship1`][3] = fourthplace;

          BigShips.Assigned = "y";
          // Mark fields and return button to default state
          document.getElementById(fourthplace).style.backgroundColor = "#006600";
          document.getElementById(thirdplace).style.backgroundColor = "#006600";
          document.getElementById(secondplace).style.backgroundColor = "#006600";
          document.getElementById("BigShipButton").style.backgroundColor = "white";
          document.getElementById(place).style.backgroundColor = "#006600";
          Buttonpressed = 0;


        }
        else {
          alert("error")
        }
      }
    }


  }
}


