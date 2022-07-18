<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="{{ asset('path/css/quizz.css') }}" >
   <style>
      no-btn {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
      }
    </style>
<title>Quiz</title>
</head>
<body style="background-color:pink;">
<body>
<h1 style="text-align: center;">Would you like to try my quiz? ;)</p>

<div class="controls">
	<a href="http://127.0.0.1:8000/quizg">  
      <button id="yes-btn" class="yes-btn btn">Yes!</button>
     </a>
	<br>
	<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">  
      <button id="no-btn" class="no-btn btn">No!</button>
</div>
	<svg width="400" height="180">
  <rect x="50" y="20" rx="20" ry="20" width="300" height="150"
  style="fill:aqua;stroke:black;stroke-width:5;opacity:0.5" />
</svg>
</body>
</html>
