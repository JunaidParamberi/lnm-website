<div>
    @foreach ($projectList as $project)


    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 lightnmedia-portfolio-col branding ">
        <div class="lightnmedia-portfolio-item">
            <div class="image" data-lightnmedia-overlay data-lightnmedia-scroll wire:click='projectDetails({{$project->id}})'>
                <a  class="lightnmedia-hover-3">
                    <img src="{{ asset('storage/'.$project->image) }}" alt="Museums Art Concept" />
                </a>
            </div>
            <div class="desc">
                <h5 class="title">
                    <a class="lightnmedia-lnk" href="project-detail.html">
                        <span data-splitting data-lightnmedia-scroll>{{$project->title}}</span>
                    </a>
                </h5>
                <div class="text">
                    <div data-splitting data-lightnmedia-scroll>
                        <span class="text-xs">{{$project->location}} <em>,</em>
                        </span>

                        <p>{{$project->short_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
