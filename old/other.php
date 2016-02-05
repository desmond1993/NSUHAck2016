<!DOCTYPE html>
<html>
<head>
    <title>Other slide</title>
</head>
<body>
<a href="#menu" class="menu-link">&#9776;</a>
<nav id="menu" class="panel" role="navigation">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">The Ballad of El Goodo</a></li>
        <li><a href="#">Thirteen</a></li>
        <li><a href="#">September Gurls</a></li>
        <li><a href="#">What's Going Ahn</a></li>
    </ul>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bigSlide.js"></script>

<script>
    $(document).ready(function() {
        $('.menu-link').bigSlide();
    });
</script>

</body>
</html>