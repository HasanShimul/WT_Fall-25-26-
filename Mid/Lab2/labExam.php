<!DOCTYPE html>
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
            <form onsubmit="return handleSubmit()">
                <table>
                    <tr>
                        <td>
                            <label>Full Name:</label>
                        </td>
                       
                    </tr>
                    <tr>
                    <td>
                            <input type="text" placeholder="Shimul" id="fullname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Email:</label>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="email" placeholder="abc@gmail.com" id="email"></td>
                    </tr>
                    <tr><td><label for="">Password:</label></td></tr>
                    <tr><td><input type="password" placeholder="*******" id="password"></td></tr>
                    <tr><td><label for="">Confirm Password:</label></td></tr>
                    <tr><td><input type="password"  placeholder="******" id="confirmpassword"></td></tr>
                </table>
                <button type="submit">Register</button>
            </form>
            <div id="status"></div>
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
        <script>
            function handleSubmit(){
                let fullname = document.getElementById("fullname").value.trim();
                let email = document.getElementById("email").value.trim();
                let  password = document.getElementById("password").value;
                let confirmpassword = document.getElementById("confirmpassword").value;
                let status = document.getElementById("status");


                if(fullname === "" || email === "" || password === "" || confirmpassword === ""){
                    aleert("All fields are requird");
                    return false;
                }
                if(!email.includes("@")){
                    alert("email must contain @");
                }
                if(password != confirmpassword){
                    alert ("Password should match");
                    return false;
                }
            }
        </script>
    </html>