<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Muli', sans-serif;
    }

    html{
        scroll-behavior: smooth;
    }

    .nav_style {
        background: #38C9FB !important;
    }

    .nav_style a {
        color: white;
    }

    /* --------- main_header --------- */

    .main_header {
        height: 450px;
        width: 100%;
    }

    .right_side h1 {
        font-size: 2.5rem;
    }

    .corona_ani img {
        animation: coronarotat 3s linear infinite;
    }

    @keyframes coronarotat {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    left_side img{
        animation: heartbeat 5s linear infinite;
    }

    @keyframes heartbeat {
        0% {
            transform: scale(0.75);
        }

        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(0.75);
        }

        60% {
            transform: scale(1);
        }

        80% {
            transform: scale(0.75);
        }

        100% {
            transform: scale(1);
        }
    }

    /* ---------- corona_update ----------- */
    .corona_update{
        margin: 0 0 30px 0;
    }
    .corona_update h3{
        color: #9C1010;
    }
    .corona_update h1{
        font-size: 2rem;
        text-align: center;
    }
    .sub_section{
        background: rgb(238, 238, 238);
        padding-bottom: 100px;
    
    }
    .footer_style {
        background: #38C9FB;
    }
    .footer_style p{
        margin-bottom: 0;
    }
    .btn{
        background-color: #38C9FB;
    }
    #myBtn{
        display: none;
        position: fixed;
        bottom: 50px;
        right: 40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: rgb(163, 221, 240);
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
    }
    #myBtn:hover{
        background-color: #38C9FB;
    }
</style>