
<head>

</head>
<body>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- Header Modal  -->
        <div class="modal-header">
            <h5 class="modal-title" aria-labelledby="modal title">
                Commentaires
            </h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>         
        </div>
        <!-- Modal Body  -->
        <div class="modal-body">
        <!-- Fill form to post a comment  -->
       
            <form action=" {{url('comment_post/{post}')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex h-12">
                        <!--<input type="hidden" name="post_id" :value="old('pikujidk')">-->
                        <input class="w-full bg-slate-50 rounded-lg px-5 text-slate-900 focus:outline focus:outline-2 focus:outline-indigo-500" type="text" name="comment" placeholder="Quelque chose à rajouter?" autocomplete="off">
                        <button class="ml-2 w-12 flex justify-center items-center shrink-0 bg-indigo-700 rounded-full text-indigo-50" value="Post" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                        </button>
                </div>
                <div class="space-y-8">
        
                @foreach($comments as $comment)

                    <div class="flex bg-slate-50 p-6 rounded-lg">
                            <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full" src="users/images/user.png" alt="image de profil">

                            <div class="ml-4 flex flex-col">
                                <div class="flex flex-col sm:flex-row sm:items-center">
                                    <h2 class="font-bold text-slate-900 text-2xl">{{$comment->user->name}}</h2>
                                    <time class="mt-2 sm:mt-0 sm:ml-4 text-xs text-slate-400" datetime="{{$comment->created_at}}">{{$comment->created_at}}</time>
                                </div> 
                                <p class="mt-4 text-slate-800 sm:leading-loose">{{$comment->comment}}</p>
                            </div>
                    </div>

                @endforeach
           
                </div>
            </form> 

           
        </div>
    </div>
  </div>
</div>





</body>

