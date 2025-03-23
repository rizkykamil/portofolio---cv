@extends('landing-page.partials.app')
@section('title', 'Contact Me')
@section('content')
<section class="content-box-area mt-4">
    <div class="container">
        <div class="row g-4">
            @include('landing-page.partials.sideprofile')

            <div class="col-xl-8">
                <div class="card content-box-card">
                    <div class="card-body portfolio-card contact-card">
                        <div class="top-info">
                            <div class="text">
                                <h1 class="main-title">Let's 👋 <span>Work</span> Together</h1>
                                <p>I'm here to help if you're searching for a Web Developer to bring your idea to
                                    life or a
                                    design partner to help take your business to the next level.</p>
                            </div>
                        </div>
                        <div class="contact-area">
                            <div class="leave-comments-area">
                                <div class="comments-box">
                                    <form id="contact-form" action="{{route("contact.store")}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">  
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Name</label>
                                                    <input name="name" required type="text" id="name"
                                                        class="form-control shadow-none" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input name="email" required type="email" id="email"
                                                        class="form-control shadow-none" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Subject</label>
                                                    <input name="subject" required type="text" id="subject"
                                                        class="form-control shadow-none" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Phone</label>
                                                    <input name="phone" required type="text" id="phone"
                                                        class="form-control shadow-none" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">necessary</label>
                                                    <select name="necessary" class="form-select shadow-none" id="necessary">
                                                        <option value="">Select</option>
                                                        <option value="Recruitment Office">Recruitment Office</option>
                                                        <option value="Freelance">Freelance</option>
                                                        <option value="Feedback">Feedback</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Comment</label>
                                                    <textarea name="message" class="form-control shadow-none" rows="4" id="message"
                                                        placeholder="Type details about your inquiry"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="g-recaptcha"
                                                    data-sitekey="{{ config('app.captcha.recaptcha_site_key') }}"
                                                    data-callback='onSubmit'
                                                    data-action='submit'>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="h-captcha" data-sitekey="363c1ab4-85a6-4d38-9500-5e92fb20d354"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="submit-btn" data-bs-toggle="modal" data-bs-target="#verificationModal" id="submit-btn">
                                                    Send Message
                                                    <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                                
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <p class="ajax-response mb-0"></p>
                                </div>
                            </div>
                            <div class="contact-map-area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d15864.720020361712!2d107.0657552!3d-6.2399913!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1726279953408!5m2!1sid!2sid"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="frequently-asked-questions">
                                <h2 class="main-common-title">Frequently Asked Questions
                                </h2>
                                <div class="frequently-asked-questions-main">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Apa saja layanan yang ditawarkan oleh Rizky Kamil?
                                                    <span class="ms-auto">
                                                        <span class="icon ms-4">
                                                            <img class="icon-plus" src="assets/img/icons/plus.svg"
                                                                alt="plus">
                                                            <img class="icon-minus d-none"
                                                                src="assets/img/icons/minus.svg" alt="minus">
                                                        </span>
                                                    </span>
                                                </button>
                                            </h4>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Rizky Kamil menawarkan layanan pengembangan web penuh, dengan
                                                        keahlian di bagian backend dan lebih dari 4 tahun pengalaman
                                                        dalam lebih dari 10+ proyek.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Bagaimana cara menghubungi Rizky Kamil untuk diskusi proyek?
                                                    <span class="ms-auto">
                                                        <span class="icon ms-4">
                                                            <img class="icon-plus" src="assets/img/icons/plus.svg"
                                                                alt="plus">
                                                            <img class="icon-minus d-none"
                                                                src="assets/img/icons/minus.svg" alt="minus">
                                                        </span>
                                                    </span>
                                                </button>
                                            </h4>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Anda dapat menghubungi Rizky Kamil melalui form kontak di halaman
                                                        ini, atau dengan menekan tombol "Book A Call" untuk membuat
                                                        janji konsultasi, serta bisa mengirim email melalui tombol "Copy
                                                        Email".
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Apa pengalaman utama yang dimiliki Rizky Kamil?
                                                    <span class="ms-auto">
                                                        <span class="icon ms-4">
                                                            <img class="icon-plus" src="assets/img/icons/plus.svg"
                                                                alt="plus">
                                                            <img class="icon-minus d-none"
                                                                src="assets/img/icons/minus.svg" alt="minus">
                                                        </span>
                                                    </span>
                                                </button>
                                            </h4>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Rizky Kamil adalah pengembang web berpengalaman dengan
                                                        spesialisasi di backend development. Ia telah mengerjakan
                                                        berbagai proyek besar selama 4 tahun terakhir dan berhasil
                                                        menangani lebih dari 10+ proyek.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Apakah Rizky Kamil menerima kolaborasi untuk proyek desain dan
                                                    pengembangan?
                                                    <span class="ms-auto">
                                                        <span class="icon ms-4">
                                                            <img class="icon-plus" src="assets/img/icons/plus.svg"
                                                                alt="plus">
                                                            <img class="icon-minus d-none"
                                                                src="assets/img/icons/minus.svg" alt="minus">
                                                        </span>
                                                    </span>
                                                </button>
                                            </h4>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Ya, Rizky Kamil terbuka untuk kolaborasi dalam pengembangan web
                                                        dan desain. Anda dapat mengisi form kontak di halaman ini untuk
                                                        mendiskusikan ide atau kebutuhan Anda.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h4 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Di mana saya bisa melihat proyek-proyek yang telah dikerjakan oleh
                                                    Rizky Kamil?
                                                    <span class="ms-auto">
                                                        <span class="icon ms-4">
                                                            <img class="icon-plus" src="assets/img/icons/plus.svg"
                                                                alt="plus">
                                                            <img class="icon-minus d-none"
                                                                src="assets/img/icons/minus.svg" alt="minus">
                                                        </span>
                                                    </span>
                                                </button>
                                            </h4>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Anda dapat melihat portofolio proyek Rizky Kamil dengan
                                                        mengunjungi halaman "Works" di situs ini. Di sana terdapat
                                                        daftar lengkap proyek-proyek yang telah dikerjakan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verificationModalLabel">Verifikasi Manusia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Untuk memastikan Anda bukan bot, selesaikan soal berikut:</p>
                    <div id="math-question">
                        <!-- Soal perkalian akan muncul di sini -->
                        <p class="mb-2"><span id="num1"></span> × <span id="num2"></span> = ?</p>
                        <input type="text" id="answer" class="form-control" placeholder="Masukkan jawaban">
                        <input type="hidden" id="correct-answer">
                    </div>
                    <p id="error-message" class="text-danger mt-2" style="display: none;">Jawaban salah, coba lagi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="verifyAnswerBtn">Kirim Jawaban</button>
                </div>
            </div>
        </div>
    </div>








</section>
<script>
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>

const recaptchaSiteKey = "{{ config('app.captcha.recaptcha_site_key') }}";
</script>
@endsection
