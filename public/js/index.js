$(document).ready(function(){

 
    var ctx1 = document.getElementById("trimestre");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["T1", "T2", "T3", "T4"],
            datasets: [{
                label: '% Atteints',
                backgroundColor: "rgba(255,159,150,0.4)",
                data: [trim1, trim2, trim3, trim4]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    var ctx2 = document.getElementById("support");
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Gazette", "Verticaux", "Evenement"],
            datasets: [{
                label: '% Atteints',
                backgroundColor: "rgba(255,159,150,0.4)",
                data: [gazette, verticaux, evenement]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    $(".del").click(function(){
        if (!confirm("Voulez-vous supprimer ?")){
            return false;
        }
    });



});

