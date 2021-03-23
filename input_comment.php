<?php

    include "head.html";    

?>
    <p>Category: <?php echo $_GET['category']; ?></p>

    <p>Segment: <?php echo $_GET['segment']; ?></p>

    <p>Period: <?php echo $_GET['year']; ?>, <?php echo $_GET['month']; ?></p>

    <p>User: <?php echo $_GET['comment_username']; ?> (<?php echo $_GET['comment_fullname']; ?>)</p>

        <form action="submit_insert.php" method="post">

            Comment:<br>

            <textarea name="comment" rows="15" cols="15">Enter your comment here.</textarea><br>

            <input type="hidden" name="category" value="<?php echo $_GET['category']; ?>">

            <input type="hidden" name="segment" value="<?php echo $_GET['segment']; ?>">

            <input type="hidden" name="year" value="<?php echo $_GET['year']; ?>">

            <input type="hidden" name="month" value="<?php echo $_GET['month']; ?>">

            <input type="hidden" name="comment_username" value="<?php echo $_GET['comment_username']; ?>">

            <input type="hidden" name="comment_fullname" value="<?php echo $_GET['comment_fullname']; ?>">

            <input type="submit" value="Submit Comment">

        </form>

        

<?php

    include "foot.html";    