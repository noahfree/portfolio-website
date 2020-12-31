<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noah Free | Portfolio</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins&family=Source+Code+Pro&family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body onload="getInfo('', '#classContent')">
    <nav id="navbar">
        <a href="index.php">Noah Free</a>
        <div class="burger">
            <p class="line1"></p>
            <p class="line2"></p>
            <p class="line3"></p>
        </div>
        <div class="items">
            <?php include "includes/navLinks.php"; ?>
        </div>
        <div class="mobile">
            <?php include "includes/navLinks.php"; ?>
        </div>
    </nav>
    <div id="noahfree">
        <img src="images/noahfree.png" alt="">
        <div>
            <h1>Noah</h1>
            <h1>Free</h1>
            <h5>Computer Science | Economics</h5>
        </div>
    </div>
    <div id="about">
        <p class="about">Hello, thank you for visiting my website. I am a computer science & economics double major at the University of Missouri, set to graduate in the spring of 2023.</p>
    </div>
    <div id="experience">
        <h1>Experience</h1>
        <div>
            <div class="languages">
                <h2>Languages</h2>
                <p class="line"></p>
                <ul>
                    <li>Java | C</li>
                    <li>Python, Spring 2021</li>
                    <li>HTML | CSS</li>
                    <li>JavaScript | jQuery</li>
                    <li>PHP | AJAX</li>
                    <li>GitHub: <a href="https://github.com/noahfree" target="_blank">noahfree</a></li>
                </ul>
            </div>
            <div class="work">
                <h2>Work</h2>
                <p class="line"></p>
                <h3>Student Web-Editor for the University of Missouri Economics Department</h3>
                <ul>
                    <li>Design & edit current faculty members’ personal websites, using HTML, CSS, & JavaScript</li>
                    <li>Update information on the department website & perform requested tasks in an efficient & timely manner</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="classes">
        <h1>Classes</h1>
        <div>
            <select onchange="updateClasses()" id="selectSubject">
                <option disabled selected>select a subject</option>
                <option>Computer Science</option>
                <option>Economics</option>
                <option>Mathematics</option>
                <option>Statistics</option>
            </select>
            <select onchange="updateContent()" id="selectClass">
                <option disabled selected>select a class</option>
            </select>
        </div>
        <div id="classContent">
        
        </div>
    </div>
    <div id="resume">
        <h1>Resume</h1>
        <div class="line"></div>
        <iframe src="documents/NoahFree-Resume.pdf"></iframe>
    </div>
    <div id="contact">
        <div>
            <h1>Contact</h1>
            <div class="line"></div>
        </div>
        <div class="tab">
            <p class="label">Email</p>
            <a class="info" href="mailto:nsfq94@mail.missouri.edu" target="_blank">nsfq94@mail.missouri.edu</a>
        </div>
        <div class="tab">
            <p class="label">GitHub</p>
            <a class="info" href="https://github.com/noahfree" target="_blank">noahfree</a>
        </div>
        <div class="tab">
            <p class="label">LinkedIn</p>
            <a class="info" href="https://www.linkedin.com/in/noah-free" target="_blank">noah-free</a>
        </div>
    </div>
    <div id="footer"><p>Website built by Noah Free</p></div>
    
    <script src="scripts/script.js"></script>
</body>
</html>
