@extends('user.app')

@section('page-content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(website/assets/img/slide/slide-1.jpg)">
                <div class="container">
                    <h2><span>LET'S MAKE YOUR LIFE HAPPIER</span></h2>
                    <p>Now You don't need to wait long for giving your sample</p>
                    <a href="#appointment" class="btn-get-started scrollto">Let's Book Home Collection</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(website/assets/img/slide/slide-2.jpg)">
                <div class="container">
                    <h2>LET'S MAKE YOUR LIFE HAPPIER</h2>
                    <p>Now You don't need to wait long for giving your sample</p>
                    <a href="#appointment" class="btn-get-started scrollto">Let's Book Home Collection</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(website/assets/img/slide/slide-3.jpg)">
                <div class="container">
                    <h2>LET'S MAKE YOUR LIFE HAPPIER</h2>
                    <p>Now You don't need to wait long for giving your sample</p>
                    <a href="#appointment" class="btn-get-started scrollto">Let's Book Home Collection</a>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Book Investigations</h2>
                <p>Limited Time Offer (87 Parameters ) Hba1c, Complete Hemogram, Iron Studies, Kidney Function Test,
                    Liver Function Test, Blood Glucose Fasting, Thyroid Profile-Total (T3, T4 & TSH
                    Ultra-sensitive), Lipid Profile, Urine Routine & Microscopy Extended + Free Doctor Consultation
                </p>
            </div>

            <!-- Appointment form -->
            <form action="{{ url('appointment') }}" method="post" role="form" class="php-email-form" data-aos="fade-up"
                data-aos-delay="100">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="date" name="date" class="form-control datepicker" id="date"
                            placeholder="Appointment Date" required>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-10 form-group mt-3">
                        <label for="testGroup">Select Test Group <span class="note">(*To deselect the Test Group Reselect the Selected Test Group)</span></label>
                        <select name="testGroup[]" id="testGroup" class="form-select select2" multiple="multiple">
                            <option value="" disabled>Select Test Group</option>
                            @foreach($testGroups as $testGroup)
                            <option data-price="{{$testGroup->Charge}}" value="{{$testGroup->GroupName}}">{{$testGroup->GroupName}} ({{$testGroup->Charge}}
                                ₹)</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 form-group mt-3">
                        <label for="Total Price">Total</label>
                        <input class="form-control" type="text" name="opt_price" id="opt_price" value="0" readonly/>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" id="message" rows="5"
                        placeholder="Message (Optional)"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit">Book Test</button>
                </div>
            </form>
            <!-- Appointment form -->
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">Free Sample Pickup</a></h4>
                        <p class="description">Cost free sample pickup from Home or Office.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">HONEST PRICES</a></h4>
                        <p class="description">Say NO to cuts & commissions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-thermometer"></i></div>
                        <h4 class="title"><a href="">DOCTOR CONSULTATION</a></h4>
                        <p class="description">Professional consultation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4 class="title"><a href="">GUARANTEED ACCURACY</a></h4>
                        <p class="description">Money back guarantee on accuracy.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>In an emergency? Need help now?</h3>
                <p> Limited Time Offer (87 Parameters ) Hba1c, Complete Hemogram, Iron Studies, Kidney Function
                    Test, Liver Function Test, Blood Glucose Fasting, Thyroid Profile-Total (T3, T4 & TSH
                    Ultra-sensitive), Lipid Profile, Urine Routine & Microscopy Extended + Free Doctor Consultation
                </p>
                <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
            </div>

        </div>
    </section><!-- End Cta Section -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Welcome to Sona Diagnostics</h2>
                <p>Sona Diagnostics offers a wide array of screening preventive tests and health checkup packages
                    enabling timely and early diagnosis of a disease which in turn serves the medical fraternity to
                    accurately identify and treat the disease effectively and also aid prognosis of a disease under
                    treatment. In most cases, timely diagnosis of a disease can make all the difference.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="website/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Why Choose Sona Diagnostics</h3>
                    <p class="fst-italic">
                        Sona Diagnostic Centre is a fully automated diagnostic laboratory and focus on strong
                        technologies, strong brands and strong systems that enable us to give our clients a better
                        quality at affordable costs.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Free Sample Collection</li>
                        <li><i class="bi bi-check-circle"></i> Highly Trained Staffs</li>
                        <li><i class="bi bi-check-circle"></i> Online Report Download</li>
                    </ul>
                    <p>
                        With our staffs trained in various sub-specialties at the best institutes, Sona Diagnostic
                        Centre boasts of having highly qualified technicians and staffs.
                        Zero contamination kit with one-time use material like sealed needle, gloves, swabs and
                        vials to ensure hygienic sample collection.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                            class="purecounter"></span>

                        <p><strong>Doctors</strong></p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Departments</strong></p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Research Lab</strong></p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Awards</strong></p>
                        <a href="#">Find out more &raquo;</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="icon-box mt-5 mt-lg-0">
                        <i class="fas fa-child"></i>
                        <h4>Full Body Health Checkup Packages</h4>
                        <p>Reasons why full body health check-up is mandatorily essential..</p>
                        <p>
                            <button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> View Package</button>
                            <button class="btn btn-success btn-sm"><span class="fa fa-money-bill"></span> Rs. 399/-</button>
                        </p>
                    </div>
                    <div class="icon-box mt-1">
                        <i class="fa fa-solid fa-viruses"></i>
                        <h4>Post Covid Health Checkup Packages</h4>
                        <p>
                            It has been observed that even after the SARS-COV-2 is defeated by the immune system, it...
                        </p>
                        <p>
                            <button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> View Package</button>
                            <button class="btn btn-success btn-sm"><span class="fa fa-money-bill"></span> Rs. 999/-</button>
                        </p>
                    </div>
                    <div class="icon-box mt-1">
                        <i class="fa fa-solid fa-virus"></i>
                        <h4>Covid Antibody Test Packages</h4>
                        <p>COVID-19 Antibody IgM, COVID-19 Antibody IgG, Covid Antibody IgG - Quantitative</p>
                        <p>
                            <button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> View Package</button>
                            <button class="btn btn-success btn-sm"><span class="fa fa-money-bill"></span> Rs. 300/-</button>
                        </p>
                    </div>
                    <div class="icon-box mt-1">
                        <i class="fa fa-solid fa-book-medical"></i>
                        <h4>Senior Citizen Health Checkup</h4>
                        <p>Senior citizen health checkup is a matter that should not be overlooked...</p>
                        <p>
                            <button class="btn btn-primary btn-sm"><span class="fa fa-eye"></span> View Package</button>
                            <button class="btn btn-success btn-sm"><span class="fa fa-money-bill"></span> Rs. 1149/-</button>
                        </p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"
                    style='background-image: url("website/assets/img/features.jpg");' data-aos="zoom-in"></div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Diagnostic Services facilitates the provision of timely, cost-effective, and high quality diagnostic
                    care in safe and secure environments. It includes the clinical services of Pathology and Laboratory
                    Medicine, Radiology, and Nuclear Medicine.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-child"></i></div>
                    <h4 class="title"><a href="">WHOLE BODY CT SCAN</a></h4>
                    <p class="description">A computerized tomography (CT) scan combines a series of X-ray images taken
                        from different angles around your body</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-x-ray fa-fw"></i></div>
                    <h4 class="title"><a href="">DIGITAL X-RAY</a></h4>
                    <p class="description">An X-ray, or, much less commonly, X-radiation, is a penetrating form of
                        high-energy electromagnetic radiation.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-teeth"></i></div>
                    <h4 class="title"><a href="">OPG</a></h4>
                    <p class="description">An OPG (Orthopantomagram) is a panoramic scanning dental X-ray of the upper
                        and lower jaw.

                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"><a href="">ULTRA SONOGRAPHY</a></h4>
                    <p class="description">(UL-truh-soh-NAH-gruh-fee) A procedure that uses high-energy sound waves to
                        look at tissues and organs inside the body.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"><a href="">ECHO CARDIOGRAPHY</a></h4>
                    <p class="description">An echocardiography, echocardiogram, cardiac echo or simply an echo, is an
                        ultrasound of the heart. It is a type of medical imaging of the heart, using standard ultrasound
                        or Doppler ultrasound.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title"><a href="">EEG</a></h4>
                    <p class="description">An echocardiography, echocardiogram, cardiac echo or simply an echo, is an
                        ultrasound of the heart. It is a type of medical imaging of the heart</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->



    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Departments</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4>Histopathology</h4>
                                <p>Histology is the study of tissues, and pathology is the study of disease</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4>Cytopathology</h4>
                                <p>Cytology is a common method for determining a diagnosis in the medical world</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4>Molecular Diagnostics</h4>
                                <p>Cellular–Molecular diagnostics” is a broad term describing a class of diagnostic
                                    tests</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4>Hematology & Immunology</h4>
                                <p>Immunohematology is a branch of hematology and transfusion medicine</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <h3>Histopathology</h3>
                            <p class="fst-italic">Histology is the study of tissues, and pathology is the study of
                                disease. Histopathology means the study of tissues related to disease.</p>
                            <img src="website/assets/img/departments/hispathology1.jpg" alt="" class="img-fluid">
                            <p>A histopathology report describes the tissue that the pathologist examined. It can
                                identify features of what cancer looks like under the microscope. A histopathology
                                report is also sometimes called a biopsy report or a pathology report.</p>
                            <p>Histopathological examination of tissues starts with surgery, biopsy, or autopsy. The
                                tissue is removed from the body or plant, and then, often following expert dissection in
                                the fresh state, placed in a fixative which stabilizes the tissues to prevent decay. The
                                most common fixative is formalin.</p>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <h3>Cytopathology</h3>
                            <p class="fst-italic">Cytology is a common method for determining a diagnosis in the medical
                                world.</p>
                            <img src="website/assets/img/departments/cytopathology1.jpg" alt="" class="img-fluid">
                            <p>Cytology tests use small amounts of bodily tissue or fluid in order to examine certain
                                types of cells. Healthcare providers can use cytology tests for almost all areas of your
                                body.</p>
                            <p>Cytology (also known as Cytopathology) involves examining cells from bodily tissues or
                                fluids to determine a diagnosis. A certain kind of scientist called a pathologist will
                                look at the cells in the tissue sample under a microscope and look for characteristics
                                or abnormalities in the cells.</p>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <h3>Molecular Diagnostics</h3>
                            <img src="website/assets/img/departments/molecularDiagnostics1.jpg" alt=""
                                class="img-fluid">
                            <p>“Cellular–Molecular diagnostics” is a broad term describing a class of diagnostic tests
                                that assess a person’s health literally at a cellular and molecular level, detecting and
                                measuring specific cellular alterations, genetic sequences in deoxyribonucleic acid
                                (DNA) or ribonucleic acid (RNA) or amino acids or the proteins they express..</p>
                            <p>Molecular tests to detect viruses use the polymerase chain reaction (PCR) and other
                                comparable nucleic acid amplification methods. FDA-cleared multiplex tests have become
                                available for the diagnosis of respiratory, gastrointestinal, and central nervous system
                                (CNS) infections. Some of these tests detect 20 or more different agents at the same
                                time and may require only about 65 min to perform.</p>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <h3>Hematology & Immunology</h3>
                            <p class="fst-italic">Immunohematology is a branch of hematology and transfusion medicine
                                which studies antigen-antibody reactions and analogous phenomena as they relate to the
                                pathogenesis and clinical manifestations of blood disorders.</p>
                            <img src="website/assets/img/departments/hematologyImmunology1.jpg" alt=""
                                class="img-fluid">
                            <p>A person employed in this field is referred to as an immunohematologist. Their day-to-day
                                duties include blood typing, cross-matching and antibody identification.</p>
                            <p>Immunohematology and Transfusion Medicine is a medical post graduate specialty in many
                                countries. The specialist Immunohematology and Transfusion Physician provides expert
                                opinion for difficult transfusions, massive transfusions, incompatibility work up,
                                therapeutic plasmapheresis, cellular therapy, irradiated blood therapy, leukoreduced and
                                washed blood products, stem cell procedures, platelet rich plasma therapies, HLA and
                                cord blood banking. Other research avenues are in the field of stem cell researches,
                                regenerative medicine and cellular therapy.[</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                NABL approved lab with RTPCR test.
                                My sample collected in mrng and phlebotomist was well dressed collected sample in gud manner and by the evening I recieved my report this service is the future on Sona Diagnostics
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="website/assets/img/testimonials/male.jpg" class="testimonial-img"
                                alt="">
                            <h3>Ravi Kumar</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I recieved a call from dr and she provided a perfect solution and also suggested some supplement which is gud fr health seeing many improvement after taking supplements
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="website/assets/img/testimonials/female.jpg" class="testimonial-img"
                                alt="">
                            <h3>Hemant Agarwal</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                I am very much satisfied with services . Done tests of my family and friends during covid and find the support and great service during this period.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="website/assets/img/testimonials/female.jpg" class="testimonial-img"
                                alt="">
                            <h3>Sanchita</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Good!! I have conducted blood test for my family and we all get the report on time do I will recommend to everyone to use Sona Diagnostics service.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="website/assets/img/testimonials/female.jpg" class="testimonial-img"
                                alt="">
                            <h3>Ujjeal</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Excellent!! One of the best diagnostics centers in Jharkhand for blood tests and covid tests very friendly in staff.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="website/assets/img/testimonials/male.jpg" class="testimonial-img"
                                alt="">
                            <h3>KRISHNA KUMAR</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->

    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="gallery-lightbox"
                            href="website/assets/img/gallery/gallery-2.jpg"><img
                                src="website/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox"
                            href="website/assets/img/gallery/gallery-3.jpg"><img
                                src="website/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                    
                    <div class="swiper-slide"><a class="gallery-lightbox"
                            href="website/assets/img/gallery/gallery-7.jpg"><img
                                src="website/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="fade-up" data-aos-delay="100">
                        <h3>Free</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                        <h3>Business</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <h3>Developer</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <span class="advanced">Advanced</span>
                        <h3>Ultimate</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questioins</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat
                        nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                        varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                            velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                            turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                        consectetur adipiscing elit pellentesque habitant morbi? <i
                            class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                            pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                            tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                            molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                        dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                            velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                            turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque
                        nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                            class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                            adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                        faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                            class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                            integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                            eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                            Nibh tellus molestie nunc non blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section> -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58592.787898757786!2d85.30812914585317!3d23.386435750990415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e391af0b26e7%3A0x7738cb050445bc43!2sSona%20Diagnostics!5e0!3m2!1sen!2sin!4v1650868649161!5m2!1sen!2sin"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>
                                    <a target="_blank"
                                        href="https://www.google.com/maps?ll=23.395512,85.382777&z=12&t=m&hl=en&gl=IN&mapclient=embed&cid=8590839511616175171">
                                        Khushwaha Complex, near life care hospital Booty More Bariyatu Road, Ranchi
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>
                                    <a href="mailto:sonadiagnosticsranchi@gmail.com">sonadiagnosticsranchi@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>
                                    <a href="tel:+918294566811">+91 8294566811</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection

@section('page-script')
<script>
$(document).ready(function() {
    $('#testGroup').on('change', function() {
    $('#opt_price').val(valueFunction());
  });
});

function valueFunction(quan){
    var $selection = $('#testGroup').find(':selected');
    // var total=0;
    var total=document.getElementById("opt_price").value;
    var grandTotal=0;
    $selection.each(function(){
        var price=$(this).data('price');
        grandTotal=(-total-price);
    })
    return (-grandTotal);
}

</script>
@endsection