<div>
    <section class="lightnmedia-section lightnmedia-intro intro--black">
        <div class="container">
            <h1 class="lightnmedia-title-1  lightnmedia-text-white">
                <span> {{$project->title}} </span>
                <span class="lightnmedia-sep word">
                    <i class="sep-img" style="background-image: url(assets/images/title_icon.svg);"></i>
                </span>
            </h1>
            <p class="lightnmedia-text-white">{{$project->location}}</p>
            <div class="lightnmedia-breadcrums">
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li>
                        <a href="blog.html">Portfolio </a>
                    </li>
                    <li class="current">
                        <span>{{$project->title}} </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="lightnmedia-section lightnmedia-post gap-top-140">
        <div class="container">

            <!-- Image -->
            <div class="lightnmedia-post-pic" data-lightnmedia-overlay data-lightnmedia-scroll>
                <img src="{{asset('storage/'.$project->image)}}" alt="Usability Secrets to Create Interfaces" />
            </div>

            <!-- Post-->
            <div class="lightnmedia-post-wrapper">
                <div class="lightnmedia-post-content">

                    <!-- Date -->
                    <div class="lightnmedia-post-date">
                        <span class="date">{{$project->year}}</span>
                    </div>

                    <!-- Content -->
                    <div class="lightnmedia-post-text">
                        <div class="post-content">
                            <h2>{{$project->title}}</h2>
                            <p>{{$project->description}}</p>



                        </div>
                    </div>


                </div>
            </div>


        </div>
    </section>
</div>
