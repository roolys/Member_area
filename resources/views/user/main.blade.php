<div class="main-content">
                <div class="write-post-container">

                <div class="user-profile">
                    <img src="users/images/profile-pic.png" alt="" />
                    <div>
                        <p>{{ Auth::user()->name }} </p>
                    </div>
                </div>


                <form action="{{url(user_post)}}" method="POST" enctype="multipart/form-data">
                    @csrf   
                    <div class="post-input-container">
                        <textarea rows="3" placeholder="What's on your mind?" name="description"></textarea>
                        <div class="add-post-links">
                            <a href="#"><img src="users/images/photo.png" alt="" /> Photo/Video</a>
                            <!-- <div class="content">
                                <button class="button">Post</button>
                                
                            </div> -->
                         
                        </div>                
                    </div>
                </form>

            </div>

            <!-- <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                            <p>Shahzaib Khan</p>
                            <span>August 26 2022, 13:58 </span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>

                </div>

                <p class="post-text">
                    Subscribe <span>@CodeWithHarry</span> Youtube Channel to watch more
                    videos on Website development and UI designs.
                    <a href="#">#CodeWithHarry</a>
                    <a href="#">#YouTubeChannel</a>
                </p>
                <img class="post-img" src="users/images/feed-image-1.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like-blue.png" alt="" /> 120</div>
                        <div><img src="users/images/comments.png" alt="" /> 45</div>
                        <div><img src="users/images/share.png" alt="" /> 20</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="users/images/profile-pic.png" alt="" />
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                            <p>Shahzaib Khan</p>
                            <span>August 26 2022, 12:22 </span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>

                </div>

                <p class="post-text">
                    Like and share this video with friends, tag <span>@CodeWithHarry</span> facebook page on your post.
                    Ask your doubts in the comments
                    <a href="#">#CodeWithHarry</a>
                    <a href="#">#YouTubeChannel</a>
                </p>
                <img class="post-img" src="images/feed-image-2.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like.png" alt="" /> 90</div>
                        <div><img src="users/images/comments.png" alt="" /> 20</div>
                        <div><img src="users/images/share.png" alt="" /> 5</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="users/images/profile-pic.png" alt="" />
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                            <p>Shahzaib Khan</p>
                            <span>August 25 2022, 12:22 </span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>

                </div>

                <p class="post-text">
                    Like and share this video with friends, tag <span>@CodeWithHarry</span> facebook page on your post.
                    Ask your doubts in the comments
                    <a href="#">#CodeWithHarry</a>
                    <a href="#">#YouTubeChannel</a>
                </p>
                <img class="post-img" src="users/images/feed-image-3.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like.png" alt="" /> 45</div>
                        <div><img src="users/images/comments.png" alt="" /> 12</div>
                        <div><img src="users/images/share.png" alt="" /> 8</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="users/images/profile-pic.png" alt="" />
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                            <p>Shahzaib Khan</p>
                            <span>August 24 2022, 14:52 </span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>

                </div>

                <p class="post-text">
                    Subscribe <span>@CodeWithHarry</span> Youtube Channel to watch more
                    videos on Website development and UI designs.
                    <a href="#">#CodeWithHarry</a>
                    <a href="#">#YouTubeChannel</a>
                </p>
                <img class="post-img" src="users/images/feed-image-4.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like.png" alt="" /> 45</div>
                        <div><img src="users/images/comments.png" alt="" /> 8</div>
                        <div><img src="users/images/share.png" alt="" /> 10</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="users/images/profile-pic.png" alt="" />
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

            </div>

            <div class="post-container">
                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                            <p>Shahzaib Khan</p>
                            <span>August 21 2022, 19:22 </span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-vertical"></i></a>

                </div>

                <p class="post-text">
                    Like and share this video with friends, tag <span>@CodeWithHarry</span> facebook page on your post.
                    Ask your doubts in the comments
                    <a href="#">#CodeWithHarry</a>
                    <a href="#">#YouTubeChannel</a>
                </p>
                <img class="post-img" src="users/images/feed-image-5.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like.png" alt="" /> 90</div>
                        <div><img src="users/images/comments.png" alt="" /> 20</div>
                        <div><img src="users/images/share.png" alt="" /> 5</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="users/images/profile-pic.png" alt="" />
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div> -->

            <!-- <button type="button" class="load-more-btn">Load More</button> -->
        </div>