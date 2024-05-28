<?php include 'inc/header.php' ?>

<?php 

    $sqli = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sqli);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
                <div class="container">
                <h2>Past Feedback</h2>
            <?php if(empty($feedback)): ?>


                <!-- Feedback Placeholder -->
                <div id="feedback-container" class="mt-3">
                    <!-- Display this when there is no feedback -->
                    <p class="lead">There is no feedback</p>
            <?php endif; ?>



            <!-- Sample Feedback Card -->
            <?php foreach($feedback as $item): ?>
                
                <div class="card my-3 w-75">
                    <div class="card-body text-center">
                        <p class="card-text">
                            <?php echo $item['body'] ?>
                        </p>
                        <div class="text-secondary mt-2">By <span class="feedback-name"><?php echo $item['name'] ?></span> on 
                        <span class="feedback-date"><?php echo $item['date']; ?></span></div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>

<?php include 'inc/footer.php' ?>