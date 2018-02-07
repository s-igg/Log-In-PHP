var quotes = [
  'Be yourself; everyone else is already taken.',
  'Be who you are and say what you feel, because those who mind don\'t matter, and those who matter don\'t mind.',
  'You only live once, but if you do it right, once is enough.',
  'A friend is someone who knows all about you and still loves you.',
  'Without music, life would be a mistake.'
]
function newQuote() {
  var randomNumber = Math.floor(Math.random()*(quotes.lenght));
  document.getElementById('splashScreen').innerHTML = quotes[randomNumber];
}
