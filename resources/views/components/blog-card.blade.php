

@props(['blog'])
<div class="blog-card" onclick="location.href='/blog/{{$blog->id}}'">
    <img class="blog-image" src={{ $blog->preview_image }}>
    <div class="blog-title"><h2>{{ $blog->title }}<h2></div>
    <div class="blog-desc">{{ $blog->content }}</div>
    <div class="blog-date">{{ $blog->published_at }}</div>
</div>