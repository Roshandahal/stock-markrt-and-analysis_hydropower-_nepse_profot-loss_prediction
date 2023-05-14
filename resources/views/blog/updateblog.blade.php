@extends('admin.adminnav')
@section('content')
@endsection

<style>
    .body {
        background-color: #D2CCDD;
    }

    .container {
        height: auto;
        width: 100%;
        position: relative;
        top: 100px;


    }



    /* for making form  */
    .transparent-form {
        background-color: white;
        /* border-radius: 10px; */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin: 20px;
        opacity: 10;
        width: 70%;
        /* background-color: black; */
        /* border: 1px solid black; */
        box-shadow: 2px 2px 5px black;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .heading {
        color: black;
        font-weight: bold;

    }

    label {
        font-weight: bold;
        color: black;
        font-size: 15px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 3px;
        margin-bottom: 1px;
        outline: none;
        height: 30px;
    }


    button[type="submit"] {
        display: block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }

    /* for card css  */
    /* for card tarasparency    */
    .col-sm-6 .card {
        /* border: 2px solid black; */
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin: 20px;
        background-color: black;
        color: aliceblue;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

<body class="body">
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- for making form  -->
                <form class="transparent-form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="heading" style="text-align: center;">Post News From Here</h3>
                    <hr>
                    @if(session('status'))
                    <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                    @endif
                    <label for="name">Heading:</label>
                    <input type="text" id="name" name="headline" placeholder="Enter your name">
                    @if($errors->has('headline'))
                    <div class="error" style="color: red;">{{ $errors->first('headline') }}</div>
                    @endif

                    <label for="message">About/description:</label>
                    <textarea id="message" name="about" placeholder="Enter your message" style="height: 200px; border:1px solid black;"></textarea>
                    @if($errors->has('about'))
                    <div class="error" style="color: red;">{{ $errors->first('about') }}</div>
                    @endif
                    <label for="name">Upload Images:</label><br>
                    <input type="file" id="name" name="profile_image" placeholder="Enter image">
                    @if($errors->has('profile_imag'))
                    <div class="error" style="color: red;">{{ $errors->first('profile_imag') }}</div>
                    @endif
                    <br>
                    <hr>
                    <button type="submit">Post</button>
                </form>
            </div>
            <div class="col-sm-6">
                <!-- for making card  -->
                @if(session('status'))
                <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
                @endif
                <h5 style="color: black; font-weight:bold;">See Edit/Update and Delete images</h5>
                <table class="table table-dark" style="width: auto;">
                    <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach($news as $item)
                        <tr>

                            <td>{{$item->headline}}</td>
                            <td>{{$item->about}}</td>
                            <td><img src="{{asset('uploads/news/' .$item->profile_image)}}" width="40px;"></td>
                            <td><a href="{{url('edit-blog/'.$item->id)}}"><i class="fa fa-edit" style="font-size:20px;"></i></a></td>
                            <td><a href="{{url('delete-blog/'.$item->id)}}"><i class="fa fa-trash" style="font-size:20px; color:red;"></i></a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </section>
    <br><br><br><br><br><br><br>
        <div class="row" style="background-color: black; color:white; text-align:center; height:100px; width:100%; padding:2px;">
            <p> @blog website</p>
        </div>
</body>