<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.homecss')

    <style>
       :root {
    --body-color:#efefef;
    --nav-color: #1876f2;
    --bg-color: #fff;
}
.post-contain {    
    background: var(--bg-color);
    border-radius: 6px;
    padding: 20px;
    color: #626262;
    /* margin: 20px 0; */
}


    </style>
</head>

<body>
    @include('user.header')


    <div class="container">

        <!-- ---------Left Sidebar ------------ -->
        @include('user.left_sidebar')



        <!-- ---------Main Content ------------ -->


        <!--Main start-->


        <div class="main-content">


            <div class="write-post-container">
                <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="user-profile">
                        <img src="users/images/user.png" alt="" />
                        <div>
                            <p>{{ Auth::user()->name }} </p>
                        </div>
                        <div class="content">
                            <input type="submit" value="Post" style="position: relative; right:-170px;">
                        </div>

                    </div>

                    <div class="post-input-container">
                        <textarea rows="3" placeholder="What's on your mind?" name="description">

                    </textarea>
                        <div class="add-post-links">
                            <input type="file" name="" id="" accept="image/png,image/jpg,image/jpeg">
                            <a href="#" onclick="open_file()"><img src="users/images/photo.png" alt="" /> Photo/Video</a>
                        </div>
                    </div>

                </form>
            </div>

            <!--Post-Container-->
            <div class="" style="margin-top: 5%;">
                @foreach($posts as $post)
             <div class="post-contain" style="margin-top: 5%;">
                <div class="post-row mt-5">

                    <div class="user-profile">
                        <img src="users/images/user.png" alt="" />
                        <div>
                            <p>{{ $post->user->name }} </p>
                            <p></p>
                            <span>{{$post->created_at}}</span>
                        </div>
                    </div>
                </div>

                <p class="post-text">
                    {{$post->description}}

                </p>
                <img class="post-img" src="users/images/feed-image-1.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like-blue.png" alt="" /> 120</div>
                        <div><img src="users/images/comments.png" alt="" /> 45</div>
                    </div>
                </div>
             </div>  
             @endforeach 
            </div>
            <!--end post-Container-->

        </div>
        <!--Main end-->

        <!-- ---------Right Sidebar ------------ -->
        @include('user.right_sidebar')

        <!-- ---------Footer -------------->
        <!-- @include('user.footer') -->

    </div>

</body>

</html>