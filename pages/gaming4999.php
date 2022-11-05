<?php

// open the database
include_once('includes/game-db.php');
// check login/logout params
include_once("includes/game-sessions.php");
$session_messages = array();
process_session_params($db, $session_messages);
error_reporting(0);

$error_messages = array();

// check if trying to enroll
if (isset($_POST['enroll'])) {
    // verify key
    $key = $_POST['key'];
    $key_check = exec_query_params($db, "SELECT * FROM keys WHERE key = :key", [":key" => $key])->fetch();
    if ($key_check && !$key_check['used']) {
        // valid key -- enroll the user
        create_account($db, $_POST['username'], $_POST['password']);
        // spend the key
        exec_query_params($db, "UPDATE keys SET used = 1 WHERE key = :key", [":key" => $key]);
    } else {
        array_push($error_messages, "Invalid enrollment key. ");
    }
}


// get all users 
$users = exec_query($db, "SELECT * from users ORDER BY stars DESC")->fetchAll();
// get all challenge data
$chals = exec_query($db, "SELECT * from challenges")->fetchAll();

$chal_post_ids = ['0', '1', '2'];
$chal_solutions = [
    '0' => 'cow',
    '1' => 'enws',
    '2' => 'm',
];

$logged_in = false;
if (is_user_logged_in()) {
    $user_id = $current_user['id'];
    $user_name = $current_user['username'];
    $user_score = $current_user['stars'];
    $logged_in = true;
    // get all user-challenge relations for the current user
    $user_chals = exec_query_params($db, "SELECT * from user_challenges WHERE user_id = :user_id", [":user_id" => $user_id])->fetchAll();
    function extract_chal_id($chal)
    {
        return $chal['challenge_id'];
    }
    $chals_solved = array_map('extract_chal_id', $user_chals);

    $initial_score = $user_score;
    // check if completed challenges submitted
    foreach ($chal_post_ids as $chal_id) {
        if ($_POST[$chal_id] == $chal_solutions[$chal_id] and !in_array($chal_id, $chals_solved)) {
            // #TODO mark challenge completed for user
            array_push($chals_solved, $chal_id);
            $user_score = $user_score + $chals[$chal_id]['stars'];
            // update the database
            exec_query_params($db, "INSERT INTO user_challenges (user_id, challenge_id) VALUES (:user_id, :challenge_id)", [":user_id" => $user_id, ":challenge_id" => $chal_id]);
        }
    }
    // if score changed, update
    if ($initial_score != $user_score) {
        exec_query_params($db, "UPDATE users SET stars = :new_stars  WHERE id = :user_id ", [":user_id" => $user_id, ":new_stars" => $user_score]);
    }
}

// challenge data for render 
$challenges = [
    "0" => [
        "name" => "⭐ / gone",
        "img_path" => "/public/gaming/gone.png",
        "location" => "n/a"
    ],
    "1" => [
        "name" => "⭐⭐ / dir",
        "img_path" => "/public/gaming/bb.png",
        "location" => "North Campus"
    ],
    "2" => [
        "name" => "⭐⭐ / between",
        "img_path" => "/public/gaming/between.png",
        "location" => "Eng. Quad"
    ]
]

?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/gaming4999.css">
    <title>🔎 GAMING 4999</title>
</head>

<header class='container'>
    <div class='row'>
        <div class='col-10' style="margin: 0rem auto;">
            <div class='hero-icon'>🔎🌄🕕</div>
            <h1 style="text-align: center;">GAMING 4999</h1>
        </div>
        <div class='col' style="text-align: right; max-width: 10rem; margin: 1rem auto;">
            <? if ($logged_in) { ?>
                👤 Welcome, <b><? echo ($user_name) ?></b>
                <p style="font-size: 2.5rem;">⭐<? echo ($user_score) ?></p>
                <form action="/gaming4999" method="get">
                    <button type="submit" name="logout" class="btn btn-dark">Log Out</button>
                </form>
            <? } else { ?>
                <form action="/gaming4999" method="post" style="display: flex; flex-direction: column; text-align: left">
                    <label for="login_username">Username</label><input type="text" name="login_username">
                    <label for="login_password">Password</label><input type="text" name="login_password">
                    <button type="submit" name="login" class="btn btn-dark">Login</button>
                </form>
            <? } ?>
        </div>
    </div>
</header>

