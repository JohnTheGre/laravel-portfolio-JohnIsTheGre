@extends('components.layout.layout')

@section('content')
    <body>

    <table border="2px solid black" class="dashboard">

        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>Exam</th>
            <th>EC</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="5">1</td>
            <td>Program and Career Orientation(PCO)</td>
            <td>Assessment website(Individual process assessment)</td>
            <td>2.5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Computer Science Basics(CSB)</td>
            <td>Written Knowledge test</td>
            <td>5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Programming Basics (PBA)</td>
            <td>Case study exam</td>
            <td>5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>IT Personality Project Week 1 (PPW1)</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td>---</td>

        </tr>
        <tr>
            <td>IT Personality 1 (ITP1)</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td>---</td>

        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td>Object-Oriented programming(OOP)</td>
            <td>Presentation</td>
            <td rowspan="2">10</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Object-Oriented programming (OOP)</td>
            <td>Case study exam</td>
            <td>---</td>

        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td>Framework Development 1 (FDE1)</td>
            <td>Case study exam</td>
            <td>5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Framework Project 1 (FPR1)</td>
            <td>Criterium based interview</td>
            <td rowspan="3">7,5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Framework Project 1 (FPR1)</td>
            <td>Assignment</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Framework Project 1 (FPR1)</td>
            <td>Case study exam</td>
            <td>---</td>

        </tr>
        <tr>
            <td rowspan="7">4</td>
            <td>Framework Project 2 (FPR2)</td>
            <td>Final delivery</td>
            <td rowspan="3">10</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Framework Project 2 (FPR2)</td>
            <td>Report of acceptance tests and optional assesments</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Framework Project 2 (FPR2)</td>
            <td>IT Development Portfolio</td>
            <td>---</td>

        </tr>
        <tr>
            <td>IT Personality International week (PIW)</td>
            <td>Portfolio</td>
            <td> 1.25</td>
            <td>---</td>

        </tr>
        <tr>
            <td>IT Personality 2 (ITP2)</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Personal Professional Development: Exploration (PPD-E) (INT Class)</td>
            <td>English test</td>
            <td rowspan="2">12,5</td>
            <td>---</td>

        </tr>
        <tr>
            <td>Personal Professional Development: Exploration (PPD-E) (INT Class)</td>
            <td>Criterium focused interview</td>
            <td>---</td>
        </tr>
        <div class="sidemenu2">
            <ul>
                <li>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/OER-HZ-Bacheloropleidingen-voltijd-2023-2024-DEF-versie-20230720.pdf">Course
                        and Examination Regulations</a>
                </li>

                <li>
                    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf">The
                        IR Regulations HBO-ICT</a>
                </li>

                <li>
                    <a href="https://learn.hz.nl/my/"> Learn environment</a>
                </li>

                <li>
                    <a href="https://teams.microsoft.com/_#/school/teams-grid/General?ctx=teamsGrid">Teams
                        environment </a>
                </li>

                <li>
                    <a href="https://hz.osiris-student.nl/#code=kK9w1e">Study progress</a>
                </li>

                <li>
                    <a href="https://github.com/HZ-HBO-ICT">Github environment</a>
                </li>
            </ul>
        </div>
    </table>
    <div class="nbsa-data">
        <h1 class="heading">NBSA boundary</h1>
        <p>In order to pass each year 60 European credits are needed. when you get below 45 European credits you can't
            continue the course</p>
        <div class="nbsa-titles">
            <h3 class="nbsa-name">To pass</h3>
            <span class="nbsa-number">60 ECT needed</span>
        </div>
        <div class="nbsa-bar">
            <span class="nbsa-percentage"></span>
        </div>
    </div>
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
    </body>
@endsection
