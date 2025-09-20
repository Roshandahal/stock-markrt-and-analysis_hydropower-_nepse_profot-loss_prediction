@extends('usernav.nav')
@section('nav')




<style>
    .news-card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 40px auto;
    max-width: 700px;
    font-family: 'Segoe UI', sans-serif;
    position: relative;
}

.news-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.news-image {
    width: 70px;
    height: 70px;
    border-radius: 8px;
    object-fit: cover;
}

.news-title {
    font-size: 20px;
    font-weight: 700;
    color: #333333;
    margin: 0;
}

.news-content {
    font-size: 16px;
    color: #555555;
    line-height: 1.5;
    margin-bottom: 20px;
}

.news-actions {
    display: flex;
    justify-content: flex-start;
    gap: 15px;
}

.love-btn,
.comment-btn {
    background-color: #f5f5f5;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.love-btn:hover {
    background-color: #ffe4e4;
    color: #e60000;
}

.comment-btn:hover {
    background-color: #e6f0ff;
    color: #0055cc;
}

</style>




<body>
    <section>
        <div class="container-fluid">
            <!-- for viewing the post of the newsinterface -->
            @foreach($news as $item)
            <div class="news-card">
                <div class="news-header">
                    <img src="{{asset('uploads/news/' .$item->profile_image)}}" alt="News Image" class="news-image">
                    <h2 class="news-title">{{$item->headline}}</h2>
                </div>
                <p class="news-content">
                    {{$item->about}}
                </p>
                <div class="news-actions">
                    <button class="love-btn">❤️ Love</button>
                    <button class="comment-btn">💬 Comment</button>
                </div>
            </div>

            @endforeach

        </div><br><br>





    </section>

</body>


@endsection