<body>
    
    <? // if not logged in 
    if (!$logged_in) {
    ?>
        <form action="/gaming4999" method="post" class='container' style="max-width: 20rem; padding: 2rem; border-radius: 1rem; background-color: whitesmoke">
            <h2 class="row">🛑 Please enroll.</h2>
            <p>Due to high demand, enrollment keys are required for participation in this course.</p>
            <?php foreach ($error_messages as $msg) {
                echo "<p class='error'> Error: " . $msg . "</p>";
            }
            ?>
            <div class='row'>
                <label class="col" for="username">Username</label>
                <input class="col" type="text" name="username">
            </div>
            <div class='row'>
                <label class="col" for="password">Password</label>
                <input class="col" type="text" name="password">
            </div>
            <div class='row'>
                <label class="col" for="key">Enrollment Key</label>
                <input class="col" type="text" name="key">
            </div>
            <div class="row" style="padding: 0rem 1rem"><button type="submit" name="enroll" class="btn btn-dark" style="margin-top: 1rem; width: 100%">Enroll</button></div>
        </form>
    <?
    } else {
        // if logged in 
    ?>
        <div class='container' style="background: linear-gradient(#330066, #000066); color: white; padding: 2rem; border-radius: 1rem">
            <div class="row">
                <div class='col'>
                    <h2>Exam 1</h2>
                    <h3 style="font-family: monospace;">10⭐ // night</h3>
                    <p>Loc: Duffield</p>
                </div>
                <div class='col'>
                    <p id='countdown' style="font-size: 5rem;">00:00:00</p>
                </div>
            </div>
        </div>
        <div class='container'>
            <h2>Week 1 Assignments</h2>
            <p>GLHF it's that easy</p>
            <div class='row'>
                <?php foreach ($challenges as $chal_id => $chal_data) { ?>
                    <div class='col'>
                        <div class='card challenge <?php if (in_array($chal_id, $chals_solved)) echo "completed" ?>'>
                            <p class="card-header"><?php echo $chal_data['name'] ?></p>
                            <p>> Location: <?php echo $chal_data['location']?></p>
                            <div class='card-body' style="max-height: 80%;">
                                <img class='chal-pic' src=<?php echo $chal_data['img_path'] ?> alt="">
                            </div>
                            <?php if (in_array($chal_id, $chals_solved)) echo "// completed";
                            else { ?>
                                <form method="post" action="/gaming4999" style="display: flex; width: 100%">
                                    <input type="text" placeholder="solution..." name=<?php echo $chal_id ?>>
                                    <input type="submit" class='btn btn-dark submit' value="Submit" />
                                </form>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
        <div class='container' style="margin-top: 2rem;">
            <h2>Students</h2>
            <div class='container'>
                <ul class='list-group'>
                    <?php
                    foreach ($users as $id => $user_data) {
                    ?>
                        <li class='list-group-item'>
                            <div style="display: flex; justify-content: space-between">
                                <p><? echo htmlspecialchars($user_data['username']) ?></p>
                                <p>⭐<? echo $user_name != $user_data['username'] ? $user_data['stars'] : $user_score ?></p>
                            </div>
                        </li>
                    <?
                    }
                    ?>
                </ul>
            </div>
        </div>
        <section id="syllabus" class="container">
        <h2>Syllabus</h2>
        <p>GAMING 4999 is a real course, with real consequences.* Build up your <span style="font-weight: bold;">GPA</span> (goodboy point accumulation) through collecting stars.
            One exam will be dropped. Course material and syllabus content will vary wildly over the upcoming weeks. Only one winner will be crowned. Prove
            your worth.  <br>
            *<em>This course is real.</em><br>
            **<em>This course fulfills the LGMA-DN-IYM requirement for completion of a Minor in Being Very Cool.</em> 
        </p>
    </section>
    <script>
        const updateCountdown = () => {
            const countdown = document.getElementById("countdown");
            const target = new Date(2022,11,5,7).getTime();
            const now = new Date().getTime();
            console.log(target)
            console.log(now)
            const diff = Math.floor((target - now)); // ms
            const seconds = Math.floor((diff / (1000)));
            const mins =  Math.floor(seconds / 60) % 60;
            const hours = Math.floor(seconds / (60 * 60)) % 12;
            countdown.innerHTML = `${hours}:${mins}:${seconds % 60}`
            setTimeout(updateCountdown, 1000);
        }
        updateCountdown();
    </script>
    <? } ?>
</body>

</html>