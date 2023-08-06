@extends('front.layouts.master')
@section('content')


    <!--=====================================
        BREADCRUMB START
    =====================================-->
    <section class="tf__breadcrumb" style="background: url('assets/front/images/breadcrumb_bg.jpg');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>Frequently Asked Question</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        BREADCRUMB END
    =====================================-->


    <!--=====================================
        FAQ START
    =====================================-->
    <section class="tf__faq mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-10 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__faq_img">
                        <div class="img_1">
                            <img src="{{ asset('assets/front') }}/images/faq_img_1.jpg" alt="faq" class="img-fluid w-100">
                        </div>
                        <div class="img_2">
                            <img src="{{ asset('assets/front') }}/images/faq_img_2.png" alt="faq" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__faq_text">
                        <h2>Get Everything You Need About Spa From Us</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore
                            mque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam voluptatem
                            quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <p>ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore
                            mque laudantium totam rem aperiam eaque ipsa.</p>
                        <p>voluptatem accusantium dolore mque laudantium totam rem aperiam eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque
                            laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo Nemo enim ipsam </p>
                    </div>
                </div>
            </div>
            <div class="row mt_95 xs_mt_45">
                <div class="col-xl-8 col-lg-9 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. How long do the treatmans last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How do you price your services?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Are gifts refundable or exchangable?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree1" aria-expanded="false"
                                    aria-controls="collapseThree1">
                                    4. Do you have gift cards?
                                </button>
                            </h2>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree2" aria-expanded="false"
                                    aria-controls="collapseThree2">
                                    5. Do I have to pay a deposit?
                                </button>
                            </h2>
                            <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree3" aria-expanded="false"
                                    aria-controls="collapseThree3">
                                    6. How eiusmod tempor incididunt ut labore et dolore?
                                </button>
                            </h2>
                            <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4" aria-expanded="false"
                                    aria-controls="collapseThree4">
                                    7. when enim ad minim veniam, quis nostrud exercitation ullamco ?
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree5" aria-expanded="false"
                                    aria-controls="collapseThree5">
                                    8. How minim veniam quis nostrud exercitation ullamco ?
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed
                                        quia consequn into
                                        tur magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam
                                        est qui dololrew
                                        rem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                        voluptatem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        FAQ END
    =====================================-->
@endsection
