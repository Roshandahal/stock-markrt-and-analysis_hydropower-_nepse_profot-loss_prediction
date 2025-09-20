@extends('usernav.nav')
@section('nav')
<style>
    section {

        height: 90vh;
    }

    .container-fluid {
        position: relative;
        top: 300px;
        max-width: 900px;
        margin: auto;
        text-align: center;
    }

    .row {
        max-width: 1407px;
    }

    body {
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        margin: 0;
        padding: 0;
        font-family: sans-serif;


        .page-heading {
            position: relative;
            text-align: center;
            padding-top: 300px;
            z-index: 3;
        }

        .page-heading h1 {
            font-size: 40px;
            font-weight: 800;
            color: #d4d1ddff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            letter-spacing: 2px;
            margin: 0;
        }


    }
</style>

<body style="background-color:#618145;">

    <section>
        <div class="container-fluid" style="background-image: url('img.jpg'); filter: blur(5px);">


        </div>

        <div class="page-heading">
            <h1>SHARE MARKET PREDICTION AND ANALYSIS</h1>
        </div>

    </section>


</body>
@endsection