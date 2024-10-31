
jQuery(document).ready(function(e) {
	jQuery(".countdown").jCounter({
		date: "20 march 2013 14:32:56",
		timezone: "Asia/Tehran",
		format: "dd:hh:mm:ss",
		callback: true,
		twoDigits: 'on',
		callback: function() {console.log("Counter 1 finished!") }
	});
});
