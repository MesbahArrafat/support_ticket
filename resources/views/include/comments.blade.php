@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <small>({{ $comment->user->created_at }})</small>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <a href="{{route('edit.comment',$comment->id)}}" class="btn text-info btn-sm mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control mx-2 my-2" placeholder="Leave a reply"  />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning mt-2 mb-2" value="Reply" />
            </div>
        </form>
        @include('include.comments', ['comments' => $comment->replies])
    </div>
@endforeach