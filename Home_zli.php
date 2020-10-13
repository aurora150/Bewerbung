<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <ul>
        <li><a href="Home_zli.php"><img class="two" src="NidRqA.jpg" alt="Space man"></a></li>
        <li><a href="Projekte_zli.html">Projekte</a></li>
        <li><a href="Contact_zli.html">Contact</a></li>
        <li><a href="AboutMe_zli.html">About</a></li>
    </ul>
    <img class="one" src="1170322.jpg">
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
        </div> <?php
      $file = file_get_contents("https://sv443.net/jokeapi/v2/joke/Programming,Pun?blacklistFlags=nsfw,religious,political,racist,sexist&type=single");
      $data = json_decode($file);
      echo $data->joke;
      ?> <div id="news"></div>
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
        success: function(result) {
            $("#news").html("<strong>" + result.articles[Math.floor(Math.random() * result.articles.length)]
                .title + "</strong> NAICE");
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