@extends('client.header-footer')
@section('content')

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="map">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-7">
                            <div class="map__inner">
                                <h6>Colorado</h6>
                                <ul>
                                    <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
                                    <li>EtsyShop@support.com</li>
                                    <li>+1 800-786-1000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map__iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="contact__address">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6>san bernardino</h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p>795 W 5th St, San Bernardino, CA 92410, USA</p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p>+1 800-786-1000</p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p>EtsyShop@support.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6>Los angeles</h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p>639 S Spring St, Los Angeles, CA 90014, USA</p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p>+1 213-612-3000</p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p>EtsyShop@support.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6>San Bernardino</h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p>1000 Lakepoint Dr, Frisco, CO 80443, USA</p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p>+1 800-786-1000</p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p>EtsyShop@support.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact With us</h3>
                        <ul>
                            <li>Representatives or Advisors are available:</li>
                            <li>Mon-Fri: 5:00am to 9:00pm</li>
                            <li>Sat-Sun: 6:00am to 9:00pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__form">
                        <form action="{{route('mail.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name">
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email">
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="content"></textarea>
                                    @error('content')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <button type="submit" class="site-btn">Send Us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    
@endsection