@extends('components.layout.layout')

@section('content')
    <body>
    <main>
        <table border="1px solid black">
            <tr>
                <th style="width:10%">Quartile</th>
                <th style="width:30%">Course</th>
                <th style="width:70%">Exam</th>
                <th style="width:30%">Grade</th>
                <th style="width:30%">EC</th>
            </tr>
            <tr>
                <td rowspan="3">1</td>
                <td>Program & Career Orientation</td>
                <td>Assessment website</td>
                <td>x</td>
                <td>2,5</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>Written knowledge test</td>
                <td>x</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>Case study exam</td>
                <td>x</td>
                <td>5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Object-Oriented Programming</td>
                <td>Presentation / Case study exam</td>
                <td>x / x</td>
                <td>10</td>
            </tr>
            <tr>
                <td rowspan="2">3</td>
                <td>Framework Development 1</td>
                <td>Case Study Exam</td>
                <td>x</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Framework Project 1</td>
                <td>Criterium bases interview / assignement / Case study exam</td>
                <td>x/x/x</td>
                <td>7,5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Framework Project 2</td>
                <td>Assessment website</td>
                <td>x</td>
                <td>10</td>
            </tr>
            <tr>
                <td rowspan="3">All</td>
                <td>Personal Professional Development</td>
                <td>Final delivery / Report of acceptence test and optional assessments / IT Development portfolio</td>
                <td>x/x/x</td>
                <td>12,5</td>
            </tr>
            <tr>
                <td>IT Personality 1</td>
                <td rowspan="2">Portfolio</td>
                <td>x</td>
                <td>1,25</td>
            </tr>
            <tr>
                <td>IT Personality 2</td>
                <td>x</td>
                <td>1,25</td>
            </tr>
        </table>
    </main>
    </body>
    <div class="nbsa-data">
        <h1 id="NBSA-heading"> NBSA boundary</h1>
        <p class="NBSA-paragraph">In order to pass each year 60EC's are needed. When you get below 45EC's you cannot
            continue the course</p>
        <div class="nbsa-titles">
            <h3 class="nbsa-name">To pass</h3>
            <span class="nbsa-number">60 ECT needed</span>
        </div>
        <div class="nbsa-bar">
            <span class="nbsa-percentage"></span>
        </div>
    </div>
@endsection
