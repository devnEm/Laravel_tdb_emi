$(document).ready(function(){

    

    var avenant=null;
    var dataset_objectif = [];
    var dataset_realise = [];
    var dataset_produit = [];
    var objectif_Total = 0;
    var resultat_Courant = 0;

    for(i=0;i<avenants.length;i++){

        avenant = avenants[i];
        
        dataset_objectif.push(avenant.objectif);
        dataset_realise.push(avenant.realise);
        dataset_produit.push(avenant.produit_id);

        objectif_Total = parseInt(objectif_Total) + parseInt(avenant.objectif) ;
        resultat_Courant = parseInt(resultat_Courant) + parseInt(avenant.realise) ;

    };

    console.log(objectif_Total);
    console.log(resultat_Courant);

    var ctx4 = document.getElementById("total").getContext("2d");
    var data_total = {
        labels: [
            "Objectif",
            "Atteint"
        ],
        datasets: [
            {
                data: [objectif_Total, objectif_Total-resultat_Courant],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
    };

    var myPieChart = new Chart(ctx4,{
        type: 'pie',
        data: data_total
    });

    var ctx3 = document.getElementById("avenant").getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        showXLabels: 10 ,
        data: {
            labels: dataset_produit,
            datasets: [{
                label: '% Objectif',
                backgroundColor: "rgba(0,255,0,0.4)",
                data: dataset_objectif,
            },{
                label: '% Réalisé',
                backgroundColor: "rgba(255,0,0,0.2)",
                data: dataset_realise,
            }
            ]
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

