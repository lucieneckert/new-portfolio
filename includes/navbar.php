<?php
    $highlight_nav = "<span class='highlight-nav'>YOU ARE HERE<br>🡇</span>"; //TODO: Implement
?>

<nav class='sideways-flex'>
    <a href="/"><img id='logo-img' src="public/images/cat.jpg" alt=""></a>
    <ul>
        <a id='index' href="/"><li class='<?php if ($_SERVER['REQUEST_URI'] == "/") echo "highlighted" ?>'>
            index
        </li></a>
        <a id='projects' href="/projects"><li class='<?php if ($_SERVER['REQUEST_URI'] == "/projects") echo "highlighted" ?>'>
            projects
        </li></a>
        <a id='blog' href="/blog"><li class='<?php if ($_SERVER['REQUEST_URI'] == "/blog") echo "highlighted" ?>'>
            blog
        </li></a>
    </ul>
</nav>