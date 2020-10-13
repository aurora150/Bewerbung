<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <ul>
        <li><a href="Home_zli.php"><img class="two" src="NidRqA.jpg" alt="Space man"></a></li>
        <li><a href="Projekte_zli.html">Projekte</a></li>
        <li><a href="AboutMe_zli.html">About Me</a></li>
    </ul>
    <img class="one" src="1170322.jpg">
    <div id="news"></div>
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
                .title + "</strong>");
            console.log(result.articles.length);
        }
        // var data = $.parseJSON(result);
        //     console.log(result);
        //   }
    });
    </script>
    <footer>
        <p>Author: Aurora Angrisano<br>
            <a href="mailto:auroraangrisano@gmail.com">auroraangrisano@gmail.com</a></p>
    </footer>
</body>

</html>