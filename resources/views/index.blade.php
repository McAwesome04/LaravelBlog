<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container flex">
            <input type="checkbox" id="menu-toggle">
                    <div class="overlay"></div>
                    <div class="msidebar flex">
                        <div class="scontainer flex">
                            <label for="menu-toggle" class="menu-icon"><i class="fa-solid fa-x"></i></label>
                            <div class="sections flex">
                <div class="welcome flex">
                    <h3>This Blog has an unknown community of <span> 1 </span> amazing people like you</h3>
                    <p>We're a place where folk share, stay up-to-date and grow their careers.</p>
                    <div class="register flex">
                        <a href="#" class="log-in">Log In</a>
                        <a href="#" class="Create-account">Create account</a>
                    </div>
                </div>
                <div class="sub-sections flex">
                    <a href="#"><i class="fa-solid fa-house"></i> Home</a>
                    <a href="#"><i class="fa-solid fa-microphone-lines"></i> Podcast</a>
                    <a href="#"><i class="fa-solid fa-video"></i> Videos</a>
                    <a href="#"><i class="fa-solid fa-tags"></i> Tags</a>
                    <a href="#"><i class="fa-regular fa-lightbulb"></i> Help</a>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i> Shop</a>
                    <a href="#"><i class="fa-solid fa-heart"  style="color: rgb(255, 0, 0);"></i> AD</a>
                    <a href="#" style="display: flex; align-items: center; gap: 4px" ><img src="{{ asset('img/images.png') }}" style="width: 20px;" alt="">About</a>
                    <a href="#"><i class="fa-solid fa-headphones"></i> Contact</a>
                    <a href="#"><i class="fa-solid fa-book-bookmark"></i> Guides</a>
                    <h4 class="other">Other</h4>
                    <a href="#"><i class="fa-solid fa-thumbs-up"></i> Privacy Policy</a>
                    <a href="#"><i class="fa-regular fa-eye"></i> Terms of use</a>
                </div>
                <div class="social">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="popular-tags flex">
                    <h3>Popular Tags</h3>
                    <div class="p-tags">
                        <a href="#">#The Best</a>
                    </div>
                </div>
                <div class="copy-rights flex">
                    <p><a href="#">This blog</a> is A constructive and inclusive social network for Awesome People. With you every step of your journey.</p>
                    <p>Made with love By DeVilHunterN1 AND McAwesome04. This Blog ©2024.</p>
                </div>
            </div>
                        </div>
                    </div>
            <div class="header-wrap flex">
                <a href="#" class="logo"><img src="{{ asset('img/images.png') }}" alt=""></a>
                <div class="search-wrap flex">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search..">
                </div>
            </div>
            <div class="register flex">
                <a href="#" class="log-in">Log In</a>
                <a href="#" class="Create-account">Create account</a>
            </div>
        </div>
        <div class="search-wrap1 flex">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search..">
        </div>
    </header>
    <section class="landing">
        <div class="container flex">
            <div class="sections flex">
                <div class="welcome flex">
                    <h3>This Blog has an unknown community of <span> 1 </span> amazing people like you</h3>
                    <p>We're a place where folk share, stay up-to-date and grow their careers.</p>
                    <div class="register flex">
                        <a href="#" class="log-in">Log In</a>
                        <a href="#" class="Create-account">Create account</a>
                    </div>
                </div>
                <div class="sub-sections flex">
                    <a href="#"><i class="fa-solid fa-house"></i> Home</a>
                    <a href="#"><i class="fa-solid fa-microphone-lines"></i> Podcast</a>
                    <a href="#"><i class="fa-solid fa-video"></i> Videos</a>
                    <a href="#"><i class="fa-solid fa-tags"></i> Tags</a>
                    <a href="#"><i class="fa-regular fa-lightbulb"></i> Help</a>
                    <a href="#"><i class="fa-solid fa-basket-shopping"></i> Shop</a>
                    <a href="#"><i class="fa-solid fa-heart"  style="color: rgb(255, 0, 0);"></i> AD</a>
                    <a href="#" style="display: flex; align-items: center; gap: 4px" ><img src="{{ asset('img/images.png') }}" style="width: 20px;" alt="">About</a>
                    <a href="#"><i class="fa-solid fa-headphones"></i> Contact</a>
                    <a href="#"><i class="fa-solid fa-book-bookmark"></i> Guides</a>
                    <h4 class="other">Other</h4>
                    <a href="#"><i class="fa-solid fa-thumbs-up"></i> Privacy Policy</a>
                    <a href="#"><i class="fa-regular fa-eye"></i> Terms of use</a>
                </div>
                <div class="social">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="popular-tags flex">
                    <h3>Popular Tags</h3>
                    <div class="p-tags">
                        <a href="#">#The Best</a>
                    </div>
                </div>
                <div class="copy-rights flex">
                    <p><a href="#">This blog</a> is A constructive and inclusive social network for Awesome People. With you every step of your journey.</p>
                    <p>Made with love By DeVilHunterN1 AND McAwesome04. This Blog ©2024.</p>
                </div>
            </div>
            <div class="posts flex">
                <div class="land-nav flex">
                    <a href="#"><h3 class="active relavant">Relavant</h3></a>
                    <a href="#"><h3 class="latest">Latest</h3></a>
                    <a href="#"><h3 class="top">Top</h3></a>
                </div>
                <div class="cards">
                    <div class="p-info flex">
                        <a href="#"><img src="{{ asset('img/avatar-02.png') }}" alt=""></a>
                        <div class="p-w">
                            <a href="#"><h5 class="p-name">Hima najy</h5></a>
                            <p class="p-date">6 july</p>
                        </div>
                    </div>
                    <a href="#"><h1>look at the second creator name</h1></a>
                    <!-- <div class="selceted-hash">
                        <a href="#"></a>
                    </div> -->
                    <div class="interaction flex">
                        <div class="reactions flex">
                            <button class="flex">
                                <span><i class="fa-solid fa-face-smile" style="color: #c7c707;"></i></span>
                                <span><i class="fa-regular fa-face-surprise" style="color: #c7c707;"></i></span>
                                <span><i class="fa-solid fa-heart"  style="color: red;"></i></span>
                                <span class="3dad" style="margin-left: 20px;">3 reactions</span>
                            </button>
                            <div class="comments">
                                <button><i class="fa-regular fa-comment"></i><span>1</span> comment</button>
                            </div>
                        </div>
                        <div class="comments-book flex">
                            <div class="bookmark flex">
                                <div class="read">13 min read</div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hashtag">
                    <div class="hash">
                        <div class="hash-head">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="sub-hash">
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="hash">
                        <div class="hash-head">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="sub-hash">
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                            <div class="hash-topic">
                                <h3></h3>
                                <p></p>
                                <span></span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="js/smooth.js"></script>
    <script src="{{ asset('js/test.js') }}"></script>
</body>

</html>
