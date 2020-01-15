
<?php include_once 'header.php'; ?>

<div class="container">

    <!-- Login form -->
    <div class="loginForm">
        <form  action="login.php" name="loginform" class="form-login" method="post">
           
            <hr class="colorgraph">
            
            <label for="klantnaam">Klantnaam:</label>
            <input type="text" name="klantnaam" id="klantnaam" placeholder="Klantnaam" class="input form-control" autocomplete="off" required autofocus>
            <label for="text">Telefoonnummer:</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer" class="input form-control" autocomplete="off" required>
            <label for="text">Datum:</label>
            <input type="date" name="datum" id="datum" placeholder="Datum" class="input form-control" autocomplete="off" required>
            <button type="submit" class="btn btn-primary center-block mt-5">Toevoegen</button>
            
            <!-- If there is an error it will be shown. --> 
            <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['message']) ?></center></strong>
                    <?php unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            
            
            
        </form>

    </div>  <!-- End Login Form-->
 

  
</div>
<!-- End div -->