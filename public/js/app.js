$(document).ready(function() {

    // $('#myTable').DataTable();

    var ctx1 = document.getElementById("trimestre");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["T1", "T2", "T3", "T4"],
            datasets: [{
                label: '% Atteints',
                backgroundColor: "#5CB85C",
                data: [trim1, trim2, trim3, trim4]
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