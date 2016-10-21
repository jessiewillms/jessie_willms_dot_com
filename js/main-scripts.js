// var $ig_access_token = "17132104.d90570a.fd44edb49b7f4029be199f4429f27144",
// 	$ig_photo_limit = 5;

// $.ajax({
//   url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' + $ig_access_token + '&count=' + $ig_photo_limit + '&callback=?',
// }).done(function(data) {
//   console.log(data);
// });
// 
// var $ig_access_token = '17132104.d90570a.fd44edb49b7f4029be199f4429f27144',
		$ig_photo_limit = 5,
		$ig_user_id = '17132104';

	// https://api.instagram.com/v1/media/popular?access_token=17132104.d90570a.fd44edb49b7f4029be199f4429f27144
	// 

	// https://api.instagram.com/v1/users/self/media/recent/?access_token=17132104.d90570a.fd44edb49b7f4029be199f4429f27144&count=5&callback=?
	
	 
	// https://api.instagram.com/v1/users/self/media/recent/?access_token=' + '$ig_access_token' + '&count=' + $ig_photo_limit + '&callback=?
	// https://api.instagram.com/v1/users/' + $ig_user_id + '/media/recent

	$.ajax({
	  type: 'GET',
	  data: 'jsonp',
	  url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=17132104.d90570a.fd44edb49b7f4029be199f4429f27144&count=5&callback=?',
	  cache: false
	}).done(function(data) {
	  console.log(data);
	});