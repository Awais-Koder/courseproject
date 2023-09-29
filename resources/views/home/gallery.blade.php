<section class="pop-cour white">
    <div class="container">
        <div class="row">
            <div class="con-title " style="padding: 40px 40px">
                <h2>Our <span>Gallery</span></h2>
                <p>Welcome to our institute's gallery. Explore a collection of captivating images that offer a glimpse
                    into the vibrant life and experiences at Adepts Institute. From campus events and classroom moments
                    to student achievements and community gatherings, our gallery captures the essence of our
                    institute's journey. Join us in celebrating the vibrant tapestry of our institute's life through
                    these visual stories.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div style="display: flex;flex-wrap: wrap;justify-content: center;align-items: center">
                    @forelse ($images as $image)
                        <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ Storage::url($image->image) }}" class="materialboxed">
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3 class="text-center">No images Found..</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
