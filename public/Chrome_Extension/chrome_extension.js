
    // Called automatically when Google API JavaScript client library is loaded. (See HTML "src")
    function onClientLoad() {
        gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
    };

    // Called automatically when YouTube API interface is loaded (called in onClientLoad).
    function onYouTubeApiLoad() {
        
        gapi.client.setApiKey('AIzaSyA5wseCsGWqdg1YnYPoXXqCIjh2KW3_MSU');

        getRandomWord(search);
    };

    // Called automatically when API key is set (called in onYouTubeApiLoad). Pulls dictionary from txt file,
    // splits into array, passes random index to callback function.
    function getRandomWord(callback) {
        $.ajax({
            url: '/Chrome_Extension/Search_terms.txt',
            dataType: "text"
        }).done(function(data) {
            var word = data.split('\n');
            word = word[Math.floor(Math.random() * word.length)];
            callback(word);
        });
    };

    
    // Callback function for getRandomWord. Makes ajax request to Youtube API. Passes response to onSearchResponse.
    function search(searchTerm) {

        var request = gapi.client.youtube.search.list({
            part: 'snippet',
            q: searchTerm,
            type: 'video'
        });
        request.execute(onSearchResponse);
    };

    

    // Called automatically with the response of the YouTube API request. Sorts videoId's into array,
    // selects random index. Inserts url in iframe source.
    function onSearchResponse(response) {
        var video;
        response.items.forEach(function (element, index, array) {
            var idArray = [];
            idArray.push(element.id.videoId);
            video = idArray[Math.floor(Math.random() * idArray.length)];
            video = 'https://www.youtube.com/embed/' + video + '?autoplay=1';

        });
        $('#playerWrapper').html("<iframe id ='player' width='640' height='390' src='" + video + "'></iframe>");
    };

   
    // Calls onClientLoad when button is clicked.
    $('#refresh').click(function() {
        onClientLoad();
    })





