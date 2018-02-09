$(document).ready(function() {
  if (sessionStorage.getItem('splashScreen')!=='true') {
    var quotes = [
      {
        quote: "Don't cry because it's over, smile because it happened.",
        author:"Dr. Seuss"
      },
      {
        quote: "Be yourself everyone else is already taken.",
        author:"Oscar Wilde"
      },
      {
        quote: "A room without books is like a body without a soul.",
        author:"Marcus Tullius Cicero"
      }
    ];

    var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').prepend('<p id="quote"></p>');
    $('blockquote').append('<footer id="author"></footer>');
    $('#quote').html(randomQuote.quote);
    $('#author').html(randomQuote.author);
    $('#splashScreen').show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');
    }
  });
