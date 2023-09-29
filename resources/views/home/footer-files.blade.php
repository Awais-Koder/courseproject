<style>
    .full-bot-book {
        background: #f5f5f5 !important;
        box-shadow: 5px 5px 5px 5px rgba(0, 0, 0,.1);
    }
</style>
<section style="margin-top: 50px" class="shadow">
    <div class="full-bot-book bg-white">
        <div class="container">
            <div class="row">
                <div class="bot-book">
                    <div class="col-md-12 bb-text">
                        <h4 class="text-center" style="color: black">here you can download the files</h4>
                        <ul style="display: flex;flex-wrap: wrap;">
                            @forelse(App\services\CourseService::getFiles() as $file)
                            <li style="margin: 10px;">
                                <a href="{{Storage::url($file->file)}}" style="color: dodgerblue;" target="_blank">{{$file->name}}</a>
                            </li>
                            @empty
                                <h6 style="color: dodgerblue;" class="text-center">No files found..</h6>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>