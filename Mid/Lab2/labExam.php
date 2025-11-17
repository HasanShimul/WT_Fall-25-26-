<DOCTYPE html>
    <html>
        <head>
            <title>Lab exam</title>
            <style>
                #registration{
                    background-color: lightgray;
                }
            </style>
        </head>
        <body>
           <center id="registration">
            <h1>Student Registration</h1>
            <form action="">
                <table>
                    <tr>
                        <td>
                            <label>Full Name:</label>
                        </td>
                       
                    </tr>
                    <tr>
                    <td>
                            <input type="text" placeholder="Shimul">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Email:</label>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="email" placeholder="abc@gmail.com"></td>
                    </tr>
                    <tr><td><label for="">Password:</label></td></tr>
                    <tr><td><input type="password" placeholder="*******"></td></tr>
                    <tr><td><label for="">Confirm Password:</label></td></tr>
                    <tr><td><input type="password"  placeholder="******"></td></tr>
                </table>
                <button type="submit">Register</button>
            </form>
            <div id="registration-message"></div>
           </center> 
           <center>
            <p>Course Registration</p>
            <form action="">
                <table>
                    <tr><td><label for="">Course Name : </label></td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td><button>Add course</button></td></tr>
                    <tr><td><select name="" id="">
                        <option value="">Web Tech</option>
                        <option value="">Java</option>
                        <option value="">PHP</option>
                    </select></td></tr>
                </table>
            </form>
           </center>
        </body>
    </html>