<div class="main_box">
<?php
$content = $user_connect->get_inscription();
echo $content;
?>
</div>

<?php
if($_GET['err'] == 1)
{
    echo "<br><br><div class='main_box'><center>
    <label>
        Please enter a login!
    </label></center></div>
    ";
}
else if($_GET['err'] == 2)
{
    echo "<br><br><div class='main_box'><center>
    <label>
        Please enter a password!
    </label></center></div>
    ";
}
else if($_GET['err'] == 3)
{
    echo "<br><br><div class='main_box'><center>
    <label>
        Please confirm your password!
    </label></center></div>
    ";
}
else if($_GET['err'] == 4)
{
    echo "<br><br><div class='main_box'><center>
    <label>
        Your password and confirm password fields do not match. 
    </label></center></div>
    ";
}
?>
