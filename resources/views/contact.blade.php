@extends('layouts.main')

@section('content')
<div class="box-breadcrumb">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{url('/')}}">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
    </div>
</div>
{{-- start content --}}
<div id="content">
    <div class="content">
        <div class="container">
            <div class="main-content-page">
                <div class="content-contact-page">
                    {{-- <div class="box-map">
                        <h2 class="title30">contact us</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193747.6573521406!2d-74.0850833747319!3d40.64515936128871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24416947c2109%3A0x82765c7404007886!2zQnJvb2tseW4sIFRp4buDdSBiYW5nIE5ldyBZb3JrLCBIb2EgS-G7sw!5e0!3m2!1svi!2sin!4v1499159900961" allowfullscreen></iframe>
                    </div> --}}
                    <!-- End Google Map -->
                    {{-- <div class="contact-page-info blockquote">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="contact-box">
                                    <span class="color"><i class="fa fa-institution"></i></span>
                                    <label class="title16 color">ADDRESS:</label>
                                    <p class="desc">The Company Name Inc. 4320 St Vincent Place,Glasgow, DC 28</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <div class="contact-box">
                                    <span class="color"><i class="fa fa-phone"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 color">PHONES:</label>
                                        </li>
                                        <li>
                                            <span>800-6688-999;</span>
                                            <span>800-8866-404</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-box">
                                    <span class="color"><i class="fa fa-fax"></i></span>
                                    <ul class="list-inline-block">
                                        <li>
                                            <label class="title16 color">Fax:</label>
                                        </li>
                                        <li>
                                            <span>800-6969-0044;</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-12">
                                <div class="contact-box">
                                    <span class="color"><i class="fa fa-envelope-open"></i></span>
                                    <label class="title16 color">e-mail:</label>
                                    <p class="desc"><a href="#">smartbuy@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Contact Info -->
                    <div class="contact-form-faq">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(Session::has('recorud'))
                                    <div class="alert alert-success">
                                            {{Session::get('recorud')}}
                                            {{Session::forget('recorud')}}
                                    </div>
                                @else
                                <div class="contact-form">
                                        <h2 class="title18">Contact Form</h2>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{url('/saved-contact')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input  placeholder="Name" type="text" name="name" >
                                            <input placeholder="Your e-mail address *"  type="text" name="email">
                                            <input   placeholder="Subject *" type="text" name="subject">
                                            <textarea  rows="7" placeholder="Message *" name="message"></textarea>
                                            <input  placeholder="Subject *" type="file" style="margin-bottom: 10px;" name="image">
                                            <input type="submit" value="send" class="shop-button" />
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
@endsection