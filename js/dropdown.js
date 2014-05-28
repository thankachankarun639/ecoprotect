$('#organizeli').hide();
$('#supportli').hide();


$('#support').mouseenter(function () {
    $('#supportli').slideDown('slow');
});
$('#supportli').mouseleave(function () {
    $('#supportli').slideUp('slow');
});

$('#organize').mouseenter(function () {
    $('#organizeli').slideDown('slow');
});
$('#organizeli').mouseleave(function () {
    $('#organizeli').slideUp('slow');
});