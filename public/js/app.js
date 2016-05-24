$(document).ready(function() {

    // $('#myTable').DataTable();

    console.log(trim1);
    console.log(trim2);
    var bonus1 = 0
    var bonus2 = 0
    var bonus3 = 0

    if(trim1 > 100){
        bonus1 =trim1-100;
        trim1= 100;         
    }
    if(trim2+bonus1 >100){
        bonus2= trim2+bonus1-100;
        bonus1=0;
        trim2 = 100;
    }
    if(trim3+bonus2 >100){
        bonus3= trim3+bonus2-100;
        bonus2=0;
        trim3 = 100;
    }

    var ctx1 = document.getElementById("trimestre");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["T1", "T2", "T3", "T4"],
            datasets: [{
                label: '% Atteints',
                backgroundColor: "#5CB85C",
                data: [trim1, trim2, trim3, trim4],

            },{
                label:'% bonus',
                backgroundColor: '#F2FF29',
                data:[0,bonus1,bonus2,bonus3]
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    stacked:true,
                }],
                yAxes: [{
                    stacked:true,
                    ticks: {
                        beginAtZero: true,
                        max: 100
                    }
                }]
            }
        }
    });

    var ctx2 = document.getElementById("support");
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Gazette", "Verticaux", "Evenement", "TOTAL"],
            datasets: [{
                label: '% Atteints',
                backgroundColor: "#5CB85C",
                data: [gazette, verticaux, evenement, total]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100
                    }
                }]
            }
        }
    });
});