<?php
    // core configuration
    include_once "../config/core.php";

    // check if logged in as admin
    include_once "login_checker.php";

    // set page title
    $page_title="Admin Index";

    // include page header HTML
    include 'layout_head.php';

            echo "<div class='col-md-12'>";

                    // get parameter values, and to prevent undefined index notice
                    $action = isset($_GET['action']) ? $_GET['action'] : "";

                    // tell the user he's already logged in
                    if($action=='already_logged_in'){
                            echo "<div class='alert alert-info'>";
                                    echo "<strong>You</strong> are already logged in.";
                            echo "</div>";
                    }

                    else if($action=='logged_in_as_admin'){
                            echo "<div class='alert alert-info'>";
                                    echo "<strong>You</strong> are logged in as admin.";
                            echo "</div>";
                    }
                    // aqui hay que modificarlo para que funcione y te muestre la otra página
                    echo "<div class='alert alert-info'>";
                            echo "Contents of your admin section will be here.";
                            header("Location: {$home_url}php-oop-crud-level-1-with_search/index.php?action=login_success");
                    echo "</div>";

            echo "</div>";

    // include page footer HTML
    include_once 'layout_foot.php';
?>