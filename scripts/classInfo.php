<?php // NOTE: ADD LOADING ICON

$infoId = empty($_GET['infoId']) ? '' : $_GET['infoId'];

if ($infoId == ""){
    if (isset($_COOKIE['class'])){
        if ($_COOKIE['class'] != 'Computer Science' && $_COOKIE['class'] != 'Economics' && $_COOKIE['class'] != 'Mathematics' && $_COOKIE['class'] != 'Statistics'){
            $infoId = $_COOKIE['class'];
        }
    }
    if ($infoId == ""){
        $infoId = "Object Oriented Programming";
    }
}
else if ($infoId != 'Computer Science' && $infoId != 'Economics' && $infoId != 'Mathematics' && $infoId != 'Statistics'){
    setcookie("class", $infoId);
}


$array = null;
$string = null;
$link = "http://catalog.missouri.edu/undergraduategraduate/collegeofengineering/computerscience/#courseinventory";
$term = null;
$grade = null;
$description = null;

switch($infoId){
    case 'Computer Science':
        $link = "http://catalog.missouri.edu/undergraduategraduate/collegeofengineering/computerscience/#courseinventory";
        setcookie("link", $link);
        $array = array("Python 1: Learn to Program in Python", "Database Applications and Information Systems", "Computer Organization and Assembly Language", "Object Oriented Programming", "Advanced Algorithm Design", "Web Application Development I", "Introduction to Logic Systems", "Algorithm Design and Programming II", "Algorithm Design and Programming I");
        break;
    case 'Economics':
        $link = "http://catalog.missouri.edu/courseofferings/econom/";
        setcookie("link", $link);
        $array = array("Intermediate Macroeconomics", "Intermediate Microeconomics", "Principles of Macroeconomics", "Principles of Microeconomics");
        break;
    case 'Mathematics':
        $link = "http://catalog.missouri.edu/courseofferings/math/";
        setcookie("link", $link);
        $array = array("Discrete Mathematics", "Calculus 3", "Calculus 2", "Calculus 1");
        break;
    case 'Statistics':
        $link = "http://catalog.missouri.edu/courseofferings/stat/";
        setcookie("link", $link);
        $array = array("Introduction to Mathematical Statistics");
        break;
    case "Object Oriented Programming":
        $term = "Fall 2020";
        $grade = "A";
        $description = "This course focuses on teaching object-oriented programming concepts through the Java language:  abstraction, polymorphism, encapsulation, inheritance, interfaces, abstract classes, files, streams, and object serialization.  Topics such as GUI and event-driven programming are also tackled.";
        break;
    case "Python 1: Learn to Program in Python":
        $term = "Spring 2021";
        $grade = "IP";
        $description = "An introduction to the Python 3 programming language, covering various topics and paradigms.";
        break;
    case "Database Applications and Information Systems":
        $term = "Spring 2021";
        $grade = "IP";
        $description = "Covers fundamental topics of database management systems (DBMS) and database-enabled applications.  Topics include a brief history of secondary storage and databases, data modeling, introductory SQL, an overview of current database trends, and current popular database systems.";
        break;
    case "Advanced Algorithm Design":
        $term = "Fall 2020";
        $grade = "A+";
        $description = "This class surveys fundamental algorithms and data structures that have wide practical applicability, including search trees and graph algorithms.  Emphasis is placed on techniques for efficient implementation and good software development methodologies.";
        break;
    case "Web Application Development I":
        $term = "Fall 2020";
        $grade = "A";
        $description = "This course will attempt to provide a comprehensive understanding of the evolution, the technologies, and the tools of the Internet. In particular, issues pertaining to the World Wide Web and Multimedia (HTML, CGI, Web based applications) will be discussed in detail.";
        break;
    case "Computer Organization and Assembly Language":
        $term = "Spring 2021";
        $grade = "IP";
        $description = "Introduces computer architectures, programming concepts including parameter passing, I/O, interrupt handling, DMA, memory systems, cache, and virtual memory.";
        break;
    case "Introduction to Logic Systems": 
        $term = "Spring 2020";
        $grade = "A+";
        $description = "Basic tools, methods and procedures to design combinational and sequential digital circuits and systems, including number systems, boolean algebra, logic minimization, circuit design, memory elements, and finite state machine design.";
        break;
    case "Algorithm Design and Programming II":
        $term = "Spring 2020";
        $grade = "A+";
        $description = "A study of fundamental techniques and algorithms for representing and manipulating data structures. Topics include data abstraction, recursion, stacks, queues, linked lists, trees, efficient methods of sorting and searching, and Big-O analysis.";
        break;
    case "Algorithm Design and Programming I":
        $term = "Fall 2019";
        $grade = "A+";
        $description = "This course provides experience in developing algorithms, designing, implementing programs. Topics include syntax/semantics, flow control, loops, recursion, I/O, arrays, strings and pointers.";
        break;
    case "Intermediate Microeconomics":
        $term = "Fall 2020";
        $grade = "A+";
        $description = "Theory of rational behavior in consumption, production, and pricing decisions of households and firms. Partial equilibria in product and factor markets under competition, monopoly, oligopoly and monopolistic competition. A brief introduction to general equilibrium and welfare economics is provided. Calculus is employed.";
        break;
    case "Principles of Macroeconomics": 
        $term = "Spring 2020";
        $grade = "A+";
        $description = "An introduction to the study of how macroeconomic forces and public policy affect the welfare of a nation.  Topics include understanding the business cycle, economic growth, inflation, interest rates, and unemployment, as well as the effects of fiscal and monetary policy.";
        break;
    case "Principles of Microeconomics":
        $term = "Fall 2019";
        $grade = "A+";
        $description = "A broad survey of microeconomics, from the basic market model and its many applications to market failures and policy responses.  Topics include potential trade offs between efficiency and equity in competition and trade policy; determinants of wage differentials, poverty and inequality; and evaluation of the benefits and costs of government interventions in markets.";
        break;
    case "Principles of Macroeconomics":
        $term = "Spring 2021";
        $grade = "IP";
        $description = "The study of the structure and performance of national economics.  Topics include: long-term economic growth, aggregate economic fluctuations, unemployment, and inflation; consequences for national economies of being part of the global economic system; government policies and macroeconomic performance.";
        break;
    case "Discrete Mathematics": 
        $term = "Fall 2020";
        $grade = "A";
        $description = "Sets, functions, logic, relations, induction, recursion, counting techniques, graphs, trees, algorithms.  Math Reasoning Proficiency course.";
        break;
    case "Calculus 3": 
        $term = "Spring 2020";
        $grade = "A+";
        $description = "Vectors, solid analytic geometry, calculus of several variables.  Math Reasoning Proficiency course.";
        break;
    case "Calculus 2": 
        $term = "Fall 2019";
        $grade = "A+";
        $description = "Definite integrals, applications and techniques of integration, elementary transcendental functions, infinite series.  Math Proficiency Reasoning course.";
        break;
    case "Calculus 1":
        $term = "Spring 2019";
        $grade = "A+";
        $description = "Elementary analytic geometry, functions, limits, continuity, derivatives, antiderivatives, definite integrals. Math Proficiency Reasoning Course.";
        break;
    case "Introduction to Mathematical Statistics":
        $term = "Spring 2021";
        $grade = "IP";
        $description = "Introduction to theory of probability and statistics using concepts and methods of calculus.";
        break;
}

if ($term != null) {
    if (isset($_COOKIE['link'])){
        $link = $_COOKIE['link'];
    } 
    $infoId = "<div class='class'><a href='" . $link . "' target='_blank'><div><h1>" . $infoId . "</h1></div>";
    $term = "<div class='taken'><div><h3>" . $term . "</h3><span>term taken</span></div>";
    $grade = "<div><h3>" . $grade . "</h3><span>grade earned</span></div></div>";
    $description = "<div><p>" . $description . "</p></div></a></div>";
    $string = $infoId . $description . $term . $grade;
} 
else if ($array != null) {
    $string = '<option disabled selected id="selectClass">select a class</option>';
    foreach($array as $value){
        $string .= '<option>' . $value . '</option>';
    }
}

print $string;
?>
