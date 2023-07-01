<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @vite('resources/css/app.css')
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
                      @auth
                  <form action="/posts/{{$post->id}}/comments" method="POST" enctype="multipart/form-data" class="mb-0">
                      @csrf
                      <div class="flex h-12">
                              <input class="w-full bg-slate-50 rounded-lg px-5 text-slate-900 focus:outline focus:outline-2 focus:outline-indigo-500" type="text" name="comment" placeholder="Quelque chose à rajouter?" autocomplete="off">
                               <button class="ml-2 w-12 flex justify-center items-center shrink-0 bg-indigo-700 rounded-full text-indigo-50" value="Post" type="submit">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                  </svg>
                              </button>
                      </div>
                  </form> 
                  @endauth    
              </div>

            <div class="mt-6">

                @foreach($comments as $comment)

                <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md">
                    <div class="flex">
                        <div class="flex flex-col justify-center">
                            <p class="mr-2 font-bold">{{$comment->user->name ?? 'none'}}</p>
                            <p class="text-gray-600">{{$comment -> created_at -> diffForHumans() }}</p>
                        </div> 

                    </div>

                    <div class="mt-3">
                        <p>{{$comment->comment}}</p>
                    </div>

                 

                </div>

            @endforeach
            </div>



        
             
          </div>
        </div>
      </div>

    <div id="">
        <main>
            @yield('content')
        </main>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>