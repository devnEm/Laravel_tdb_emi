$(document).ready(function(){
    $(".del").click(function(){
        if (!confirm("Voulez-vous supprimer ?")){
            return false;
        }
    });
    var pGress = setInterval(function() {
        var pVal = $('.progressbar').progressbar('option', 'value');
        var pCnt = !isNaN(pVal) ? (pVal + 1) : 1;
        if (pCnt > 100) {
            clearInterval(pGress);
        } else {
            $('.progressbar').progressbar({value: pCnt});
        }
    },10);
});

