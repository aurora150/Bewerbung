var url = 'http://newsapi.org/v2/top-headlines?' +
          'country=us&' +
          'apiKey=1c22439bbd4448c889748fc80d548b8d';
var req = new Request(url);
fetch(req)
    .then(function(response) {
        console.log(response.json());
    })