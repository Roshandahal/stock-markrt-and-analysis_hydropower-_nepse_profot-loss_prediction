@extends('usernav.nav')
@section('nav')




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
        max-width: 700px;
    }

    /* body {
        background-color: #D2CCDD;
    } */
</style>




<body>
    <section>
        <div class="container-fluid">
            <!-- for viewing the post of the newsinterface -->
            @foreach($news as $item)
            <div class="newscard">
                <table>
                    <td>
                        <div class="row" style=" color:black; font-weight:bold; font-family:Arial; text-shadow:2px 2px white;">
                            <h3 style="color:red; text-shadow:1px 1px black; font-weight:bold; position:relative;">
                                {{$item->headline}}</h1>
                        </div>
                        <div class="row" style="position:relative; font-weight:bold;">
                            <p style="color: black; text-shadow:2px 2px white;">Post-time:{{$item->created_at}},updated time:{{$item->updated_at}}
                            </p>
                        </div>
                        <div class="row" style="position:relative;">
                            <h6 style="color:black;">
                                {{$item->about}}

                            </h6>
                        </div>
                        <div class="row"><img src="{{asset('uploads/news/' .$item->profile_image)}}" width="80px;" id="image-preview"></div><br>
                        
                    </td>

                </table>
            </div><br>
            @endforeach

        </div><br><br>
        




    </section>

</body>


@endsection