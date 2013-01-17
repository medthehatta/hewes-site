<?php
function adminer_object() {
    
    class AdminerSoftware extends Adminer {
        
        function name() {
            // custom name in title and heading
            return '<a href="http://mancer.in/~med/smarty/">Matt Hewes Teaching</a>';
        }
        
        function database() {
            // database name, will be escaped by Adminer
            return './courses.db';
        }

        function login($login, $password) {
            // authentication
            return ($login=="hewy" && $password=="malkbone");
        }
        
        function loginForm() {
            ?>
            <input type="hidden" name="auth[driver]" value="sqlite">
            <input type="hidden" name="auth[server]" value="localhost">

            <table cellspacing="0">
            <tr><th><?php echo lang('Username'); ?></th>
            <td><input id="username" name="auth[username]" value="<?php echo $_GET['username'];?>"></td>
            <tr><th><?php echo lang('Password'); ?></th>
            <td><input type="password" name="auth[password]"></td>
            </tr>
            </table>
            <?php
              echo "<p><input type='submit' value='" . lang('Login') . "'>\n";
              echo checkbox("permanent", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
        }
    }
    
    return new AdminerSoftware;
}

include "./editor-3.6.2.php";

