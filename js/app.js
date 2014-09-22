$(document).ready(function(){  

    //Get share counts for Facebook/Twitter/G+
    var URL = $(location).attr('href');

    $.getJSON('http://api.sharedcount.com/?url=' + URL, function(counts) {
        $('#fb-count').text(counts.Facebook.total_count);
        $('#tw-count').text(counts.Twitter);
        $('#gp-count').text(counts.GooglePlusOne);
    });

});