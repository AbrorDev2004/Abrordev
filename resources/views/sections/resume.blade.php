<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">
            <div class="col-lg-8">
                @php
                    $groupedResumes = collect($resumes)->groupBy('section');
                @endphp
                @foreach ($groupedResumes as $section => $resumes)
                    <h3 class="resume-title">{{ $section }}</h3>
                    @foreach ($resumes as $resume)
                        <div class="resume-item">
                            <h4>{{ $resume->title }}</h4>
                            <h5>{{ $resume->start_date }} - @if ($resume->end_date) {{ $resume->end_date }} @else present @endif</h5>
                            <p><em>{{ $resume->institution }}</em></p>
                            <p>
                                {!! $resume->description !!}
                            </p>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->
