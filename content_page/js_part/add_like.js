function add_like($type, $title, $nowgood, $time) {
    $.get("./like.php", { type: $type, title: $title, now: $nowgood }, function(data) {
        $("#like-btn" + $time).html(data)
    })
}