console.log('getting the main-scripts.js files')
$.ajax({
  url: "https://api.instagram.com/oembed?url=http://instagr.am/p/fA9uwTtkSN/",
  context: document.body
}).done(function(data) {
  console.log(data);
});