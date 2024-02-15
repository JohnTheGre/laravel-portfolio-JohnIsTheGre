<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{--    <link href="styles.css" rel="stylesheet">--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <script src="https://kit.fontawesome.com/074263b914.js" crossorigin="anonymous"></script>--}}
    <title>My study choice</title>
    @include('navbar')
</head>
<body>
<h2 class="study">Why I choose ICT</h2>
<p class="study-choice"> Well i choose to study ICT as i have noted in my home page due to my interest in Video game development and software design.<br> I have always loved playing video games as a child and when i got older that enjoyment became facination for how the games I play were made.<br> This drove my ambition to excell in IT and computer studies in my secondary school and in WAEC.</p>
<p class="study-choice">Another reason why I chose ICT was simply becuause I understood the importance of ICT in the day to day lives of humans.<br> and due to that the high demand for professionals who have experience in that field of study.<br> Basically the financial gain for ICT professionals.</p>
{{--<p class="study-choice"><img src="why i choose ict.jpeg" alt="ict images"></p>--}}
</body>
<footer>
    <h2>WELCOME TO MY WEBSITE.</h2>
    <div class="icons">
        <a href="https://whatsapp.com">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="https://twitter.com">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://instagram.com">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://facebook.com">
            <i class="fa-brands fa-facebook"></i>
        </a>
    </div>
</footer>
</html>
