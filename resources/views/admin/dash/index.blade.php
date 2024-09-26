<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="login"><i class="fa-solid fa-power-off"></i> &nbsp; <span>logOut</span> </div>
            <div class="title"><img src="https://clipart-library.com/images/zTX5nM7ec.png" alt="">
                <h1>dashboard</h1>
            </div>
        </header>
        <div class="allContent">
            <aside>
                <nav>
                    <ul class="sectionlinks" onclick="openSection(event,'statistics')"><i
                            class="fa-solid fa-chart-simple"></i> &nbsp; <span>Statistics</span> </ul>
                    <ul class="sectionlinks" onclick="openSection(event,'claims')"><i class="fa-solid fa-flag"></i>
                        &nbsp; <span>claims</span> </ul>
                </nav>
            </aside>
            <aside id="statistics" class="sectioncontent">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'users')">users</button>
                    <button class="tablinks" onclick="openCity(event, 'jobs')">jobs</button>
                    <button class="tablinks" onclick="openCity(event, 'progress')">progress</button>
                </div>

                <div id="users" class="tabcontent">
                    <div class="cardContainer">
                        <div class="card"><i class="fa-solid fa-users"></i>
                            <div><span>265</span><br> Job Seeker</div>
                        </div>
                        <div class="card"><i class="fa-solid fa-city"></i>
                            <div><span>20</span><br> city</div>
                        </div>
                        <div class="card"><i class="fa-solid fa-user"></i>
                            <div><span>100</span><br> client</div>
                        </div>
                    </div>
                    <br><br>
                    <div class="chartContainer">
                        <div class="circleChart">
                            <h3>Number of workers by profession :</h3>
                            <canvas id="chart1"></canvas>
                        </div>
                        <div class="barChart">
                            <h3>Number of workers by cities :</h3>
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                </div>

                <div id="jobs" class="tabcontent">
                    <div class="cardContainer">
                        <div class="card"><i class="fa-solid fa-users"></i>
                            <div><span>1265</span><br>total job </div>
                        </div>
                        <div class="card"><i style="color: rgb(13, 241, 146); background-color: black;"
                                class="fa-solid fa-check"></i>
                            <div><span>650</span><br> done</div>
                        </div>
                        <div class="card"><i
                                style="color:white; background-color: black;"class="fa-solid fa-arrow-trend-up"></i>
                            <div><span>450</span><br> in progress</div>
                        </div>
                        <div class="card"><i
                                style="color: rgb(240, 23, 106); background-color: black;"class="fa-solid fa-xmark"></i>
                            <div><span>200</span><br> cancelled</div>
                        </div>
                    </div>
                    <br><br>
                    <div class="chartContainer">
                        <div class="circleChart">
                            <h3>Number of Jobs by profession :</h3>
                            <canvas id="chart3"></canvas>
                        </div>
                        <div class="barChart">
                            <h3>Number of Jobs by cities :</h3>
                            <canvas id="chart4"></canvas>
                        </div>
                    </div>
                </div>

                <div id="progress" class="tabcontent">
                    <div class="chartContainer">
                        <div class="lineChart">
                            <h3>progress of registred clients :</h3>
                            <canvas id="chart5"></canvas>
                        </div>
                        <div class="lineChart">
                            <h3>progress of registred Job Seekers :</h3>
                            <canvas id="chart6"></canvas>
                        </div>
                        <div class="lineChart">
                            <h3>progress of registred Job Seekers :</h3>
                            <canvas id="chart7"></canvas>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="claims" class="sectioncontent">
                <div class="claimsContainer">
                    <div class="claim">
                        <div class="oneLine">
                            <div class="person1"><span>Plaintiff </span>&nbsp; : &nbsp;<span><a>mohammed</a> </span>
                            </div>
                            <div class="person2"><span>Defendant </span>&nbsp; : &nbsp; <span><a>houcine</a> </span>
                            </div>
                        </div>
                        <div class="title">the title of the claim</div>
                        <div class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, incidunt. Modi omnis
                            voluptas, nesciunt mollitia cumque iste officia corporis? Voluptatum ipsa est eveniet
                            temporibus ex officiis
                            <div class="oneLine">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                            </div>
                        </div>

                        <div class="oneLine">
                            <div class="date"><time datetime="2024-10-15">2024-10-15</time></div>
                            <div class="status solved">solved</div>
                        </div>
                    </div>
                    <div class="claim">
                        <div class="oneLine">
                            <div class="person1"><span>Plaintiff </span>&nbsp; : &nbsp;<span><a>mohammed</a> </span>
                            </div>
                            <div class="person2"><span>Defendant </span>&nbsp; : &nbsp; <span><a>houcine</a> </span>
                            </div>
                        </div>
                        <div class="title">the title of the claim</div>
                        <div class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, incidunt. Modi omnis
                            voluptas, nesciunt mollitia cumque iste officia corporis? Voluptatum ipsa est eveniet
                            temporibus ex officiis
                            <div class="oneLine">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                            </div>
                        </div>

                        <div class="oneLine">
                            <div class="date"><time datetime="2024-10-15">2024-10-15</time></div>
                            <div class="status pending">pending</div>
                        </div>
                    </div>
                    <div class="claim">
                        <div class="oneLine">
                            <div class="person1"><span>Plaintiff </span>&nbsp; : &nbsp;<span><a>mohammed</a> </span>
                            </div>
                            <div class="person2"><span>Defendant </span>&nbsp; : &nbsp; <span><a>houcine</a> </span>
                            </div>
                        </div>
                        <div class="title">the title of the claim</div>
                        <div class="description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, incidunt. Modi omnis
                            voluptas, nesciunt mollitia cumque iste officia corporis? Voluptatum ipsa est eveniet
                            temporibus ex officiis
                            <div class="oneLine">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                                <img src="https://images.pexels.com/photos/9551192/pexels-photo-9551192.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="">
                            </div>
                        </div>

                        <div class="oneLine">
                            <div class="date"><time datetime="2024-10-15">2024-10-15</time></div>
                            <div class="status solved">solved</div>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-transform: capitalize;
            font-family: 'ubuntu';
        }

        .tab {
            overflow: hidden;
        }

        .tab button {
            float: left;
            border: none;
            outline: none;
            padding: 14px 16px;
            transition: 0.3s;
            background-color: transparent;
            border-bottom: 3px solid transparent;
            font-weight: 600;
        }

        .tab button.active {
            color: #0287CD;
            border-bottom-color: #0287CD;
        }

        .tabcontent {
            padding: 15px 35px;
        }

        body {
            background-color: #F6F8FA;
            height: 100vh;
        }


        body>.container {
            display: flex;
            height: 100%;
            flex-direction: column;
        }

        body>.container header {
            flex-basis: 1%;
            display: flex;
            background-color: white;
            align-items: center;
            justify-content: center;
        }

        body>.container header img {
            width: 50px;
            height: 50px;
        }

        body>.container header div:nth-child(1) {
            flex-basis: 10%;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        body>.container header div:nth-child(1) span {
            font-weight: 700;
        }

        body>.container header div:nth-child(2) {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-basis: 90%;
        }

        body .container .allContent {
            flex-basis: 99%;
            display: flex;
        }

        body>.container aside:nth-child(1) {
            flex-basis: 15%;
            padding: 8px;
        }

        body>.container aside:nth-child(2) {
            flex-basis: 85%;
        }

        body>.container header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        body>.container aside:nth-child(1) nav ul {
            font-weight: 900;
            padding: 10px 20px;
            text-align: center;
            font-size: larger;
        }

        body>.container aside:nth-child(1) nav ul.active {
            color: #0287CD;
        }


        /* CARDS */
        .cardContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 4%;
        }

        .card {
            padding: 30px;
            border-radius: 15px;
            background-color: white;
            width: 150px;
            min-height: 30px;
            color: grey;
            margin: 15px 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card div {
            float: right;
            width: 60%;
            height: 100%;
        }

        .card i {
            background: #b3f0ff;
            color: #00a3cc;
            border-radius: 50%;
            text-align: center;
            padding: 10px;
            font-size: 25px;
            display: block;
            float: left;
        }

        .card span {
            color: black;
            font-weight: 900;
            font-size: 25px;
        }

        /* CARDS */

        .circleChart {
            flex-basis: 48%;
        }

        .chartContainer>div {
            background-color: white;
            border-radius: 5%;
            padding: 15px 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .barChart {
            flex-basis: 48%;
            display: flex;
            justify-content: center;
        }

        .chartContainer {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            height: 400px;
            width: 100%;
        }

        canvas {
            width: 100%;
            height: 100%;
            margin: 10px 0;
            text-transform: capitalize;
        }

        .tabcontent:last-child {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .tabcontent:last-child .chartContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .tabcontent:last-child .chartContainer .lineChart {
            margin: 15px 0;
            flex-basis: 80%;
            align-self: stretch;
            padding: 15px;
        }

        @media (max-width: 1000px) {
            .chartContainer {
                align-items: stretch;
            }

            .chartContainer>div {
                flex-basis: 100%;
                margin-bottom: 25px;
            }

            body>.container aside:nth-child(1) nav ul span {
                display: none;
            }

            body>.container aside:nth-child(1) {
                flex-basis: 5%;
            }

            .cardContainer {
                justify-content: center;
            }
        }

        /* start claim */

        #claims {
            display: none;
            width: 100%;
            height: 100%;
            flex-basis: 85%;
        }

        #claims .claimsContainer {
            margin-top: 20px;
            padding: 15px;
            width: 90%;
            margin: 0 auto;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            gap: 5%;
        }

        #claims .claimsContainer .claim {
            background-color: white;
            color: rgb(79, 78, 78);
            margin-bottom: 15px;
            min-height: 200px;
            flex-basis: 80%;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #claims .claimsContainer span {
            padding: 5px 0;
        }

        #claims .claimsContainer .oneLine img {
            width: 48%;
            height: 200px;
            object-fit: cover;
        }

        #claims .claimsContainer .claim .oneLine:first-child div span:first-child {
            padding: 5px;
            background-color: black;
            color: white;
        }

        #claims .claimsContainer .claim .oneLine:first-child div:first-child span:last-child {
            background-color: rgb(131, 226, 63);
            padding: 5px;
            color: white;
        }

        #claims .claimsContainer .claim .oneLine:first-child div:last-child span:last-child {
            background-color: rgb(250, 128, 40);
            color: white;
            padding: 5px;
        }

        #claims .claimsContainer .claim div {
            justify-content: space-between;
            display: flex;
        }

        #claims .claimsContainer .claim .description {
            display: flex;
            gap: 8px;
            flex-direction: column;
            padding: 8px;
        }

        #claims .claimsContainer .claim .date {
            padding: 5px;
            background-color: black;
            color: white;
        }

        #claims .claimsContainer .claim .status {
            padding: 5px;
        }

        #claims .claimsContainer .claim .solved {
            background-color: #2dea7c;
            color: white;
        }

        #claims .claimsContainer .claim .pending {
            background-color: #ff0000;
            color: white;
        }

        @media (max-width: 1250px) {
            #claims .claimsContainer {
                justify-content: space-around;
            }

            .claim {
                flex-basis: 40% !important;
            }
        }

        @media (max-width: 800px) {
            .claim {
                flex-basis: 100% !important;
            }
        }

        /*end claim */

        /* حذيفة، المغرب */
    </style>
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
</body>


</html>
