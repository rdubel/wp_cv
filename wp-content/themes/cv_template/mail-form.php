<?php /* Template Name: CV2 */ ?>
<?php get_header() ?>

<form action="#" method="post">
    <label for="email">Enter your Email please</label>
    <input type="email" name="email" placeholder="e@mail.com">
    <input type="submit" name="button">
</form>

<?php
 if (!empty($_POST)){
    if($_POST['email'] != '') {
        $query = "SELECT email from newsletter WHERE email='".$_POST['email']."'";
        $usr = $wpdb->get_var($query);
        $today = date("Y-m-d H:i:s");
        if ($usr == null) {
            $wpdb->insert('newsletter', array(
                'email' => $_POST['email'],
                'date' => $today
            ));
            $confirm = "Well done, we'll hit you back later !";
        } else {
            $err = "Fuck this.";
        }
    }
    else {
        $err = "Invalid Email address";
    }
} ?>

<?php get_footer() ?>
