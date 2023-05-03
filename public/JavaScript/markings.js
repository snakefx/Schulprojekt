function NotMarked(place) { // hier wird getestet ob ein feld belegt ist false = belegt  true = nicht belegt
  let marked = true;
  let specialcounter;//so it does not interfere with the oother counters
  let specialcounter2;
  for (specialcounter = 1; specialcounter < 5; specialcounter++) {
    if (TinyShips[`ship${specialcounter}`] === place) {
      marked = false;
      console.log("test");
    }
  }
  for (specialcounter = 1; specialcounter < 4; specialcounter++) {
    for (specialcounter2 = 0; specialcounter2 < SmallShips[`ship${specialcounter}`].length; specialcounter2++) {
      if (SmallShips[`ship${specialcounter}`][specialcounter2] === place) {
        marked = false;
      }
    }
  }
  for (specialcounter = 1; specialcounter < 3; specialcounter++) {
    for (specialcounter2 = 0; specialcounter2 < MediumShips[`ship${specialcounter}`].length; specialcounter2++) {
      if (MediumShips[`ship${specialcounter}`][specialcounter2] === place) {
        marked = false;
      }
    }
  }
  for (specialcounter2 = 0; specialcounter2 < BigShips[`ship1`].length; specialcounter2++) {
    if (BigShips[`ship1`][specialcounter2] === place) {
      marked = false;
    }
  }
  return marked;
}
function OneFieldDistance(place) {  //Schut ob feld in 1 feld umkreis belegt true = umliegende felder frei false= min 1 umliegenes feld belegt
  let IntNumber;
  if (place.length > 2) { // standard slice also zb. place=B6 in GridChar=B  Gridnumber=6 umwandeln
    GridNumber = place.slice(0, 2);
    GridChar = place.slice(2, 3);
  }
  else {
    GridNumber = place.slice(0, 1);
    GridChar = place.slice(1, 2);
  }
  IntNumber = parseInt(GridNumber);
  if (NotMarked(IntNumber + 1 + GridChar)) { // gibt alle umliegenden felder an notmarked, wenn alles true 
    if (NotMarked(IntNumber - 1 + GridChar)) {
      for (counter = 0; AllChars.length > counter; counter++) {
        if (AllChars[counter] === GridChar) {
          if (NotMarked(IntNumber + AllChars[counter - 1])) {
            if (NotMarked(IntNumber + AllChars[counter + 1])) {
              if (NotMarked(IntNumber + 1 + AllChars[counter + 1])) {
                if (NotMarked(IntNumber - 1 + AllChars[counter + 1])) {
                  if (NotMarked(IntNumber + 1 + AllChars[counter - 1])) {
                    if (NotMarked(IntNumber - 1 + AllChars[counter - 1])) { // wenn jemand einen hübscheren weg kennt dies zu prüfen kann er dies gern umschreiben mir fällt auf die schnelle nix ein
                      console.log(IntNumber + 1 + GridChar);
                      return true;
                    }
                  }

                }
              }
            }
          }
        }



      }
    }
  } console.log("false");
  return false; // sollte nur dies zurückgeben wenn ein "NotMarked" false zurückgibt

}
function NotMarkedAdvanced(place) {// testet umligende und angeklicktes feld true = alles frei; false= min 1 feld Belegt
  if (OneFieldDistance(place) && NotMarked(place)) {
    return true;
  }
  else {
    return false;
  }
}
function MarkMyShips() {
  let mark;
  for (counter=1;counter<6;counter++)
  {//SmallShips[`ship${specialcounter}`]
    console.log(TinyShips.ship1);
   // document.getElementById(mark).style.backgroundColor = "green";
    
  }
}
MarkMyShips();


function ShotIndicator(place) {
  if (InClickedArray(place) === false) {
    document.getElementById("2" + place).style.backgroundColor = "yellow";
  }
}
function RemoveShotIndicator(place) {
  if (InClickedArray(place) === false) {
    document.getElementById("2" + place).style.backgroundColor = "black";
  }
}

function shoot(place) {//Hier kann der code für das "schießen" geschrieben werden (muss nicht KANN) ,
  //wird durch drücken auf feld der unteren tabelle aktiviert und place gibt die position des aktivierten feldes z.B 4D
}
function RemovePlacementIndicator(place) {
  if (Buttonpressed === 1) {
    if (NotMarked(place))
      document.getElementById(place).style.backgroundColor = "black";
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
    else if (alignment === "v" && GridNumber <= 11) {
      if (NotMarked(place))
        document.getElementById(place).style.backgroundColor = "black";
      GridNumber++;
      var place = GridNumber + GridChar;
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
    else if (alignment === "v" && GridNumber <= 10) {
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
  else if (Buttonpressed === 4) {
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
    else if (alignment === "v" && GridNumber <= 09) {
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
function PlacementIndicator(place) {   // Hier wird angezeigt wo das schiff sein würde wenn man das feld anklickt über das die maus gerdee ist

  if (Buttonpressed === 1) {
    if (NotMarked(place))
      document.getElementById(place).style.backgroundColor = "#009900";
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
    else if (alignment === "v" && GridNumber <= 11) {
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
    else if (alignment === "v" && GridNumber <= 10) {
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
  else if (Buttonpressed === 4) {
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
    else if (alignment === "v" && GridNumber <= 9) {
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