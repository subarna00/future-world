@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>FAQs</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">FAQs</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="faq" class="faq section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
                {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
            </div>

            <div class="row justify-content-start" style="background: white;
              padding: 40px 10px 20px 10px;
              border-radius: 5px;
              box-shadow: 0px 0px 3px 1px #00000014;">
                <div class="col-xl-12">
                    <ul class="faq-list">
                        @foreach (App\Models\Faq::where('status','active')->latest()->get() as $faq)
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"> {{$faq->title}} <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                 {{$faq->answer}}
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection
