<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColabX - Innovation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/in.css">
</head>
<body>
 <!-- Preloader  -->
 <div class="preloader"> 
    <div class="loader">
        <div class="loader-circle"></div>
        <div class="loader-circle"></div>
        <div class="loader-text">Colab<span>X</span></div>
    </div>
</div>  

<header>
    <nav class="navbar flex">
        <!-- Logo -->
        <a href="../index.php" class="logo">
            Colab<span>X</span>
        </a>
        
        <!-- Search Bar -->
        <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search ColabX">
        </div>

        <!-- User & Notification Icons -->
        <div class="nav-icons flex">
            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-comment-dots"></i>
            <i class="fa-solid fa-user"></i>
        </div>
    </nav>
</header>

<!-- Sidebar -->
<aside class="sidebar">
    <ul class="sidebar-menu">
        <li class="active"><i class="fa-solid fa-house"></i> Home</li>
        <li><i class="fa-solid fa-fire"></i> Trending</li>
        <li><i class="fa-solid fa-globe"></i> Explore</li>
        <li><i class="fa-solid fa-list"></i> All</li>
    </ul>

    <h3 class="sidebar-heading">Custom Feeds</h3>
    <ul class="sidebar-menu">
        <li><i class="fa-solid fa-plus"></i> Create a custom feed</li>
    </ul>

    <h3 class="sidebar-heading">Recent</h3>
    <ul class="sidebar-menu">
        <li><i class="fa-solid fa-clock"></i> r/WindowsHelp</li>
    </ul>

    <h3 class="sidebar-heading">Communities</h3>
    <ul class="sidebar-menu">
        <li><i class="fa-solid fa-users"></i> Create a community</li>
        <li><i class="fa-solid fa-star"></i> r/ChatGPT</li>
        <li><i class="fa-solid fa-star"></i> r/developersIndia</li>
        <li><i class="fa-solid fa-star"></i> r/indianbeauty</li>
        <li><i class="fa-solid fa-star"></i> r/kpop</li>
    </ul>
</aside>

<!-- <section>  </section> -->
<section>
    <div class="post">
        <div class="post-header">
            <img src="../images/man.png" alt="User Avatar" class="avatar">
            <div class="post-info">
                <span class="username">@username</span>
                <span class="promoted">• Promoted</span>
            </div>
        </div>
        <p class="post-caption">Your caption text goes here...</p>
        <div class="post-media">
            <img src="../images/post1.jpg" alt="Post Image">
        </div>
        <div class="post-footer">
            <button class="like-btn">👍 39</button>
            <button class="comment-btn">💬 0</button>
            <button class="share-btn">🔄 Share</button>
        </div>
        
    </div>


    <div class="post-divider"></div> <!-- Divider -->
    <div class="post">
        <div class="post-header">
            <img src="../images/man.png" alt="User Avatar" class="avatar">
            <div class="post-info">
                <span class="username">@username</span>
                <span class="promoted">• Promoted</span>
            </div>
        </div>
        <p class="post-caption">Your caption text goes here...</p>
        <div class="post-media">
            <img src="../images/post1.jpg" alt="Post Image">
        </div>
        <div class="post-footer">
            <button class="like-btn">👍 39</button>
            <button class="comment-btn">💬 0</button>
            <button class="share-btn">🔄 Share</button>
        </div>
        
    </div>
    <div class="post-divider"></div> <!-- Divider -->
    <div class="post">
        <div class="post-header">
            <img src="../images/man.png" alt="User Avatar" class="avatar">
            <div class="post-info">
                <span class="username">@username</span>
                <span class="promoted">• Promoted</span>
            </div>
        </div>
        <p class="post-caption">Your caption text goes here...</p>
        <div class="post-media">
            <img src="../images/post1.jpg" alt="Post Image">
        </div>
        <div class="post-footer">
            <button class="like-btn">👍 39</button>
            <button class="comment-btn">💬 0</button>
            <button class="share-btn">🔄 Share</button>
        </div>
        
    </div>
    <div class="post-divider"></div> <!-- Divider -->
    <div class="post">
        <div class="post-header">
            <img src="../images/man.png" alt="User Avatar" class="avatar">
            <div class="post-info">
                <span class="username">@username</span>
                <span class="promoted">• Promoted</span>
            </div>
        </div>
        <p class="post-caption">Your caption text goes here...</p>
        <div class="post-media">
            <img src="../images/post1.jpg" alt="Post Image">
        </div>
        <div class="post-footer">
            <button class="like-btn">👍 39</button>
            <button class="comment-btn">💬 0</button>
            <button class="share-btn">🔄 Share</button>
        </div>
        
    </div>
    <div class="post-divider"></div> <!-- Divider -->
</section>

<script>
     window.addEventListener('load', function() {
        setTimeout(function() {
            document.querySelector('.preloader').classList.add('hidden');
        }, 1000);
    });
</script>
</body>
</html>
