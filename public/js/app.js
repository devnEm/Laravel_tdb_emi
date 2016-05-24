$(document).ready(function() {

    // $('#myTable').DataTable();

    
    var bonus1 = 0
    var bonus2 = 0
    var bonus3 = 0

    console.log("trim1_real "+trim1_real);
    console.log("trim2_obj "+trim2_obj);

    if(trim1_real >= trim1_obj){
        bonus1 = Math.round((trim1_real - trim1_obj));
        trim1= 100;         
    }else{
        trim1 = Math.round(trim1_real/trim1_obj*100);
    };
    console.log("trim2_real "+trim2_real);
    console.log("bonus1"+bonus1);
    console.log(trim2_real+bonus1);
    console.log(trim2_obj);

    if((trim2_real+bonus1) >= trim2_obj){
        bonus2= Math.round((trim2_real + bonus1 - trim2_obj));
        bonus1=0;
        trim2 = 100;
    }else{
        trim2 = Math.round(trim2_real/trim2_obj*100);
    };

    if((trim3_real+bonus2) >= trim3_obj){
        bonus3= Math.round((trim3_real + bonus2 - trim3_obj));
        bonus2=0;
        trim3 = 100;
    }else{
        trim3 = Math.round(trim3_real/trim3_obj*100);
    };

    if((trim4_real+bonus3) >= trim4_obj){
        bonus3=0;
        trim4 = 100;
    }else{
        trim4 = Math.round(trim4_real/trim4_obj*100);
    };

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
                data:[0,bonus1/trim1_obj*100,bonus2/trim2_obj*100,bonus3/trim3_obj*100]
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
                label: " ",
                backgroundColor: ["#5CB85C","#5CB85C","#5CB85C","#FF0000"],
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