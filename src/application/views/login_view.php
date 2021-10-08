    <!DOCTYPE html>  
    <html>  
    <head>  
        <title>Login Page</title>  
    </head>  
    <body>  
       
        <form method="post" action="<?php echo base_url('login')?>">  
            <table cellpadding="2" cellspacing="2">  
                <tr>  
                    <td><th>Username:</th></td>  
                    <td><input type="text" name="username"></td>  
                </tr>  
                <tr>  
                    <td><th>Password:</th></td>  
                    <td><input type="password" name="password"></td>  
                </tr>  
      
                <tr>  
                    <td> </td>  
                    <td><input type="submit" value="Login"></td>  
                </tr>  
            </table>  
        </form>  
    </body>  
    </html>  
