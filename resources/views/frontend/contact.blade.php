@extends('frontend.layout.master')
@section('content')
@section('page-id', 'contact')
@section('page-class', 'blog')

<div class="main-content">
    <div id="wrapper-site">
        <div id="content-wrapper">
            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="/">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <span>
                                    <span>Liên hệ</span>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div id="main">
                <div class="page-home">
                    <div class="container">
                        <h1 class="text-center title-page">Liên hệ chúng tôi</h1>
                        <div class="row-inhert">
                            <div class="header-contact">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Email:</div>
                                                <div class="contact-content">
                                                    <a href="mailto:info@myphamviethuong.vn">info@myphamviethuong.vn</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Địa chỉ:</div>
                                                <div class="contact-content">
                                                Cụm Công Nghiệp Triều Khúc, Tân Triều,  
                                                    <br>Thanh Trì, Hà Nội.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex justify-content-end  last">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Số điện thoại:</div>
                                                <div class="contact-content">
                                                09.18.56.3333
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-map">
                                <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7450.979225876795!2d105.80193701208064!3d20.973002039405845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ace794afceef%3A0xc0729eee1bd1ad1e!2zR2lhIGPDtG5nIG3hu7kgcGjhuqltIC0gTmjDoCBtw6F5IHPhuqNuIHh14bqldCBt4bu5IHBo4bqpbSBWaeG7h3QgSMawxqFuZw!5e0!3m2!1svi!2s!4v1726302383196!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="input-contact">
                                
                                <p class="icon text-center">
                                    <a href="#">
                                        <img src="/assets/frontend/img/other/contact_mess.png" alt="img">
                                    </a>
                                </p>

                                <div class="d-flex justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="contact-form">
                                            <form action="#" method="post" enctype="multipart/form-data">
                                                <div class="form-fields">
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <input class="form-control" name="name" placeholder="Họ tên">
                                                        </div>
                                                        <div class="col-md-6 margin-bottom-mobie">
                                                            <input class="form-control" name="from" type="email" value="" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" name="message" placeholder="Nội dung" rows="8"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn" type="submit" name="submitMessage">
                                                        <img class="img-fl" src="/assets/frontend/img/other/contact_email.png" alt="img">Gửi tin nhắn
                                                    </button>
                                                </div>
                                            </form>
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

@endsection