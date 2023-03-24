<x-app-layout><!-- um lokalen server zu starten sodass man mit localhost die seite sieht schreibt "php artisan serve" in das terminal(ohne semicolons)-->
    <style>
        table { /* css fürs styling*/
            color: #86b300;
            background-color: black;
            border: none;
            border-collapse: collapse;
            margin-top: 50px;
        }

        th {
            border-color: greenyellow;
            border-style: solid;
            width: 40px;
            height: 40px;
            text-align: center;
        }

        td {
            border-color: greenyellow;
            border-style: outset;
            padding: 0px;
            margin: 0px;

        }

        .shipbutton {
            color:#39e600;
            background-color: black;
            border: none;
            padding: 5px;
            margin: 0px;
            width: 65px;
            height: 45px;
        }

        .NumberInTable {
            width: 40px;
            height: 40px;
            padding: 10px;
            text-align: center;
        }

       /* .shipbutton:hover {
            background-color: #003300;
        }*/

        #SmallShipButton:active {
            background-color: #009900;
        }

       /* #DragDiv {
            position: absolute;
            color: seagreen;
            background-color: gray;
            border: 1px solid #d3d3d3;
            width: 190px;
            height: 40px;
        }*/
        label{
            color: rgb(238, 115, 15);
        }
    </style>
    
    <button id="SmallShipButton" onclick="PlaceSmallShip()">3 small Ships left</button><!-- buttons um auszuwählen welches schiff platziert wird( benötigt verbesserungen) -->
    <button id="MediumShipButton" onclick="PlaceMediumShip()">2 Medium Ships available</button>
    <button id="BigShipButton" onclick="PlaceBigShip()">1 Big Ship available</button>
    <label for="horizontal">Horizontal</label><!-- labels und radiobuttons um auszuwählen ob schiff horizontal oder vertical platziert wird-->
    <input type="radio" name="horizontal" id="h" onclick="ChangeAlignment('h')"/>
    <label for="vertical">Vertical</label>
    <input type="radio" name="vertical" id="v" onclick="ChangeAlignment('v')"/>
    <table onload="PlaceEventListener()" id="table"><!-- die gesamte tabbele ist das spielfeld (muss aufgeräumt werden (vlt mit js), und möglicherweis durch flexboxen ersetzt(geringe priorität))-->
        <tr>
            <th></th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
            <th>G</th>
            <th>H</th>
            <th>I</th>
            <th>J</th>
            <th>K</th>
            <th>L</th>
        </tr>
        <tr>
            <td class="NumberInTable">1</td>
            <td><button onmouseout="RemovePlacementIndicator('1A')" onmouseover="PlacementIndicator('1A')" onclick="TableClick('1A')" id="1A" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1B')" onmouseover="PlacementIndicator('1B')" onclick="TableClick('1B')" id="1B" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1C')" onmouseover="PlacementIndicator('1C')" onclick="TableClick('1C')" id="1C" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1D')" onmouseover="PlacementIndicator('1D')" onclick="TableClick('1D')" id="1D" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1E')" onmouseover="PlacementIndicator('1E')" onclick="TableClick('1E')" id="1E" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1F')" onmouseover="PlacementIndicator('1F')"onclick="TableClick('1F')" id="1F" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1G')" onmouseover="PlacementIndicator('1G')" onclick="TableClick('1G')" id="1G" class="shipbutton"> </button></td>
            <td><button onmouseout="RemovePlacementIndicator('1H')" onmouseover="PlacementIndicator('1H')" onclick="TableClick('1H')" id="1H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('1I')" onmouseover="PlacementIndicator('1I')" onclick="TableClick('1I')" id="1I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('1J')" onmouseover="PlacementIndicator('1J')" onclick="TableClick('1J')" id="1J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('1K')" onmouseover="PlacementIndicator('1K')" onclick="TableClick('1K')" id="1K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('1L')" onmouseover="PlacementIndicator('1L')" onclick="TableClick('1L')" id="1L" class="shipbutton"></button></td>



        </tr>
        <tr>
            <td class="NumberInTable">2</td>
            <td><button onmouseout="RemovePlacementIndicator('2A')" onmouseover="PlacementIndicator('2A')" onclick="TableClick('2A')" id="2A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2B')" onmouseover="PlacementIndicator('2B')" onclick="TableClick('2B')" id="2B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2C')" onmouseover="PlacementIndicator('2C')" onclick="TableClick('2C')" id="2C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2D')" onmouseover="PlacementIndicator('2D')" onclick="TableClick('2D')" id="2D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2E')" onmouseover="PlacementIndicator('2E')" onclick="TableClick('2E')" id="2E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2F')" onmouseover="PlacementIndicator('2F')" onclick="TableClick('2F')" id="2F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2G')" onmouseover="PlacementIndicator('2G')" onclick="TableClick('2G')" id="2G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2H')" onmouseover="PlacementIndicator('2H')" onclick="TableClick('2H')" id="2H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2I')" onmouseover="PlacementIndicator('2I')" onclick="TableClick('2I')" id="2I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2J')" onmouseover="PlacementIndicator('2J')" onclick="TableClick('2J')" id="2J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2K')" onmouseover="PlacementIndicator('2K')" onclick="TableClick('2K')" id="2K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('2L')" onmouseover="PlacementIndicator('2L')" onclick="TableClick('2L')" id="2L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">3</td>
            <td><button onmouseout="RemovePlacementIndicator('3A')" onmouseover="PlacementIndicator('3A')" onclick="TableClick('3A')" id="3A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3B')" onmouseover="PlacementIndicator('3B')" onclick="TableClick('3B')" id="3B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3C')" onmouseover="PlacementIndicator('3C')" onclick="TableClick('3C')" id="3C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3D')" onmouseover="PlacementIndicator('3D')" onclick="TableClick('3D')" id="3D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3E')" onmouseover="PlacementIndicator('3E')" onclick="TableClick('3E')" id="3E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3F')" onmouseover="PlacementIndicator('3F')" onclick="TableClick('3F')" id="3F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3G')" onmouseover="PlacementIndicator('3G')" onclick="TableClick('3G')" id="3G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3H')" onmouseover="PlacementIndicator('3H')" onclick="TableClick('3H')" id="3H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3I')" onmouseover="PlacementIndicator('3I')" onclick="TableClick('3I')" id="3I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3J')" onmouseover="PlacementIndicator('3J')" onclick="TableClick('3J')" id="3J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3K')" onmouseover="PlacementIndicator('3K')" onclick="TableClick('3K')" id="3K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('3L')" onmouseover="PlacementIndicator('3L')" onclick="TableClick('3L')" id="3L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">4</td>
            <td><button onmouseout="RemovePlacementIndicator('4A')" onmouseover="PlacementIndicator('4A')" onclick="TableClick('4A')" id="4A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4B')" onmouseover="PlacementIndicator('4B')" onclick="TableClick('4B')" id="4B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4C')" onmouseover="PlacementIndicator('4C')" onclick="TableClick('4C')" id="4C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4D')" onmouseover="PlacementIndicator('4D')" onclick="TableClick('4D')" id="4D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4E')" onmouseover="PlacementIndicator('4E')" onclick="TableClick('4E')" id="4E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4F')" onmouseover="PlacementIndicator('4F')" onclick="TableClick('4F')" id="4F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4G')" onmouseover="PlacementIndicator('4G')" onclick="TableClick('4G')" id="4G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4H')" onmouseover="PlacementIndicator('4H')" onclick="TableClick('4H')" id="4H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4I')" onmouseover="PlacementIndicator('4I')" onclick="TableClick('4I')" id="4I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4J')" onmouseover="PlacementIndicator('4J')" onclick="TableClick('4J')" id="4J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4K')" onmouseover="PlacementIndicator('4K')" onclick="TableClick('4K')" id="4K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('4L')" onmouseover="PlacementIndicator('4L')" onclick="TableClick('4L')" id="4L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">5</td>
            <td><button onmouseout="RemovePlacementIndicator('5A')" onmouseover="PlacementIndicator('5A')" onclick="TableClick('5A')" id="5A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5B')" onmouseover="PlacementIndicator('5B')" onclick="TableClick('5B')" id="5B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5C')" onmouseover="PlacementIndicator('5C')" onclick="TableClick('5C')" id="5C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5D')" onmouseover="PlacementIndicator('5D')" onclick="TableClick('5D')" id="5D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5E')" onmouseover="PlacementIndicator('5E')" onclick="TableClick('5E')" id="5E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5F')" onmouseover="PlacementIndicator('5F')" onclick="TableClick('5F')" id="5F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5G')" onmouseover="PlacementIndicator('5G')" onclick="TableClick('5G')" id="5G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5H')" onmouseover="PlacementIndicator('5H')" onclick="TableClick('5H')" id="5H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5I')" onmouseover="PlacementIndicator('5I')" onclick="TableClick('5I')" id="5I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5J')" onmouseover="PlacementIndicator('5J')" onclick="TableClick('5J')" id="5J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5K')" onmouseover="PlacementIndicator('5K')" onclick="TableClick('5K')" id="5K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('5L')" onmouseover="PlacementIndicator('5L')" onclick="TableClick('5L')" id="5L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">6</td>
            <td><button onmouseout="RemovePlacementIndicator('6A')" onmouseover="PlacementIndicator('6A')" onclick="TableClick('6A')" id="6A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6B')" onmouseover="PlacementIndicator('6B')" onclick="TableClick('6B')" id="6B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6C')" onmouseover="PlacementIndicator('6C')" onclick="TableClick('6C')" id="6C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6D')" onmouseover="PlacementIndicator('6D')" onclick="TableClick('6D')" id="6D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6E')" onmouseover="PlacementIndicator('6E')" onclick="TableClick('6E')" id="6E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6F')" onmouseover="PlacementIndicator('6F')" onclick="TableClick('6F')" id="6F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6G')" onmouseover="PlacementIndicator('6G')" onclick="TableClick('6G')" id="6G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6H')" onmouseover="PlacementIndicator('6H')" onclick="TableClick('6H')" id="6H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6I')" onmouseover="PlacementIndicator('6I')" onclick="TableClick('6I')" id="6I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6J')" onmouseover="PlacementIndicator('6J')" onclick="TableClick('6J')" id="6J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6K')" onmouseover="PlacementIndicator('6K')" onclick="TableClick('6K')" id="6K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('6L')" onmouseover="PlacementIndicator('6L')" onclick="TableClick('6L')" id="6L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">7</td>
            <td><button onmouseout="RemovePlacementIndicator('7A')" onmouseover="PlacementIndicator('7A')" onclick="TableClick('7A')" id="7A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7B')" onmouseover="PlacementIndicator('7B')" onclick="TableClick('7B')" id="7B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7C')" onmouseover="PlacementIndicator('7C')" onclick="TableClick('7C')" id="7C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7D')" onmouseover="PlacementIndicator('7D')" onclick="TableClick('7D')" id="7D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7E')" onmouseover="PlacementIndicator('7E')" onclick="TableClick('7E')" id="7E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7F')" onmouseover="PlacementIndicator('7F')" onclick="TableClick('7F')" id="7F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7G')" onmouseover="PlacementIndicator('7G')" onclick="TableClick('7G')" id="7G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7H')" onmouseover="PlacementIndicator('7H')" onclick="TableClick('7H')" id="7H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7I')" onmouseover="PlacementIndicator('7I')" onclick="TableClick('7I')" id="7I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7J')" onmouseover="PlacementIndicator('7J')" onclick="TableClick('7J')" id="7J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7K')" onmouseover="PlacementIndicator('7K')" onclick="TableClick('7K')" id="7K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('7L')" onmouseover="PlacementIndicator('7L')" onclick="TableClick('7L')" id="7L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">8</td>
            <td><button onmouseout="RemovePlacementIndicator('8A')" onmouseover="PlacementIndicator('8A')" onclick="TableClick('8A')" id="8A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8B')" onmouseover="PlacementIndicator('8B')" onclick="TableClick('8B')" id="8B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8C')" onmouseover="PlacementIndicator('8C')" onclick="TableClick('8C')" id="8C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8D')" onmouseover="PlacementIndicator('8D')" onclick="TableClick('8D')" id="8D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8E')" onmouseover="PlacementIndicator('8E')" onclick="TableClick('8E')" id="8E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8F')" onmouseover="PlacementIndicator('8F')" onclick="TableClick('8F')" id="8F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8G')" onmouseover="PlacementIndicator('8G')" onclick="TableClick('8G')" id="8G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8H')" onmouseover="PlacementIndicator('8H')" onclick="TableClick('8H')" id="8H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8I')" onmouseover="PlacementIndicator('8I')" onclick="TableClick('8I')" id="8I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8J')" onmouseover="PlacementIndicator('8J')" onclick="TableClick('8J')" id="8J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8K')" onmouseover="PlacementIndicator('8K')" onclick="TableClick('8K')" id="8K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('8L')" onmouseover="PlacementIndicator('8L')" onclick="TableClick('8L')" id="8L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">9</td>
            <td><button onmouseout="RemovePlacementIndicator('9A')" onmouseover="PlacementIndicator('9A')" onclick="TableClick('9A')" id="9A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9B')" onmouseover="PlacementIndicator('9B')" onclick="TableClick('9B')" id="9B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9C')" onmouseover="PlacementIndicator('9C')" onclick="TableClick('9C')" id="9C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9D')" onmouseover="PlacementIndicator('9D')" onclick="TableClick('9D')" id="9D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9E')" onmouseover="PlacementIndicator('9E')" onclick="TableClick('9E')" id="9E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9F')" onmouseover="PlacementIndicator('9F')" onclick="TableClick('9F')" id="9F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9G')" onmouseover="PlacementIndicator('9G')" onclick="TableClick('9G')" id="9G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9H')" onmouseover="PlacementIndicator('9H')" onclick="TableClick('9H')" id="9H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9I')" onmouseover="PlacementIndicator('9I')" onclick="TableClick('9I')" id="9I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9J')" onmouseover="PlacementIndicator('9J')" onclick="TableClick('9J')" id="9J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9K')" onmouseover="PlacementIndicator('9K')" onclick="TableClick('9K')" id="9K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('9L')" onmouseover="PlacementIndicator('9L')" onclick="TableClick('9L')" id="9L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">10</td>
            <td><button onmouseout="RemovePlacementIndicator('10A')" onmouseover="PlacementIndicator('10A')" onclick="TableClickBig('10A')" id="10A"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10B')" onmouseover="PlacementIndicator('10B')" onclick="TableClickBig('10B')" id="10B"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10C')" onmouseover="PlacementIndicator('10C')" onclick="TableClickBig('10C')" id="10C"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10D')" onmouseover="PlacementIndicator('10D')" onclick="TableClickBig('10D')" id="10D"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10E')" onmouseover="PlacementIndicator('10E')" onclick="TableClickBig('10E')" id="10E"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10F')" onmouseover="PlacementIndicator('10F')" onclick="TableClickBig('10F')" id="10F"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10G')" onmouseover="PlacementIndicator('10G')" onclick="TableClickBig('10G')" id="10G"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10H')" onmouseover="PlacementIndicator('10H')" onclick="TableClickBig('10H')" id="10H"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10I')" onmouseover="PlacementIndicator('10I')" onclick="TableClickBig('10I')" id="10I"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10J')" onmouseover="PlacementIndicator('10J')" onclick="TableClickBig('10J')" id="10J"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10K')" onmouseover="PlacementIndicator('10K')" onclick="TableClickBig('10K')" id="10K"class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('10L')" onmouseover="PlacementIndicator('10L')" onclick="TableClickBig('10L')" id="10L"class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">11</td>
            <td><button onmouseout="RemovePlacementIndicator('11A')" onmouseover="PlacementIndicator('11A')" onclick="TableClickBig('11A')" id="11A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11B')" onmouseover="PlacementIndicator('11B')" onclick="TableClickBig('11B')" id="11B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11C')" onmouseover="PlacementIndicator('11C')" onclick="TableClickBig('11C')" id="11C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11D')" onmouseover="PlacementIndicator('11D')" onclick="TableClickBig('11D')" id="11D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11E')" onmouseover="PlacementIndicator('11E')" onclick="TableClickBig('11E')" id="11E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11F')" onmouseover="PlacementIndicator('11F')" onclick="TableClickBig('11F')" id="11F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11G')" onmouseover="PlacementIndicator('11G')" onclick="TableClickBig('11G')" id="11G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11H')" onmouseover="PlacementIndicator('11H')" onclick="TableClickBig('11H')" id="11H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11I')" onmouseover="PlacementIndicator('11I')" onclick="TableClickBig('11I')" id="11I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11J')" onmouseover="PlacementIndicator('11J')" onclick="TableClickBig('11J')" id="11J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11K')" onmouseover="PlacementIndicator('11K')" onclick="TableClickBig('11K')" id="11K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('11L')" onmouseover="PlacementIndicator('11L')" onclick="TableClickBig('11L')" id="11L" class="shipbutton"></button></td>
        </tr>
        <tr>
            <td class="NumberInTable">12</td>
            <td><button onmouseout="RemovePlacementIndicator('12A')" onmouseover="PlacementIndicator('12A')" onclick="TableClickBig('12A')" id="12A" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12B')" onmouseover="PlacementIndicator('12B')" onclick="TableClickBig('12B')" id="12B" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12C')" onmouseover="PlacementIndicator('12C')" onclick="TableClickBig('12C')" id="12C" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12D')" onmouseover="PlacementIndicator('12D')" onclick="TableClickBig('12D')" id="12D" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12E')" onmouseover="PlacementIndicator('12E')" onclick="TableClickBig('12E')" id="12E" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12F')" onmouseover="PlacementIndicator('12F')" onclick="TableClickBig('12F')" id="12F" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12G')" onmouseover="PlacementIndicator('12G')" onclick="TableClickBig('12G')" id="12G" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12H')" onmouseover="PlacementIndicator('12H')" onclick="TableClickBig('12H')" id="12H" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12I')" onmouseover="PlacementIndicator('12I')" onclick="TableClickBig('12I')" id="12I" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12J')" onmouseover="PlacementIndicator('12J')" onclick="TableClickBig('12J')" id="12J" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12K')" onmouseover="PlacementIndicator('12K')" onclick="TableClickBig('12K')" id="12K" class="shipbutton"></button></td>
            <td><button onmouseout="RemovePlacementIndicator('12L')" onmouseover="PlacementIndicator('12L')" onclick="TableClickBig('12L')" id="12L" class="shipbutton"></button></td>
        </tr>

    </table>
    <script src="/js/ships.js"></script><!-- hier ist der link zum javascript file-->
   <script>
     /*   function ChangeShipDirection(){
            var height = document.getElementById("DragDiv").clientHeight;
            var width = document.getElementById("DragDiv").clientWidth;
            if(width < height){
                document.getElementById("DragDiv").style.width = "190px";
                document.getElementById("DragDiv").style.height = "40px";
            }
            else{
                document.getElementById("DragDiv").style.width = "60px";
                document.getElementById("DragDiv").style.height = "130px";
            }
            
        }
            // Make the DIV element draggable:
            dragElement(document.getElementById("DragDiv"));
    
            function dragElement(elmnt) {
                var pos1 = 0,
                    pos2 = 0,
                    pos3 = 0,
                    pos4 = 0;
                if (document.getElementById(elmnt.id + "header")) {
                    // if present, the header is where you move the DIV from:
                    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
                } else {
                    // otherwise, move the DIV from anywhere inside the DIV:
                    elmnt.onmousedown = dragMouseDown;
                }
    
                function dragMouseDown(e) {
                    e = e || window.event;
                    e.preventDefault();
                    // get the mouse cursor position at startup:
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    document.onmouseup = closeDragElement;
                    // call a function whenever the cursor moves:
                    document.onmousemove = elementDrag;
                }
    
                function elementDrag(e) {
                    e = e || window.event;
                    e.preventDefault();
                    // calculate the new cursor position:
                    pos1 = pos3 - e.clientX;
                    pos2 = pos4 - e.clientY;
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    // set the element's new position:
                    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
                }
    
                function closeDragElement() {
                    // stop moving when mouse button is released:
                    document.onmouseup = null;
                    document.onmousemove = null;
                }
            }*/
            </script><!-- soll gegnerfeld werden ist jedoch momentan nur kopie des obrigen feldes (funktioniert nicht)-->
                <table onload="PlaceEventListener()" id="table">
                <tr>
                    <th></th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>E</th>
                    <th>F</th>
                    <th>G</th>
                    <th>H</th>
                    <th>I</th>
                    <th>J</th>
                    <th>K</th>
                    <th>L</th>
                </tr>
                <tr>
                    <td class="NumberInTable">1</td>
                    <td><button onmouseout="RemovePlacementIndicator('1A')" onmouseover="PlacementIndicator('1A')" onclick="TableClick('1A')" id="1A" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1B')" onmouseover="PlacementIndicator('1B')" onclick="TableClick('1B')" id="1B" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1C')" onmouseover="PlacementIndicator('1C')" onclick="TableClick('1C')" id="1C" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1D')" onmouseover="PlacementIndicator('1D')" onclick="TableClick('1D')" id="1D" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1E')" onmouseover="PlacementIndicator('1E')" onclick="TableClick('1E')" id="1E" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1F')" onmouseover="PlacementIndicator('1F')"onclick="TableClick('1F')" id="1F" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1G')" onmouseover="PlacementIndicator('1G')" onclick="TableClick('1G')" id="1G" class="shipbutton"> </button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1H')" onmouseover="PlacementIndicator('1H')" onclick="TableClick('1H')" id="1H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1I')" onmouseover="PlacementIndicator('1I')" onclick="TableClick('1I')" id="1I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1J')" onmouseover="PlacementIndicator('1J')" onclick="TableClick('1J')" id="1J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1K')" onmouseover="PlacementIndicator('1K')" onclick="TableClick('1K')" id="1K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('1L')" onmouseover="PlacementIndicator('1L')" onclick="TableClick('1L')" id="1L" class="shipbutton"></button></td>
        
        
        
                </tr>
                <tr>
                    <td class="NumberInTable">2</td>
                    <td><button onmouseout="RemovePlacementIndicator('2A')" onmouseover="PlacementIndicator('2A')" onclick="TableClick('2A')" id="2A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2B')" onmouseover="PlacementIndicator('2B')" onclick="TableClick('2B')" id="2B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2C')" onmouseover="PlacementIndicator('2C')" onclick="TableClick('2C')" id="2C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2D')" onmouseover="PlacementIndicator('2D')" onclick="TableClick('2D')" id="2D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2E')" onmouseover="PlacementIndicator('2E')" onclick="TableClick('2E')" id="2E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2F')" onmouseover="PlacementIndicator('2F')" onclick="TableClick('2F')" id="2F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2G')" onmouseover="PlacementIndicator('2G')" onclick="TableClick('2G')" id="2G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2H')" onmouseover="PlacementIndicator('2H')" onclick="TableClick('2H')" id="2H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2I')" onmouseover="PlacementIndicator('2I')" onclick="TableClick('2I')" id="2I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2J')" onmouseover="PlacementIndicator('2J')" onclick="TableClick('2J')" id="2J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2K')" onmouseover="PlacementIndicator('2K')" onclick="TableClick('2K')" id="2K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('2L')" onmouseover="PlacementIndicator('2L')" onclick="TableClick('2L')" id="2L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">3</td>
                    <td><button onmouseout="RemovePlacementIndicator('3A')" onmouseover="PlacementIndicator('3A')" onclick="TableClick('3A')" id="3A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3B')" onmouseover="PlacementIndicator('3B')" onclick="TableClick('3B')" id="3B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3C')" onmouseover="PlacementIndicator('3C')" onclick="TableClick('3C')" id="3C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3D')" onmouseover="PlacementIndicator('3D')" onclick="TableClick('3D')" id="3D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3E')" onmouseover="PlacementIndicator('3E')" onclick="TableClick('3E')" id="3E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3F')" onmouseover="PlacementIndicator('3F')" onclick="TableClick('3F')" id="3F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3G')" onmouseover="PlacementIndicator('3G')" onclick="TableClick('3G')" id="3G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3H')" onmouseover="PlacementIndicator('3H')" onclick="TableClick('3H')" id="3H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3I')" onmouseover="PlacementIndicator('3I')" onclick="TableClick('3I')" id="3I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3J')" onmouseover="PlacementIndicator('3J')" onclick="TableClick('3J')" id="3J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3K')" onmouseover="PlacementIndicator('3K')" onclick="TableClick('3K')" id="3K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('3L')" onmouseover="PlacementIndicator('3L')" onclick="TableClick('3L')" id="3L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">4</td>
                    <td><button onmouseout="RemovePlacementIndicator('4A')" onmouseover="PlacementIndicator('4A')" onclick="TableClick('4A')" id="4A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4B')" onmouseover="PlacementIndicator('4B')" onclick="TableClick('4B')" id="4B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4C')" onmouseover="PlacementIndicator('4C')" onclick="TableClick('4C')" id="4C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4D')" onmouseover="PlacementIndicator('4D')" onclick="TableClick('4D')" id="4D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4E')" onmouseover="PlacementIndicator('4E')" onclick="TableClick('4E')" id="4E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4F')" onmouseover="PlacementIndicator('4F')" onclick="TableClick('4F')" id="4F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4G')" onmouseover="PlacementIndicator('4G')" onclick="TableClick('4G')" id="4G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4H')" onmouseover="PlacementIndicator('4H')" onclick="TableClick('4H')" id="4H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4I')" onmouseover="PlacementIndicator('4I')" onclick="TableClick('4I')" id="4I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4J')" onmouseover="PlacementIndicator('4J')" onclick="TableClick('4J')" id="4J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4K')" onmouseover="PlacementIndicator('4K')" onclick="TableClick('4K')" id="4K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('4L')" onmouseover="PlacementIndicator('4L')" onclick="TableClick('4L')" id="4L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">5</td>
                    <td><button onmouseout="RemovePlacementIndicator('5A')" onmouseover="PlacementIndicator('5A')" onclick="TableClick('5A')" id="5A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5B')" onmouseover="PlacementIndicator('5B')" onclick="TableClick('5B')" id="5B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5C')" onmouseover="PlacementIndicator('5C')" onclick="TableClick('5C')" id="5C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5D')" onmouseover="PlacementIndicator('5D')" onclick="TableClick('5D')" id="5D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5E')" onmouseover="PlacementIndicator('5E')" onclick="TableClick('5E')" id="5E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5F')" onmouseover="PlacementIndicator('5F')" onclick="TableClick('5F')" id="5F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5G')" onmouseover="PlacementIndicator('5G')" onclick="TableClick('5G')" id="5G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5H')" onmouseover="PlacementIndicator('5H')" onclick="TableClick('5H')" id="5H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5I')" onmouseover="PlacementIndicator('5I')" onclick="TableClick('5I')" id="5I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5J')" onmouseover="PlacementIndicator('5J')" onclick="TableClick('5J')" id="5J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5K')" onmouseover="PlacementIndicator('5K')" onclick="TableClick('5K')" id="5K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('5L')" onmouseover="PlacementIndicator('5L')" onclick="TableClick('5L')" id="5L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">6</td>
                    <td><button onmouseout="RemovePlacementIndicator('6A')" onmouseover="PlacementIndicator('6A')" onclick="TableClick('6A')" id="6A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6B')" onmouseover="PlacementIndicator('6B')" onclick="TableClick('6B')" id="6B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6C')" onmouseover="PlacementIndicator('6C')" onclick="TableClick('6C')" id="6C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6D')" onmouseover="PlacementIndicator('6D')" onclick="TableClick('6D')" id="6D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6E')" onmouseover="PlacementIndicator('6E')" onclick="TableClick('6E')" id="6E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6F')" onmouseover="PlacementIndicator('6F')" onclick="TableClick('6F')" id="6F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6G')" onmouseover="PlacementIndicator('6G')" onclick="TableClick('6G')" id="6G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6H')" onmouseover="PlacementIndicator('6H')" onclick="TableClick('6H')" id="6H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6I')" onmouseover="PlacementIndicator('6I')" onclick="TableClick('6I')" id="6I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6J')" onmouseover="PlacementIndicator('6J')" onclick="TableClick('6J')" id="6J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6K')" onmouseover="PlacementIndicator('6K')" onclick="TableClick('6K')" id="6K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('6L')" onmouseover="PlacementIndicator('6L')" onclick="TableClick('6L')" id="6L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">7</td>
                    <td><button onmouseout="RemovePlacementIndicator('7A')" onmouseover="PlacementIndicator('7A')" onclick="TableClick('7A')" id="7A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7B')" onmouseover="PlacementIndicator('7B')" onclick="TableClick('7B')" id="7B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7C')" onmouseover="PlacementIndicator('7C')" onclick="TableClick('7C')" id="7C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7D')" onmouseover="PlacementIndicator('7D')" onclick="TableClick('7D')" id="7D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7E')" onmouseover="PlacementIndicator('7E')" onclick="TableClick('7E')" id="7E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7F')" onmouseover="PlacementIndicator('7F')" onclick="TableClick('7F')" id="7F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7G')" onmouseover="PlacementIndicator('7G')" onclick="TableClick('7G')" id="7G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7H')" onmouseover="PlacementIndicator('7H')" onclick="TableClick('7H')" id="7H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7I')" onmouseover="PlacementIndicator('7I')" onclick="TableClick('7I')" id="7I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7J')" onmouseover="PlacementIndicator('7J')" onclick="TableClick('7J')" id="7J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7K')" onmouseover="PlacementIndicator('7K')" onclick="TableClick('7K')" id="7K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('7L')" onmouseover="PlacementIndicator('7L')" onclick="TableClick('7L')" id="7L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">8</td>
                    <td><button onmouseout="RemovePlacementIndicator('8A')" onmouseover="PlacementIndicator('8A')" onclick="TableClick('8A')" id="8A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8B')" onmouseover="PlacementIndicator('8B')" onclick="TableClick('8B')" id="8B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8C')" onmouseover="PlacementIndicator('8C')" onclick="TableClick('8C')" id="8C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8D')" onmouseover="PlacementIndicator('8D')" onclick="TableClick('8D')" id="8D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8E')" onmouseover="PlacementIndicator('8E')" onclick="TableClick('8E')" id="8E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8F')" onmouseover="PlacementIndicator('8F')" onclick="TableClick('8F')" id="8F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8G')" onmouseover="PlacementIndicator('8G')" onclick="TableClick('8G')" id="8G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8H')" onmouseover="PlacementIndicator('8H')" onclick="TableClick('8H')" id="8H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8I')" onmouseover="PlacementIndicator('8I')" onclick="TableClick('8I')" id="8I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8J')" onmouseover="PlacementIndicator('8J')" onclick="TableClick('8J')" id="8J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8K')" onmouseover="PlacementIndicator('8K')" onclick="TableClick('8K')" id="8K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('8L')" onmouseover="PlacementIndicator('8L')" onclick="TableClick('8L')" id="8L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">9</td>
                    <td><button onmouseout="RemovePlacementIndicator('9A')" onmouseover="PlacementIndicator('9A')" onclick="TableClick('9A')" id="9A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9B')" onmouseover="PlacementIndicator('9B')" onclick="TableClick('9B')" id="9B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9C')" onmouseover="PlacementIndicator('9C')" onclick="TableClick('9C')" id="9C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9D')" onmouseover="PlacementIndicator('9D')" onclick="TableClick('9D')" id="9D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9E')" onmouseover="PlacementIndicator('9E')" onclick="TableClick('9E')" id="9E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9F')" onmouseover="PlacementIndicator('9F')" onclick="TableClick('9F')" id="9F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9G')" onmouseover="PlacementIndicator('9G')" onclick="TableClick('9G')" id="9G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9H')" onmouseover="PlacementIndicator('9H')" onclick="TableClick('9H')" id="9H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9I')" onmouseover="PlacementIndicator('9I')" onclick="TableClick('9I')" id="9I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9J')" onmouseover="PlacementIndicator('9J')" onclick="TableClick('9J')" id="9J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9K')" onmouseover="PlacementIndicator('9K')" onclick="TableClick('9K')" id="9K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('9L')" onmouseover="PlacementIndicator('9L')" onclick="TableClick('9L')" id="9L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">10</td>
                    <td><button onmouseout="RemovePlacementIndicator('10A')" onmouseover="PlacementIndicator('10A')" onclick="TableClickBig('10A')" id="10A"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10B')" onmouseover="PlacementIndicator('10B')" onclick="TableClickBig('10B')" id="10B"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10C')" onmouseover="PlacementIndicator('10C')" onclick="TableClickBig('10C')" id="10C"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10D')" onmouseover="PlacementIndicator('10D')" onclick="TableClickBig('10D')" id="10D"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10E')" onmouseover="PlacementIndicator('10E')" onclick="TableClickBig('10E')" id="10E"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10F')" onmouseover="PlacementIndicator('10F')" onclick="TableClickBig('10F')" id="10F"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10G')" onmouseover="PlacementIndicator('10G')" onclick="TableClickBig('10G')" id="10G"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10H')" onmouseover="PlacementIndicator('10H')" onclick="TableClickBig('10H')" id="10H"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10I')" onmouseover="PlacementIndicator('10I')" onclick="TableClickBig('10I')" id="10I"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10J')" onmouseover="PlacementIndicator('10J')" onclick="TableClickBig('10J')" id="10J"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10K')" onmouseover="PlacementIndicator('10K')" onclick="TableClickBig('10K')" id="10K"class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('10L')" onmouseover="PlacementIndicator('10L')" onclick="TableClickBig('10L')" id="10L"class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">11</td>
                    <td><button onmouseout="RemovePlacementIndicator('11A')" onmouseover="PlacementIndicator('11A')" onclick="TableClickBig('11A')" id="11A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11B')" onmouseover="PlacementIndicator('11B')" onclick="TableClickBig('11B')" id="11B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11C')" onmouseover="PlacementIndicator('11C')" onclick="TableClickBig('11C')" id="11C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11D')" onmouseover="PlacementIndicator('11D')" onclick="TableClickBig('11D')" id="11D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11E')" onmouseover="PlacementIndicator('11E')" onclick="TableClickBig('11E')" id="11E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11F')" onmouseover="PlacementIndicator('11F')" onclick="TableClickBig('11F')" id="11F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11G')" onmouseover="PlacementIndicator('11G')" onclick="TableClickBig('11G')" id="11G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11H')" onmouseover="PlacementIndicator('11H')" onclick="TableClickBig('11H')" id="11H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11I')" onmouseover="PlacementIndicator('11I')" onclick="TableClickBig('11I')" id="11I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11J')" onmouseover="PlacementIndicator('11J')" onclick="TableClickBig('11J')" id="11J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11K')" onmouseover="PlacementIndicator('11K')" onclick="TableClickBig('11K')" id="11K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('11L')" onmouseover="PlacementIndicator('11L')" onclick="TableClickBig('11L')" id="11L" class="shipbutton"></button></td>
                </tr>
                <tr>
                    <td class="NumberInTable">12</td>
                    <td><button onmouseout="RemovePlacementIndicator('12A')" onmouseover="PlacementIndicator('12A')" onclick="TableClickBig('12A')" id="12A" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12B')" onmouseover="PlacementIndicator('12B')" onclick="TableClickBig('12B')" id="12B" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12C')" onmouseover="PlacementIndicator('12C')" onclick="TableClickBig('12C')" id="12C" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12D')" onmouseover="PlacementIndicator('12D')" onclick="TableClickBig('12D')" id="12D" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12E')" onmouseover="PlacementIndicator('12E')" onclick="TableClickBig('12E')" id="12E" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12F')" onmouseover="PlacementIndicator('12F')" onclick="TableClickBig('12F')" id="12F" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12G')" onmouseover="PlacementIndicator('12G')" onclick="TableClickBig('12G')" id="12G" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12H')" onmouseover="PlacementIndicator('12H')" onclick="TableClickBig('12H')" id="12H" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12I')" onmouseover="PlacementIndicator('12I')" onclick="TableClickBig('12I')" id="12I" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12J')" onmouseover="PlacementIndicator('12J')" onclick="TableClickBig('12J')" id="12J" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12K')" onmouseover="PlacementIndicator('12K')" onclick="TableClickBig('12K')" id="12K" class="shipbutton"></button></td>
                    <td><button onmouseout="RemovePlacementIndicator('12L')" onmouseover="PlacementIndicator('12L')" onclick="TableClickBig('12L')" id="12L" class="shipbutton"></button></td>
                </tr>
        
            </table>
            <script src="/js/ships.js"></script>
        </x-app-layout>
           <script>