<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Create Asset | Maasai Integrated Development Initiatives</title>
        <link href="../../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="../../Content/Site.css" type="text/css"  rel="stylesheet" />
        <script src="../../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../../Scripts/MainMenu.js"></script> 
        <script src="../../Scripts/loginutil.js"></script>
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
                    <text> Welcome To MIDI, <a id="lnkloggedinuser"
                                               style="cursor: pointer;" href="#" onclick="ManageProfile()"
                                               title="Manage Profile"></a> <a id="lnklogoff"
                                               style="cursor: pointer;" href="#" onclick="LogOff()"
                                               title="Log Off">Log off</a> </text>
                </section>
            </div>

        </header>


        <div id="body">

            <section class="content-wrapper main-content clear-fix">

                <div id="error-display-div" class="displaynone"></div>

                <hgroup class="title">
                    <h2 class="page-title">Create Asset</h2>
                </hgroup>

                <div style="float: left; clear: both">
                    <input id="btnCreate" type="submit" value="Loading please wait..." form="form-createasset" 
                           style="cursor: wait; background-color: grey; color: red;" disabled />
                    <input type="button" value="Back"
                           onclick="window.history.go(-1);
                                   return false;" />
                </div>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div style="float: left; clear: both;">

                    <form id="form-createasset"  action="../../DAL/CreateAsset.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Create Asset</legend>

                            <article class="col1">
                                <div class="pad">

                                    <div class="editor-field">
                                        <label for="txtassetname">Name*</label>
                                    </div>
                                    <div class="editor-field">
                                        <input id="txtassetname"  name="txtassetname" placeholder="Name" type="text" class="text ui-widget-content ui-corner-all" autofocus autocomplete/>            
                                    </div>

                                    <div class="editor-label">
                                        <label for="txtassettype">Asset Type*</label>  
                                    </div>
                                    <div class="editor-field">
                                        <input id="txtassettype" name="txtassettype" placeholder="Asset Type" type="text" class="text ui-widget-content ui-corner-all" autocomplete />            
                                    </div>

                                    <div class="editor-label">
                                        <label for="dtpdateacquired">Date Acquired*</label>    
                                    </div>
                                    <div class="editor-field">
                                        <input id="dtpdateacquired" name="dtpdateacquired" placeholder="Date Acquired"  type="date" class="text ui-widget-content ui-corner-all" autocomplete />            
                                    </div>

                                    <div class="editor-label">
                                        <label for="txtacquiredvalue">Acquired Value*</label> 
                                    </div>
                                    <div class="editor-field">
                                        <input id="txtacquiredvalue" name="txtacquiredvalue" placeholder="Acquired Value" type="number" min="0" class="text ui-widget-content ui-corner-all" autocomplete />            
                                    </div>

                                    <div class="editor-label">
                                        <label for="txtcurrentvalue">Current Value*</label>  
                                    </div>
                                    <div class="editor-field">
                                        <input id="txtcurrentvalue" name="txtcurrentvalue" placeholder="Current Value" type="number" min="0" class="text ui-widget-content ui-corner-all" autocomplete />            
                                    </div>

                                </div>
                            </article>

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
                $("#btnCreate").removeAttr('style');
                $("#btnCreate").removeAttr('disabled');
                $("#btnCreate").val('Create');
            });

            $("#btnCreate").on("click", function(e) {

                e.preventDefault();

                var errormsg = '';
                $('#errorList').remove();
                $('#error-display-div').empty();
                errormsg += '<ul id="errorList">';
                var error_free = true;

                // Validate the entries
                var _assetname = document.getElementById('txtassetname').value;
                var _assettype = document.getElementById('txtassettype').value;
                var _dateacquired = document.getElementById('dtpdateacquired').value;
                var _acquiredvalue = document.getElementById('txtacquiredvalue').value;
                var _currentvalue = document.getElementById('txtcurrentvalue').value;

                if (_assetname.length === 0) {
                    errormsg += '<li>' + " Name cannot be null " + '</li>';
                    error_free = false;
                }
                if (_assettype.length === 0) {
                    errormsg += '<li>' + " Type cannot be null " + '</li>';
                    error_free = false;
                }
                if (_dateacquired.length === 0) {
                    errormsg += '<li>' + " Date Acquired cannot be null " + '</li>';
                    error_free = false;
                }
                if (_acquiredvalue.length === 0) {
                    errormsg += '<li>' + " Acquired Value cannot be null " + '</li>';
                    error_free = false;
                }
                if (_currentvalue.length === 0) {
                    errormsg += '<li>' + " Current Value cannot be null " + '</li>';
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
                    $("#form-createasset").submit();
                }
            });

        </script>



    </body>


</html>

