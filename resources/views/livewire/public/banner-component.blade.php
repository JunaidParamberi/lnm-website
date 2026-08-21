<div>

    @foreach ($bannerList as $banner)


<div class="lightnmedia-hero-parallax-section">

    @if($banner->type == 'video')
      <div class="image">
    <video autoplay muted loop id="myVideo" style="width: 100%; height: 100%; object-fit: cover;">
        <source src="{{ asset('storage/'.$banner->image) }}" type="video/mp4">
    </video>
      </div>
    @else
    <div class="image" style="{{ asset('storage/'.$banner->image) }}" data-dimg="{{ asset('storage/'.$banner->image) }}" data-mimg="{{ asset('storage/'.$banner->image) }}"></div>
    @endif

    <div class="container">
        <div class="lightnmedia-subtitle-1 lightnmedia-text-white">
            <span data-splitting> {{$banner->title}} </span>
        </div>
        <div class="title lightnmedia-text-white" style="width:50%">
            <span > {{$banner->content}} </span>
            <span class="sep" style="background-image: url(assets/images/title_after.svg);"></span>
        </div>

    </div>
</div>
@endforeach
</div>
