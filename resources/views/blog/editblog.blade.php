<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    section {

        height: 90vh;
    }

    .container-fluid {
        position: relative;
        top: 50px;
        max-width: 700px;
        margin: auto;
    }

    .comment {
        width: 100%;
    }

    .newscard {
        box-shadow: 3px 3px 10px 2px black;
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

</style>
<body style="background-color: #4CAF50;">
    

<section>
    <div class="container-fluid">
        <!-- for making form  -->
        <form class="transparent-form" action="{{url('update-blog/' .$blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 class="heading" style="text-align: center;">Edit and update news from here</h3>
            <hr>
            @if(session('status'))
            <h6 style="background: black; color:aliceblue;">{{session('status')}}</h6>
            @endif
            <label for="name">Heading:</label>
            <input type="text" id="name" name="headline" value="{{$blog->headline}}" placeholder="Enter your name">

            <label for="message">About/description::</label>
            <textarea id="message" name="about" placeholder="Enter your message" style="height: 200px; border:1px solid black;">{{$blog->about}}</textarea>

            <label for="name">Upload Images:</label><br>
            <input type="file" id="name" name="profile_image" placeholder="Enter image"><br><br>
            <img src="{{asset('uploads/news/' .$blog->profile_image)}}" width="40px;">
            <br>
            <hr>
            <button type="submit">Update</button>
        </form>
    </div>
</section>
</body>