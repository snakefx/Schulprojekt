function NotMarked(place) { // hier wird getestet ob ein feld belegt ist false = belegt  true = nicht belegt
  let marked = true;
  let specialcounter;//so it does not interfere with the oother counters
  let specialcounter2;
  for (specialcounter = 1; specialcounter < 5; specialcounter++) {
    if (TinyShips[`ship${specialcounter}`] === place) {
      marked = false;
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
function ShotIndicator(place) {
  console.log(2 + place)
  document.getElementById("2" + place).style.backgroundColor = "yellow";

}
function RemoveShotIndicator(place) {
  document.getElementById("2" + place).style.backgroundColor = "black";
}

function shoot(place) {//Hier kann der code für das "schießen" geschrieben werden (muss nicht KANN) ,
  //wird durch drücken auf feld der unteren tabelle aktiviert und place gibt die position des aktivierten feldes z.B 4D
}
function RemovePlacementIndicator(place) { // hier wird die markierung zurückgesetzt sobald der mausziger das feld verlässt (funktioniert noch nicht perfekt)
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
    else if (alignment === "v") {
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
    else if (alignment === "v") {
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