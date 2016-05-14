$(document).ready(function(){
    $(".del").click(function(){
        if (!confirm("Voulez vous supprimer ?")){
            return false;
        }
    });
});

