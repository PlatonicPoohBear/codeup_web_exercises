


(function(){
	"use strict"


	var array = [];
	var idArray = [];

	function generateString() {
		array = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_+'.split('');
		console.log(array);
		
		for (var i = 4; i > 0; i--) {
			idArray.push(array[Math.floor(Math.random() * array.length)]);
			console.log(idArray);
		}
	}


	generateString();

})();