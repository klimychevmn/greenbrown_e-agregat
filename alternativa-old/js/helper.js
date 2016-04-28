function fake_alert(){
    alert("Извините, но я пока не могу дать Вам, то, что Вы просите! Sorry! :(");
    return false;
}

$('.item .price a').click(fake_alert);
