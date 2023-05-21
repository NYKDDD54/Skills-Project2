<?php 
include('header.php');
?>

<main>
    <form id="form" method="post" action="problem.php">
        <select name="title">
            <option value="Mr." selected>Mr.</option>    
            <option value="Mrs.">Mrs.</option>
            <option value="Miss">Miss</option>
            <option value="Master">Master</option>
            <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option>
            <option value="other">other</option>
        </select>

        <input type="text" name="firstName" placeholder="First Name" value ="" required style="width: 200px;">
        <input type="text" name="lastName" placeholder="Last Name" value="" required style="width:200px;">

        <select name="role" required>
            <option value="admin" selected>Admin</option>    
            <option value="manager">Manager</option>
            <option value="ceo">CEO</option>
        </select>
                    
        <button type="submit" name="login">Login</button>
    </form>
</main>

<?php include('footer.php'); 
?>