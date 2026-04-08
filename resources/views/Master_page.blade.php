<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>
    body {
    font-family: Arial;
    margin: 0;
    background-color: beige;
}

header {
    position: fixed;
    top: 0;
    width: 100%;
    background: lightskyblue;
    z-index: 1000;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
}

.logo a {
    color: rgb(3, 3, 124);
    text-decoration: none;
}

.menu a {
    margin-left: 20px;
    text-decoration: none;
    color: rgb(3, 3, 124);
}
.menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
}

/* 📱 Responsive */
@media (max-width: 768px) {

    .menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 0;
        background: lightskyblue;
        width: 100%;
        text-align: center;
    }

    .menu a {
        display: block;
        padding: 15px;
        border-top: 1px solid white;
    }

    .menu-toggle {
        display: block;
    }

    .menu.active {
        display: flex;
    }
}
    
    </style>
</head>
<body>

@include('Menu')

  <div class="container" style="padding: 20px; margin-top: 80px;"> 
    @yield('content')
  </div>
  
@include('Footer')

<script>
function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
}
</script>
</body>
</html>