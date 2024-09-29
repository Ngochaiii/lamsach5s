<script>
    document.querySelector("#statistics .tablinks:first-child").click();
    document.querySelector("aside nav ul:first-child").click();

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function openSection(evt, sectionName) {
        var i, sectioncontent, sectionlinks;

        sectioncontent = document.getElementsByClassName("sectioncontent");
        for (i = 0; i < sectioncontent.length; i++) {
            sectioncontent[i].style.display = "none";
        }

        sectionlinks = document.getElementsByClassName("sectionlinks");
        for (i = 0; i < sectionlinks.length; i++) {
            sectionlinks[i].className = sectionlinks[i].className.replace(" active", "");
        }

        document.getElementById(sectionName).style.display = "block";
        evt.currentTarget.className += " active";
    }




    Chart.defaults.font.family = "ubuntu";
    // circle chart of the professions of all job seekers
    let xValues1 = ["drawer", "constructor", "mechanic", "carpenter", "blacksmith"];
    xValues1 = xValues1.map(function(x) {
        return x.charAt(0).toUpperCase() + x.slice(1);
    });
    const yValues1 = [55, 49, 44, 24, 190];
    const barColors1 = [
        "#66ff66",
        "#00ffcc",
        "#b3b3b3",
        "#ffbf80",
        "#6666ff"
    ];

    new Chart("chart1", {
        type: "doughnut",
        data: {
            labels: xValues1,
            datasets: [{
                label: "amount of workers",
                backgroundColor: barColors1,
                data: yValues1
            }]
        },
        options: {
            title: {
                display: true
            }
        }
    });

    // bar chart of the cities of all job seekers
    let xValues2 = ["laayoune", "agadir", "guelmim", "dakhla", "marrakesh", "tangier"];
    xValues2 = xValues2.map(function(x) {
        return x.charAt(0).toUpperCase() + x.slice(1);
    });
    const yValues2 = [55, 49, 44, 24, 15, 60];
    const barColors2 = "#00ccff";

    new Chart("chart2", {
        type: "bar",
        data: {
            labels: xValues2,
            datasets: [{
                label: "city",
                backgroundColor: barColors2,
                data: yValues2
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // inside the tab ofthe JOB
    // circle chart of the professions of all job seekers
    let xValues3 = ["drawer", "constructor", "mechanic", "carpenter", "blacksmith"];
    xValues3 = xValues3.map(function(x) {
        return x.charAt(0).toUpperCase() + x.slice(1);
    });
    const yValues3 = [30, 80, 60, 14, 50];
    const barColors3 = [
        "#66ff66",
        "#00ffcc",
        "#b3b3b3",
        "#ffbf80",
        "#6666ff"
    ];

    new Chart("chart3", {
        type: "doughnut",
        data: {
            labels: xValues3,
            datasets: [{
                label: "amount of jobs",
                backgroundColor: barColors3,
                data: yValues3
            }]
        },
        options: {
            title: {
                display: true
            }
        }
    });

    // bar chart of the cities of all job seekers
    let xValues4 = ["laayoune", "agadir", "guelmim", "dakhla", "marrakesh", "tangier"];
    xValues4 = xValues4.map(function(x) {
        return x.charAt(0).toUpperCase() + x.slice(1);
    });
    const yValues4 = [20, 20, 78, 10, 50, 24];
    const barColors4 = "#00ccff";

    new Chart("chart4", {
        type: "bar",
        data: {
            labels: xValues4,
            datasets: [{
                label: "city",
                backgroundColor: barColors4,
                data: yValues4
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // inside the progress tab
    let xMonths = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october",
        "november", "december"
    ];
    xMonths = xMonths.map(function(x) {
        return x.charAt(0).toUpperCase() + x.slice(1);
    });
    const yValues5 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("chart5", {
        type: "line",
        data: {
            labels: xMonths,
            datasets: [{
                label: "registered clients progress",
                fill: false,
                lineTension: 0,
                backgroundColor: "#0287CD",
                borderColor: "#0099ff",
                data: yValues5
            }]
        },
        options: {
            legend: {
                display: true
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //

    const yValues6 = [1, 20, 2, 15, 12, 19, 2, 3, 6, 8, 10];

    new Chart("chart6", {
        type: "line",
        data: {
            labels: xMonths,
            datasets: [{
                label: "registered seekers progress",
                fill: false,
                lineTension: 0,
                backgroundColor: "#0287CD",
                borderColor: "#0099ff",
                data: yValues6
            }]
        },
        options: {
            legend: {
                display: true
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    //
    const yValues7 = [6, 4, 3, 2, 5, 8, 12, 15, 10, 9, 12];
    new Chart("chart7", {
        type: "line",
        data: {
            labels: xMonths,
            datasets: [{
                label: "Job Advancements",
                fill: false,
                lineTension: 0,
                backgroundColor: "#0287CD",
                borderColor: "#0099ff",
                data: yValues7
            }]
        },
        options: {
            legend: {
                display: true
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    //  حذيفة، المغرب
</script>
