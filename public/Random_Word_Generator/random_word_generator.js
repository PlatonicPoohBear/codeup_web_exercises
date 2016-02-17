// $.ajax('/Random_Word_Generator/random_word_array.json').done(function(data) {
// 	console.log(data);
// })


function getRandomWord(callback) {
	$.ajax({
        url: '/Random_Word_Generator/random_word_list.txt',
		dataType: "text"
	}).done(function(data) {
		var word = data.split('\n');
		word = word[Math.floor(Math.random() * word.length)];
		callback(word);
        console.log(word);
	})
}



// Your use of the YouTube API must comply with the Terms of Service:
// https://developers.google.com/youtube/terms

// Helper function to display JavaScript value on HTML page.
function showResponse(response) {
    var responseString = JSON.stringify(response, '', 2);
    document.getElementById('response').innerHTML += responseString;
}

// Called automatically when JavaScript client library is loaded.
function onClientLoad() {
    gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
}

// Called automatically when YouTube API interface is loaded (see line 9).
function onYouTubeApiLoad() {
    // This API key is intended for use only in this lesson.
    // See https://goo.gl/PdPA1 to get a key for your own applications.
    gapi.client.setApiKey('AIzaSyA5wseCsGWqdg1YnYPoXXqCIjh2KW3_MSU');

    getRandomWord(search);
}

function search(searchTerm) {

    // Use the JavaScript client library to create a search.list() API call.
    var request = gapi.client.youtube.search.list({
        part: 'snippet',
        q: searchTerm
        // Try using partial id's.   "id: 'gh93'"

        
        
    });
    request.execute(onSearchResponse);

    // Send the request to the API server,
    // and invoke onSearchRepsonse() with the response.
}

// Called automatically with the response of the YouTube API request.
function onSearchResponse(response) {
    showResponse(response);
}

