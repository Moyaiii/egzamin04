<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWÓJ WSKAZNIK BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="banner">
    <h2>OBLICZ WSKAZNIK BMI</h2>
    </div>

    <div id="logo">
    <img src="wzor.png" alt="liczymy BMI">
    </div>

    <div id="lewy">
    <img src="rys1.png" alt="ZRZUC KALORIE">
    </div>

    <div id="prawy">
    <h1>Podaj dane</h1>
    <form action="waga.php" method="POST">
      waga: <input type="number" name="waga"><br>
      wzrost w cm: <input type="number" name="wzrost"><br>
      <input type="submit" value="licz bmi i zapisz wynik">
      </form>
      <?php
        if(isset($_POST['waga']) && isset($_POST['wzrost']))
        {
            $connect = mysqli_connect("localhost","root","","egzamin4");
            $waga = $_POST['waga'];
            $wzrost = $_POST['wzrost'];
            $obliczanie = ($waga/($wzrost*$wzrost));
            $result = ($obliczanie*10000);

            echo "twoja waga: ".$waga."; Twój wzrost: " .$wzrost."</br>."."BMI wynosi: ".$result;
        }
      ?>

    </div>

    <div id="glowny">
    <table>
      <tr>
        <th>Lp</th>
        <th>Interpretacja</th>
        <th>Zaczyna się od...</th>
      </tr>
      <tr>
        <th>1</th>
        <td>niedowaga</td>
        <td>0</td>
      </tr>
      <tr>
        <th>2</th>
        <td>waga prawidłowa</td>
        <td>19</td>
      </tr>
      <tr>
        <th>3</th>
        <td>nadwaga</td>
        <td>26</td>
      </tr>
      <tr>
        <th>4</th>
        <td>otyłość</td>
        <td>31</td>
      </tr>
    </table>
    </div>

    <div id="stopka">
      <H6>Autor: 02311410271</H6>
    </div>
</body>
</html>