<style>
    .digitaltime{
        font-family: "Arial", Helvetica, sans-serif;
        /* padding: 30px; */
        color: black;
        font-weight: bold;
        position: absolute;
        top: 30%;
        right: 8%;
        transform: translate(50%, -50%);
        font-size: 25px;
        white-space: nowrap;
    }
</style>

<script>
    function displayTime(){
        var dateTime = new Date();
        var hrs = dateTime.getHours();
        var min = dateTime.getMinutes();
        var sec = dateTime.getSeconds();
        var session = document.getElementById('session');

        if(hrs >= 12){
            session.innerHTML = 'PM';
        }else{
            session.innerHTML = 'AM';
        }

        if(hrs > 12){
            hrs = hrs - 12;
        }

        document.getElementById('hours').innerHTML = hrs;
        document.getElementById('minutes').innerHTML = min;
        document.getElementById('seconds').innerHTML = sec;
    }
    setInterval(displayTime, 10);

</script>

<!-- header area start -->
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-12 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 clearfix">
            <ul>
                <li class="digitaltime">
                    <span id="hours">00</span>
                    <span>:</span>
                    <span id="minutes">00</span>
                    <span>:</span>
                    <span id="seconds">00</span>
                    <span id="session">AM</span>
                </li>
            </ul>
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-4 col-sm-6 clearfix">
            <ul class="notification-area pull-right">
                <li id="full-view"><i class="ti-fullscreen"></i></li>
                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                <li class="dropdown">
                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                        <span>2</span>
                    </i>
                    <div class="dropdown-menu bell-notify-box notify-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                <div class="notify-text">
                                    <p>New Commetns On Post</p>
                                    <span>30 Seconds ago</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                <div class="notify-text">
                                    <p>Some special like you</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                <div class="notify-text">
                                    <p>New Commetns On Post</p>
                                    <span>30 Seconds ago</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                <div class="notify-text">
                                    <p>Some special like you</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                    <div class="dropdown-menu notify-box nt-enveloper-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img1.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img2.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">When you can connect with me...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img3.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">I missed you so much...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img4.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Your product is completely Ready...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img2.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img1.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backend/assets/images/author/author-img3.jpg')}}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="settings-btn">
                    <i class="ti-settings"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- header area end -->
