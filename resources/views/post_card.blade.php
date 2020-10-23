    <div class="card mb-4">
      <img class="card-img-top" src="{{Storage::url($post->image)}}" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text"><span class="badge badge-primary">{{$post->desc}}</span></p>
        <a href="{{route('blogPost', $post->id)}}" type="submit" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on {{$post->created_at}}
      </div>
    </div>