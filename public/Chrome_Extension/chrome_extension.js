

// merge dictionary and youtube api's



// (function(){
// 	"use strict"


	var array = [];
	var idArray = [];

	function generateString() {
		array = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_+='.split('');
		
		for (var i = 11; i > 0; i--) {
            idArray.push(array[Math.floor(Math.random() * array.length)]);
		}
        var url = idArray.join('');
        idArray = [];
        return url;
	}


    function search() {
        return 'https://www.youtube.com/watch?v=' + generateString();
    }


// 	generateString();
// })();




