$(document).ready(function(){
  // if (sessionStorage.getItem('splashScreen')!=='true') {

    var quotes = [
      {
      quote: "1",
      author:"ff"
    },
    {
      quote: "2",
      author:"aa"
    },
    {
      quote: "3",
      author:"bb"
    }
  ];
    var randomQuote = quotes[Math.floor(Math.random() * quotes.length
    )];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').prepend('<p id="quote"></p>');
    $('blockquote').append('<footer id="author"></footer>');
    $('#quote').html(randomQuote.quote);
    $('#author').html(randomQuote.author);
    // $("#splashScreen").show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');
  //}
  });
