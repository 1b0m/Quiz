<!DOCTYPE html>
<html>
<head>
<title>The Quiz</title>
<body style="background-color:pink;">
</head>
<body>

<h1>The quiz!</h1>
<svg width="500" height="180">
  <rect x="50" y="20" rx="20" ry="20" width="500" height="550"
  style="fill:aqua;stroke:black;stroke-width:5;opacity:0.5" />
</svg>
<br>
<form>
 <label for="fname">What is my first name?</label>
  <select name="fname" id="fname">
      <option value="gus">Gus</option>
      <option value="rory">Rory</option>
      <option value="cory">Cory</option>
      <option value="tony">Tony</option>
    </optgroup>
  </select>
  <br><br>
  <label for="sname">what is my surname?</label>
  <select name="sname" id="sname">
      <option value="black">Black</option>
      <option value="wear">Wear</option>
      <option value="bear">Bear</option>
      <option value="blair">Blair</option>
     </optgroup>
  </select>
  <br><br>
    <label for="age">How old am I?</label>
  <select name="age" id="age">
      <option value="16">16</option>
      <option value="15">15</option>
      <option value="17">17</option>
      <option value="69">69</option>
     </optgroup>
  </select>
  <br><br>
    <label for="live">Where do I live?</label>
  <select name="live" id="live">
      <option value="bangor">Bangor</option>
      <option value="newtownards">Newtownards</option>
      <option value="millisle">Millisle</option>
      <option value="joke">Your mum's house</option>
     </optgroup>
  </select>
  <br><br>
    <label for="game">What game do I play the most?</label>
  <select name="game" id="game">
      <option value="rocketleague">Rocket League</option>
      <option value="roblox">Roblox</option>
      <option value="r6">R6</option>
      <option value="csgo">Cs:Go</option>
     </optgroup>
  </select>
  <br><br>
    <label for="job">What do I also work as?</label>
  <select name="job" id="job">
      <option value="chief">Chief</option>
      <option value="gamer">Gamer</option>
      <option value="waitor">Waitor</option>
      <option value="waiter">Waiter</option>
     </optgroup>
  </select>
  <br><br>
   <button type="submit" formmethod="post">Submit</button>
</form>
</body>
</html>
