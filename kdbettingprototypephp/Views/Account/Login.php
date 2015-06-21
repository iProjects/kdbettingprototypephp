<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Login | Maasai Integrated Development Initiatives</title>
        <link href="../../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../../Content/Site.css" type="text/css"  rel="stylesheet" />
        <script src="../../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../../Scripts/MainMenu.js"></script>  
        <script src="../../Scripts/Utils.js"></script> 


    </head>


    <body>

        <header>

            <div id="div-site-title">

                <div class="site-title">
                    <span title="Maasai Integrated Development Initiatives(MIDI)">Maasai Integrated Development Initiatives(MIDI)</span>
                </div>

            </div>

            <div id="MainMenu"></div>
            <div id="SubMenu"></div>


            <div id="div-login">
                <section id="login">
                    <text> Welcome To MIDI</text>
                </section>
            </div>

        </header>


        <div id="body">

            <section class="content-wrapper main-content clear-fix">

                <div id="error-display-div" class="displaynone"></div>

                <hgroup class="title">
                    <h2 class="page-title">Login</h2>
                </hgroup>

                <div style="float: left; clear: both">
                    <input id="btnLogin" type="submit" value="Loading please wait..."
                           style="cursor: wait; background-color: grey; color: red;" disabled />
                    Not Registered Click<a  href="../../Views/Account/Register.php" class="button" > Here</a> To Register
                </div>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>


                <div style="float: left; clear: both;">

                    <form id="form-login"  action="../../DAL/Login.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Login</legend>

                            <div class="editor-field">
                                <label for="txtemail">Email*</label>
                            </div>
                            <div class="editor-field">
                                <input id="txtemail"  name="txtemail" placeholder="Email" type="text" class="text ui-widget-content ui-corner-all" autofocus autocomplete/>            
                            </div>

                            <div class="editor-label">
                                <label for="txtpwd">Password*</label>  
                            </div>
                            <div class="editor-field">
                                <input id="txtpwd" name="txtpwd" placeholder="Password" type="password" class="text ui-widget-content ui-corner-all" autocomplete />            
                            </div>

                        </fieldset>

                    </form>  
 
                </div>

            </section>

        </div>


        <footer>

            <hr />

            <div id="div-runningtime">
                <span id="runningtime"></span> 
                <span id="runningdaynighttime"></span> 
            </div>

            <div id="div-copyright">
                <span id="copyright">Copyright &copy;</span> <span id="footerdate"></span>
                <span id="companyname"> KDBetting Limited.</span> <span
                    id="rightsreserved">All Rights Reserved.</span>
            </div> 

        </footer>

        <script type="text/javascript">

            $(document).ready(function() {
                $("#btnLogin").removeAttr('style');
                $("#btnLogin").removeAttr('disabled');
                $("#btnLogin").val('Login');
            });

            $("#btnLogin").on("click", function(e) {

                e.preventDefault();

                var errormsg = '';
                $('#errorList').remove();
                $('#error-display-div').empty();
                errormsg += '<ul id="errorList">';
                var error_free = true;

                // Validate the entries
                var _email = document.getElementById('txtemail').value;
                var _pwd = document.getElementById('txtpwd').value;

                if (_email.length === 0) {
                    errormsg += '<li>' + " Email cannot be null " + '</li>';
                    error_free = false;
                }
                if (_pwd.length === 0) {
                    errormsg += '<li>' + " Password cannot be null " + '</li>';
                    error_free = false;
                }

                if (!error_free) {
                    errormsg += "</ul>";
                    $("#error-display-div").html(errormsg);
                    $("#error-display-div").removeClass('displaynone');
                    $("#error-display-div").addClass('displayblock');
                    $("#error-display-div").show();
                    return;
                } else {
                    $('#errorList').remove();
                    $('#error-display-div').empty();
                    $("#form-login").submit();
                }
            });

        </script>



    </body>


</html>

