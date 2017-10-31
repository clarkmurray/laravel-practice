<!DOCTYPE html>
<html>
<head>
	<title>Hangman</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/js-hangman/style.css">
</head>

<body class="container">


	<!--Heading-->

	<div class="row">
		<div class="col-xs-2"></div>
		<div class="col-xs-8 hangmanName">
			<h1>Hangman</h1>
		</div>
		<div class="col-xs-2"></div>
	</div>



	<!--Start Menu-->

	<div class="row text-center" id="startScreen">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
			<button type="button" id="singleplayer" onclick="randomWord()">Play Alone</button>
			<p>--or--</p>
			<button type="button" id="multiplayer" onclick="multiplayerStart()">Play With a Friend</button>
		</div>
		<div class="col-xs-2"></div>
	</div>


	<!--Win notification panel. Appears when you correctly guess all of the letters or the phrase.-->

	<div class="row text-center">
		<div class="col-xs-3"></div>
		<div class="col-xs-6">
	  		<div class="panel panel-success" id="win">
	  			<div class="panel-heading">Victory!</div>
	    		<div class="panel-body" id="winMessage">Congratulations! You managed to avoid certain death! You
	    		live to play another game.
	    		<br>
	    		<br>
	    		<button type="button" onclick="restartGame()" id="winAgain">Play Again</button>
	    		</div>
	  		</div>
	  	</div>
	  	<div class="col-xs-3"></div>
  	</div>


  	<!--Loss notification panel. Appears when you are out of guesses or incorrectly guess the phrase.-->

	<div class="row text-center">
		<div class="col-xs-3"></div>
		<div class="col-xs-6">
	  		<div class="panel panel-danger" id="loss">
	  			<div class="panel-heading">You Lost!</div>
	    		<div class="panel-body">
	    			<div id="lossMessage"></div>
	    			<br>
	    			<br>
	    			<button type="button" onclick="restartGame()" id="loseAgain">Play Again</button>
	    		</div>
	  		</div>
	  	</div>
	  	<div class="col-xs-3"></div>
  	</div>



  	<!--Guess the letter div. Used to guess a single letter instead of the entire phrase. Can be toggled back and 
  		forth with the guessPhraseDiv-->
  	
  	<div class="row text-center" id="guessDiv">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
		<input type="text" id="userGuess" maxlength="1" onkeypress="return isLetter(event)" placeholder="Guess a letter">
		<button type="button" onclick="userGuess()" id="createGuess">Submit</button>
		<button onclick="restartGame()" id="restartInGuess">Restart</button>
		</div>
		<div class="col-xs-2"></div>
	</div>



	<!--The Gallows. Made with HTML Canvas.-->

	<div class="row text-center is-flex" id="gameBoard">
		<div class="col-xs-2"></div>
		<div class="col-xs-4">
			<div class="text-center" id="phrase"></div>
		</div>
		<div class="col-xs-4">
			<canvas id="gallows" height="250px" width="250px">
			</canvas>
		</div>
		<div class="col-xs-2"></div>
	</div>
	
	<div class="row is-flex text-center" id="letterIncorrectLetters">
			<div class="col-xs-2"></div>
			<div class="col-xs-4">
			</div>
			<div class="col-xs-4">
				<span id="incorrect"></span>
			</div>
			<div class="col-xs-2"></div>
	</div>


	<div id="phraseDiv">
	<div class="row text-center">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
			<input type="password" id="userPhrase" onkeypress="return letterOrSpace(event)" placeholder="Insert a Phrase">
			<span id="showPhrase"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></span>
			<button type="button" onclick="generatePhrase()" id="createPhrase">Submit</button>
		</div>
		<div class="col-xs-2"></div>
	</div>


	
	<script src="/js-hangman/main.js"></script>
</body>
</html>