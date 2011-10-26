
        <style>
        legend{
            text-align: center;
        }
        fieldset{
            border-radius:15px;
            font: 16px sans-serif;
            font-weight: bold;
            color:red;
            padding:20px;
            border: 5px solid #BBB;
        }
        .wrap{
            width:50%;
            margin: 0px auto;
        }
        td{
            padding: 10px 0;

        }
        input, button{
            font:14px sans-serif;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            padding:5px;
            margin-left:10px;
        }
        input:hover{
            background-color: gainsboro;
        }
        .inputbtn:hover{
            background-color: aqua;
        }
        #buttons{
            margin-top:15px;
            text-align:center;
        }
        .table{
            margin:0px auto;
        }
        span{
            display:block;
            text-align: center;
        }
        .label{
            font-weight:bold;
            color:#666666;
        }
        </style>

        <script>
            $(document).ready(function(){
                $("#loginbtn").click(function(event){
                   if (!$("#username").val()){
                       event.preventDefault();
                       $("#message")[0].innerHTML = "Please enter a username"
                   } 
                   else if(!$("#password").val()){
                       event.preventDefault();
                       $("#message")[0].innerHTML = "Please enter a password"
                   } 
                });
                $("#recoverPasswrod").click(function(event){
                    event.preventDefault(); 
                });
            });
        </script>
<div id="content">
        <div class="wrap">
        <fieldset>
            <Legend>Invalid username and/or password, Try again</legend>
            <form id="loginform" action="welcome.php" method="post">
                <span id="message"></span>
                    <table id="logintable" class="table">
                    <tr>
                        <td class="label">
                            Username
                        </td>
                        <td>
                            <input type="text" id="username" name="username"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            Password
                        </td>
                        <td>
                            <input type="password" id="password" name="password"/>
                        </td>
                    </tr>
                </table>
                <div id="buttons">
                    <input type="submit" class="inputbtn" id="loginbtn" name="loginbtn" value="Login" />
                    <button id="recoverPasswrod" class="inputbtn" name="recoverPasswrod" >Recover Password</button>
                </div>
            </form>
        </fieldset>
        </div>
</div>
