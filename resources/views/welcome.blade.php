<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>eHealth</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('landing-page/assets/favicon.ico') }}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('landing-page/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">eHealth</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Beranda</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                {{-- @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Daftar</a></li>
                                @endif --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Aplikasi terbaik yang membantu <span class="text-primary">pengelolaan data pasien</span> dari awal kunjungan hingga pembayaran</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Aplikasi yang mampu mengelola data kunjungan pasien mulai dari Pendataan Pasien, Pendaftaran ke Poli Pelayanan (Seperti : Poli Umum, Poli Gigi, Poli Mata) hingga Pencatatan Pembayaran Layanan</p>
                        @auth
                        <a class="btn btn-primary btn-xl" href="{{ url('/dashboard') }}">Beranda</a>
                        @else
                        <a class="btn btn-primary btn-xl" href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-dark text-white" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Menyediakan fitur yang dibutuhkan!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Pasien yang baru pertama kali berkunjung ke klinik harus di data lengkap sesuai dengan data di KTP. Sedangkan pasien yang sudah pernah berkunjung ke klinik dan telah mendaftarkan diri sebelumnya (sudah terdata) ketika akan melakukan pendaftaran tidak perlu di data ulang. Data pasien yang telah terdaftar dapat di cari berdasarkan nomor kartu/rekam medis, No KTP ataupun Nama Pasien.</p>

                        @if (Route::has('login'))
                            @auth
                            <a class="btn btn-light btn-xl" href="{{ url('/dashboard') }}">Beranda</a>
                            @else
                                <a class="btn btn-light btn-xl" href="{{ route('login') }}">Login</a>
                                {{-- @if (Route::has('register'))
                                <a class="btn btn-secondary btn-xl" href="{{ route('register') }}">Daftar</a>
                                @endif --}}
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Fitur & Layanan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-award fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Real Time</h3>
                            <p class="text-muted mb-0">Data secara real-time dapat dikelola dan cepat</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Master Data Pasien</h3>
                            <p class="text-muted mb-0">Pengelolaan Data pasien tidak pernah semudah ini.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pendaftaran</h3>
                            <p class="text-muted mb-0">Mengefisiensikan waktu pendaftaran bagi operator maupun pasien baru maupun yang sudah pernah berkunjung</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Pembayaran Layanan</h3>
                            <p class="text-muted mb-0">Pembayaran layanan hanya dalam hitungan detik!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/hospital_1.jpeg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/hospital_1.jpeg') }}" height="350" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Pelayanan</div>
                                <div class="project-name">Manajemen Pendaftaran</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/hospital_2.webp') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/hospital_2.webp') }}" height="350" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Pelayanan</div>
                                <div class="project-name">Manajemen Data Pasien</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/hospital_3.avif') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/hospital_3.avif') }}" height="350" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Pelayanan</div>
                                <div class="project-name">Manajemen Pembayaran</div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/2.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/2.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/3.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/3.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/4.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/4.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/5.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/5.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('landing-page/assets/img/portfolio/fullsize/6.jpg') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('landing-page/assets/img/portfolio/thumbnails/6.jpg') }}" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Gratis konsultasi penggunaan aplikasi</h2>
                <a class="btn btn-light btn-xl" href="#contact">Hubungi kami sekarang!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Tertarik menggunakan eHealth?</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Kirimkan pesan kepada kami dan kami akan menghubungi Anda sesegera mungkin!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama wajib diisi.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email wajib diisi.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nomor Telepon</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon wajib diisi.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Pesan wajib diisi.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Data berhasil dikirimkan!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+62818-0955-6334</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; {{ date('Y') }} - eHealth</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('landing-page/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
