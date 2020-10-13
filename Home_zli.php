<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Weather app</title>
      <link rel="stylesheet" href="main.css" />
        <style>
            html, body {
              height: 100%;
              margin: 0;
              padding: 0;

            }

            img.one {
              height: auto;
              width: auto;
            } /*Navigations Balken*/
            img.two {
              height: 50%;
              width: 100%;
            }
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #000;
              position: sticky;
              top: 0;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            
            li a:hover {
              background-color: #ddd;
              background-color: #111;
            }
            footer {
              text-align: center;
              padding: 3px;
              background-color: rgb(0, 0, 0);
              color: white;
            }
            .col-container {
                display: table;
                width: 80%; 
            }

            .col {
                display: table-cell; /* Make elements inside the container behave like table cells */
            }
            </style>
    </head>
    <body>
      <ul>
        <li><a href="Home_zli.php"><img src="NidRqA.jpg" alt="Space man" width="70" height="40"></a></li>
        <li><a href="Projekte_zli.html">Projekte</a></li>
        <li><a href="Contact_zli.html">Contact</a></li>
        <li><a href="AboutMe_zli.html">About</a></li>
        
      </ul>
    <img class="two" src="1170322.jpg" width="300" height="300">
    <div class="app-wrap">
          <header>
            <input type="text" autocomplete="off" class="search-box" placeholder="Search for a city..." />
          </header>
          <main>
            <section class="location">
              <div class="city"></div>
              <div class="date"></div>
            </section>
            <div class="current">
              <div class="temp"><span>°c</span></div>
              <div class="weather"></div>
              <div class="hi-low"></div>
            </div>
          </main> 
        </div>
        <script src="main.js"></script>
    <div class="col-container">
      <div class="col">
        <h2>Column 1</h2>
        <p>Hello World</p>
      </div>
      <?php
      $file = file_get_contents("https://sv443.net/jokeapi/v2/joke/Programming,Pun?blacklistFlags=nsfw,religious,political,racist,sexist&type=single");
      $data = json_decode($file);
      echo $data->joke;
      ?>
      <div id="news"></div>
      <div class="col">
        <h2>Column 2</h2>
        <p>Hello World!</p>
        <p>Hello World!</p>
        <p>Hello World!</p>
        <p>Hello World!</p>
      </div>
    
      <div class="col">
        <h2>Column 3</h2>
        <p>Some other text..</p>
        <p>Some other text..</p>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $.ajax({
          url: "http://newsapi.org/v2/top-headlines",
          data: {
            country: "us",
            apiKey: "1c22439bbd4448c889748fc80d548b8d"
          },
          success: function( result ) {
              $( "#news" ).html( "<strong>" + result.articles[Math.floor(Math.random() * result.articles.length)].title + "</strong> NAICE" );
              console.log(result.articles.length);
          }
        // var data = $.parseJSON(result);
        //     console.log(result);
        //   }
        });
        </script>
    
    <footer>
      <p>Author: Hege Refsnes<br>
      <a href="mailto:hege@example.com">hege@example.com</a></p>
    </footer>
    </body>
</html>