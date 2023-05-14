@extends('admin.adminnav')
@section('content')
@endsection
<style>
    .container {
        position: relative;
        top: 100px;

    }

    .navication {
        background-color: black;
        color: aliceblue;
        font-weight: bold;
        font-style: italic;
    }

    .nav-link {
        color: aliceblue;
    }

    .navbar-brand {
        color: yellow;
    }

    .formbody input {
        width: 95%;
        outline: none;
        border: 2px solid black;
        margin: 5px;
    }

    .buttondiv {
        text-align: center;
    }

    .allform {
        border: 2px solid black;
    }

    .formheading {

        height: 30px;
        font-weight: bold;

    }

    .formheading h6 {
        margin: 5px;
        height: 30px;
        font-weight: bold;

    }
</style>


<!-- for making container  -->
<div class="container">
    <div class="row fristrow">
        <div class="col-sm-6">
            <h5>Update home from here</h5>
            <p>Update/change anything related to homepage from here.</p>
            <h1>table</h1>
        </div>
        <div class="col-sm-6">
            <!-- for making update home form  -->
            <div class="allform">
                <div class="formheading">
                    <h6>Fill up the form for updating home</h6>
                </div>
                <div class="formbody">
                    @if(session('status'))
                    <h6 style="color:red; font-weight:bold; font-style:italic; text-shadow:2px 2px black; text-align:center;">{{session('status')}}</h6>
                    @endif
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="description" placeholder="Write about yourself">
                        <input type="text" name="position" placeholder="Post/position">
                        <input type="file" name="profile_image" placeholder="Profile image">
                        <input type="file" name="cover_photo" placeholder="cover photos">
                        <input type="text" name="name" placeholder="Your name">
                        <input type="text" name="address" placeholder="Your address">
                        <input type="text" name="contact" placeholder="Your contact number">
                        <input type="text" name="fblink" placeholder="facebook link">
                        <input type="text" name="instagramlink" placeholder="your instagram link">
                        <div class="buttondiv">
                            <button type="submit">Post home</button>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>