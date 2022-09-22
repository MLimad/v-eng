<?php
    include './database/db.php';
    include './layout/doctype.php';
    

    if (isset($_GET["verb"])) {
    include './layout/navbar.php';
      $verb = $_GET["verb"];
    
    $stmt = $con->prepare("SELECT * FROM verbs WHERE infinitive = ?");
    $stmt->execute(array($verb));
    $row = $stmt->rowCount();
    if ($row > 0) {
        $result = $stmt->fetch();
?>

        <!-- Affirmative Form. -->
    <section class="table-affir">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h2 class="title">Affirmative Form.</h2>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    <?php echo $result["present_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    <?php echo $result["present_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    <?php echo $result["present_simple2"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    <?php echo $result["present_simple2"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    <?php echo $result["present_simple2"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    <?php echo $result["present_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    <?php echo $result["present_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    <?php echo $result["present_simple"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    <?php echo $result["past_simple"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    <?php echo $result["infinitive"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    had
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    <?php echo $result["past_participle"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Continuous</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    am
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    are
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    is
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    is
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    is
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    are
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    are
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    are
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Continuous</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    was
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    were
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    was
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    was
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    was
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    were
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    were
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    were
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Continuous</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will
                    </td>
                    <td>
                    be
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <h3>Present Perfect Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        have been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        have been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        has been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        has been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        has been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        have been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        have been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        have been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3>Past Perfect Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        had been
                        </td>
                        <td>
                        <?php echo $result["continuous"]; ?>
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                <h3>Future Perfect Continuous</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will have been
                    </td>
                    <td>
                    <?php echo $result["continuous"]; ?>
                    </td>
                </tr>
                </table>
            </div>
            </div>
         </div>
    </section>

        <!-- Negative Form -->
    <section class="table-nega">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h2 class="title">Negative Form</h2>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    do not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    do not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    does not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    does not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    does not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    do not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    do not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    do not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    did not 
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    study
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    have not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    had not
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will not
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <h3>Present Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        am not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        are not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        is not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        is not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        is not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        are not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        are not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        are not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3>Past Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        was not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        were not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        was not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        was not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        was not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        were not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        were not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        were not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3>Future Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        will not
                        </td>
                        <td>
                        be
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <h3>Present Perfect Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        have been not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        have been not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        has been not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        has been not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        has been not
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        have been not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        have been not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        have been not
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3>Past Perfect Continuous</h3>
                    <table>
                    <tr>
                        <td class="subject">
                        I
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                            studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        He
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        She
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        It
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        We
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        You
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    <tr>
                        <td class="subject">
                        They
                        </td>
                        <td>
                        had not been
                        </td>
                        <td>
                        studying
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-4">
                <h3>Future Perfect Continuous</h3>
                <table>
                <tr>
                    <td class="subject">
                    I
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    He
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    She
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    It
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    We
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    You
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    They
                    </td>
                    <td>
                    will not have been
                    </td>
                    <td>
                    studying
                    </td>
                </tr>
                </table>
            </div>
         </div>
    </section>

        <!-- Question Form . -->
    <section class="table-ques">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h2 class="title">Question Form.</h2>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    Do
                    </td>
                    <td>
                    I
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Do
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Does
                    </td>
                    <td>
                    he
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Does
                    </td>
                    <td>
                    she
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Does
                    </td>
                    <td>
                    it
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Do
                    </td>
                    <td>
                    We
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Do
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Do
                    </td>
                    <td>
                    they
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    i 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    you 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    he 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    she 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    it 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    we 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    you 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Did
                    </td>
                    <td>
                    they 
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Simple</h3>
                <table>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    i
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    he
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    she
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    it
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    we
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    they
                    </td>
                    <td>
                    study
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                <h3>Present Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    Have
                    </td>
                    <td>
                    i
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Have
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Has
                    </td>
                    <td>
                    he
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Has
                    </td>
                    <td>
                    she
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Has
                    </td>
                    <td>
                    it
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Have
                    </td>
                    <td>
                    we
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Have
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Have
                    </td>
                    <td>
                    They
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Past Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    i
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    he
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    she
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    it
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    we
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Had
                    </td>
                    <td>
                    they
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Future Perfect</h3>
                <table>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    i
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    he
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    she
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    it
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    we
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    you
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                <tr>
                    <td class="subject">
                    Will
                    </td>
                    <td>
                    they
                    </td>
                    <td>
                    have
                    </td>
                    <td>
                    studied
                    </td>
                    <td>
                    ?
                    </td>
                </tr>
                </table>
            </div>
            </div>
         </div>
    </section>




<?php
    
            include './layout/login.php';
            include './layout/footer.php';

        }else{
            include './layout/verb_not_found.php';
        }

    }
    else{
        include './layout/notfound.php';
    }

?>