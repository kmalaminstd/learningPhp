<?php include 'inc/header.php' ?>

    <div class="container">
        <div class="text-center overflow-hidden">
            <img src="img/logo.png" class="w-25 mb-3" alt="Logo">
        </div>
        <h2 class="text-center">Feedback</h2>
        <p class="lead text-center">Leave feedback for Traversy Media</p>

        <form method="POST" action="submit_feedback.php" class="mt-4 w-75 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="">
                <div class="invalid-feedback">
                    Please provide a valid name.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="">
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Feedback</label>
                <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
                <div class="invalid-feedback">
                    Please provide your feedback.
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
            </div>
        </form>
    </div>

<?php include 'inc/footer.php' ?>