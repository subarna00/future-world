<?php $faqs = App\Models\Faq::where('status', 'active')
    ->latest()
    ->limit(6)
    ->get();
$faqCount = count($faqs);
?>
@if ($faqCount)
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="faq-list">
                        @foreach ($faqs as $faq)
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question"
                                    href="#faq1{{ $faq->id }}">
                                    {{ $faq->title }} <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq1{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endif
