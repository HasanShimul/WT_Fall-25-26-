<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" >

        <style>
            *{
                margin: 0rem;
                padding: 0rem;
            }
         .registration-panel{
            background-color: rgb(100, 0, 100);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
         }
        .input-panel{

            width: 100%;
            margin: 0.5rem;
            border: 0.15rem solid blue;
            padding: 0.5rem;
            border-radius: 10px;
            font-size: 1rem;
             
        }
        .input-panel input{
            padding: 0.2rem;
            border-radius: 6px;
        }
        #day-night{
            position: absolute;
            right: 0px;
        }
        </style>
    </head>
    <body>
        <button id="day-night">Day/Night</button>
       <div class="registration-panel">
       <h1>Doctor Registratioin Panel</h1>
        <div>
            <div>
                <form action="" method="POST">
                    <div class="input-panel">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="input-panel">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="input-panel">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone">
                    </div>

                    <button type="submit">Registration</button>
                </form>
            </div>
        </div>
       </div>
    </body>
</html>