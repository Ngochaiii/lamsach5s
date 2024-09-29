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
