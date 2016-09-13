var latest = 0;

var creatPost = function (response) {
    //{"id":"5","username":"asfd","message":"Hello World","date":"2016-08-26 19:37:32"}
    return '<tr><th class="tableDate">[' + response['date'] + ']</th><th class="tableUser">&lt;' + response['user'] + '&gt;</th><th class="tableMessage">' + response['message'] + "</th></tr>"
}

var getLatest = function () {
    $.post("latestMessage.php?latest=" + latest + "&chatRoom=test",
        function (data, status) {
            var x = JSON.parse(data);
            for (var i = 0; i < x.length; i++) {
                if(x[i]['id'] > latest){
                    latest = x[i]['id'];
                };
                $('#chatTable').prepend(creatPost(x[i]));
            }
        });

}

$(document).ready(function () {
    setInterval(getLatest, 1000);
    //getLatest();
});