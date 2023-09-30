@extends('layouts.app')
<style>
    .overlay-contact{
        position: static !important;
        width: auto !important;
        margin-top: 0px !important;
    }
</style>
@section('content')
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2>About <span> Us</span></h2>
                        <p>Welcome to Adept Institute, where knowledge meets excellence. We are more than just an educational institution. we are a community of passionate educators and dedicated learners striving for academic and personal growth.</p>
                    </div>
                </div>
                <div class="ed-about-sec1">
                    <div class="ed-advan">
                        <ul style="display: flex;justify-content: center; flex-wrap: wrap">
                            <li>
                                <div class="ed-ad-img">
                                    <img src="/assets/images/adv/1.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Continuous Improvement</h4>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi bibendum imperdiet bibendum.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="assets/images/adv/2.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Research</h4>
                                    <p>Adept Institute proudly boasts a global community of learners, transcending borders to provide diverse perspectives and experiences.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="assets/images/adv/3.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Community</h4>
                                    <p>Join our vibrant community of learners, where you can connect, collaborate, and share ideas with like-minded individuals.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="assets/images/adv/4.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Expert Faculty</h4>
                                    <p>Our experienced and knowledgeable faculty members are committed to delivering top-quality education, ensuring you receive the best guidance and support.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="assets/images/adv/5.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Diverse Courses</h4>
                                    <p>Explore our wide range of courses, designed to cater to various interests and career goals. Whether you're a student, a working professional, or someone eager to pursue a new passion, we have something for everyone.</p>
                                </div>
                            </li>
                            <li>
                                <div class="ed-ad-img">
                                    <img src="assets/images/adv/6.png" alt="">
                                </div>
                                <div class="ed-ad-dec">
                                    <h4>Cutting-Edge Resources</h4>
                                    <p>We invest in the latest technology and learning resources to provide you with a modern and effective learning experience.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ed-about-sec1">
                    <div class="col-md-12">
                        <div class="con-title">
                            <hr>
                            <h2>Get In <span> Touch</span></h2>
                            <p>We invite you to be part of our Adept Institute family. Explore our courses, connect with our team, and embark on a journey of personal and professional growth with us. If you have any questions or need assistance, please don't hesitate to <a href="/contact/us" style="color: dodgerblue">contact us</a>. We're here to support you every step of the way.</p>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('home.social-media')
    @include('home.footer-files')
@endsection
