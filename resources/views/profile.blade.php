@extends('components.layout.layout')

@section('content')
    <body class="myself">
    <h1>Welcome to my profile</h1>
    <div>
        <main class="myself">
            <section class="myself">
                <h2>Introduction</h2>
                <p>Name: Osuntuyi John Ayorinde(just call me John).</p>
                <p>Location: Paul Krugastraat...</p>
                <p>Last School: Maryland Comprehensive Secondary School.</p>
            </section>
            <section class="myself">
                <h2>Info</h2>
                <p>Date of birth: March 11.</p>
                <p>Siblings: Two brothers.</p>
                <p>Pets: German Shepard(Back In Nigeria).</p>
            </section>
            <section class="myself">
                <h2>Hobbies</h2>
                <p>I'd say my hobbies are:</p>
                <ul>
                    <li>Playing FIFA 20 ( it's the only FIFA I have :o ).</li>
                    <li>Watching football (Liverpool specifically).</li>
                    <li>Watching youtube.</li>
                    <li>Singing when alone.</li>
                    <li>Drawing.</li>
                </ul>
            </section>
            <section class="myself">
                <h2>Quotes</h2>
                <p>I've only actually got two favorite quotes </p>
                <ul>
                    <li>Van Basten: "It's not always easy to understand myself."</li>
                    {{--                <img src="marcus van basten.jpeg" alt="marco van basten celebrating">--}}
                    <li>Albert Einstein: "Failing isn't bad when you learn what not to do."</li>
                    {{--                <img src="albert einstein.jpeg" alt="albert einstein with his tongue out">--}}
                </ul>
            </section>
            <section class="myself">
                <h2>Music</h2>
                <p>Yes I actually do listen to music both from Nigerian artists and others<br>songs like:</p>
                <ul>
                    <li> Way down we go</li>
                    <li> Cafune tek it</li>
                    <li> You'll never walk alone</li>
                    <li> Viva-la-vida</li>
                </ul>
                <ul>
                    <li>Calm down</li>
                    <li>Cough</li>
                    <li>Electricity</li>
                    <li>Dumebi</li>
                </ul>
            </section>
            <section class="myself">
                <h2>Fun facts</h2>
                <p> I also watch anime...</p>
                <p>my favorite one is actually Naruto :)</p>
                {{--            <p><img src="Naruto image.jpeg" alt="an image of naruto"></p>--}}
            </section>
            <aside>
                <p>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/EN/6.-Regulations-Study-Programmes/HZ-Course-and-Examination-Regulations-2021-2022.pdf">Course
                        and Exam regulations</a></p>
                <p>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf">Implementation
                        Regulation</a></p>
                <p><a href="https://learn.hz.nl/my/">Learn Environment</a></p>
                <p>
                    <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams
                        Environment</a></p>
                <p><a href="https://hz.osiris-student.nl/#/home">Study Progress</a></p>
                <p><a href="https://github.com/HZ-HBO-ICT">Github Environment</a></p>
            </aside>
            <article class="games">
                <h2>ARTICLES</h2>
                <p>here are some articles on how games and websites are made</p>
                <p><a href="https://www.cgspectrum.com/blog/game-development-process">GAME</a></p>
                <p><a href="https://zhivagopartners.com/blog/website-tech-101-websites-constructed/">WEBSITE</a></p>
            </article>
        </main>
    </div>
    </body>
@endsection
