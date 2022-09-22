
<?php
    include './layout/doctype.php';
    include './layout/navbar.php';
?>

      <!-- Home -->
    <div class="container">
        <main id="home">
            <div class="flaticon"></div>
             <h1>Search English Verbs</h1>
             <p>you can search easly by taping your verb</p>
               <form action="verb.php" method="get">
                <input type="search" name="verb" placeholder="Eg: Eat" autocomplete="off" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </form>
        </main>
    </div>
    
<?php
  include './layout/login.php';
  include './layout/footer.php';
?>