 @extends('layouts.app')
 @section('title', "$post->meta_title")
 @section('meta_decription', "$post->meta_description")
 @section('meta_keyword', "$post->meta_keyword")

 @section('content')
     <div class="py-4">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class=" bg-green p-3 text-white">
                         <h4 class="mb-0">
                             {!! $post->name !!}
                         </h4>
                     </div>
                     <div class="mt-3">
                         <h6>
                             Blog Post Author:
                             <a class="ml-2" href="{{ url('posts/' . $post->user->id) }}">{{ $post->user->name }}</a>
                         </h6>
                     </div>
                     <div class=" mt-4">
                         <div class="card-body post-description">
                             {!! $post->description !!}
                         </div>
                     </div>
                     <div class="comment-area mt-4">
                         @if (session('message'))
                             <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                         @else
                         @endif
                         <div class=" card-body">
                             <h6 class="card-title mb-3">Add a comment</h6>
                             <form action="{{ url('comments') }}" method="POST">
                                 @csrf
                                 <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                                 <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                                 <button type="submit"
                                     class="btn bg-white border rounded-sm bg-green text-white mt-3 mb-3">
                                     Add Comment
                                 </button>
                             </form>
                         </div>
                         @forelse ($post->comments as $comment)
                             <div class="card card-body mt-3">
                                 <div class="detail-area">
                                     <h6 class="user-name mb-1">
                                         @if ($comment->user)
                                             {{ $comment->user->name }} : {{ $comment->created_at->format('Y-m-d') }}
                                         @endif

                                     </h6>
                                     <p class="user-comment mb-1">
                                         {!! $comment->comment_body !!}
                                     </p>
                                 </div>
                             </div>
                         @empty
                         @endforelse
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
