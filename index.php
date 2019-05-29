<?php
    global $title;
    $title = "Hello";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/header.php";
?>

<main>
    <h1><?php echo $title; ?>!</h1>

    <p>Welcome, fellow <i>Homo sapiens</i>!</p>
    <p>My name is <strong title="/d͡ʒuliən t͡ʃɛɹi/">Julien Cherry</strong>. I study computer science and linguistics at <a href="https://northeastern.edu/">Northeastern University</a> in Boston, Massachusetts. In between my studies, I’ve also spent a total of a year writing software at <a href="https://www.proglove.de/">ProGlove</a> in Munich and <a href="https://pivotal.io/">Pivotal Software</a> in New York City.</p>

    <aside>
        <div id="map"></div>
        <script src="/js/map.js"></script>
    </aside>

    <p>On campus, I’m a research assistant for Janet Randall’s <a href="https://web.northeastern.edu/lingandlaw/">Linguistics & Law Lab</a>, where we study how to improve comprehension of legal language. I also spend my time volunteering for <a href="http://operationfriendship.us">Operation Friendship of America</a>, a youth exchange organization I’ve been with since high school.

    <p>Other than that, I love stargazing, sending mail, and doing <a href="/photography/">35-mm photography</a>. I enjoy learning, art, handwriting &amp; typography, and travelling&mdash;one of my favorite recent trips  was visiting St. Louis for <a href="https://en.wikipedia.org/wiki/Solar_eclipse_of_August_21,_2017">the solar eclipse</a>. I also like to <a href="/blog/">write every so often</a> and <a href="/projects/">work on projects in my spare time</a>.</p>
</main>

<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/footer.php";
?>
