<!DOCTYPE html>

<html>
    <head>
        <title>RPS</title>
        <meta charset="UTF-8">
        <script src="dataHandler.js"></script>
    <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
              integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
              crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "RPSstylesheet.css" />
    </head>
    
    <body>
        <header>
            <h1> Let's play...</h1>
        </header>
        <div class='container'>
            <div class='jumbotron'>
                <h2>Rock, Paper, Scissors</h2>
                <h3>Please make your selection:</h3>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <div id="circle">
                    <div class='col-sm' >
                        <a onclick="play('Rock')">
                            <img src="Images\Rock.png" alt="Rock"/>
                        </a>
                    </div>
                </div>
                <div id="circle">
                    <div class='col-sm'>
                        <a onclick="play('Paper')">
                            <img src="Images\Paper.png" alt="Paper"/>
                        </a>
                    </div>
                </div>
                <div id="circle">
                    <div class='col-sm'>
                        <a onclick="play('Scissors')">
                            <img src="Images\Scissors.png" alt="Scissors"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container" id="box">
            <h5>Results</h5> 
            <div class="well"><span id="result"></span></div>
        </div>
        
        <div class="pabutton">
            <button onclick="reset(box)">Play again?</button>
        </div>
        
    </body>
</html>



