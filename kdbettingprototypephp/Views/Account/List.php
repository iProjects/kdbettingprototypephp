<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Accounts | Maasai Integrated Development Initiatives</title>
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

                <hgroup class="title">
                    <h2 class="page-title">Accounts</h2>
                </hgroup>

                <div style="color: red;">
                    <p>Fields marked with * are mandatory and must be filled.</p>
                </div>

                <div id="error-display-div" class="displaynone"></div>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div id="searchaccountsheader" style="float: left; clear: both">

                    <article class="col1">
                        <div class="pad">

                            <label for="rdoaccountID">Search By Account ID</label> <input
                                id="rdoaccountID" name="idType" type="radio"></input>

                            <div id="div-accountID" class="displaynone">
                                <label for="txtaccountID">Account ID*</label> <input
                                    id="txtaccountID" placeholder="Account ID" type="number" min="0"
                                    style="width: 90%;"></input>
                            </div>

                        </div>
                    </article>

                    <article class="col2">
                        <div class="pad">

                            <label for="rdomemberID">Search By Member ID</label> <input
                                id="rdomemberID" name="idType" type="radio"></input>

                            <div id="div-memberID" class="displaynone">
                                <label for="txtmemberID">Member ID*</label> <input
                                    id="txtmemberID" placeholder="Member ID" type="number" min="0"
                                    style="width: 90%;"></input>
                            </div>

                        </div>
                    </article>

                    <article class="col3">
                        <div class="pad">

                            <div>
                                <label for="btnLoad">&nbsp;</label> <input id="btnLoad"
                                                                           type="submit" value="Loading please wait..."
                                                                           style="cursor: wait; background-color: grey; color: red; width: 100%;"
                                                                           disabled />
                            </div>

                        </div>
                    </article>

                </div>

                <div id="listAccountsResult" style="float: left; clear: both"></div>


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


            function CreateSubMenu() {
                var SubMenu = [];
                SubMenu.push('<div class="nav"><ul class="menu">');
                SubMenu
                        .push('<li><div class="floatleft"><div><a href="../../Views/Account/Create.php" style="cursor: pointer;" >Create</a></div></div></li>');
                SubMenu
                        .push('<li><div class="floatleft"><div><a href="../../Views/Account/Statement.php" style="cursor: pointer;" >Statement</a></div></div></li>');
                SubMenu.push('</ul></div>');

                $("#SubMenu").html(SubMenu.join(" "));
            }

            $(document).ready(function() {
                CreateSubMenu();
            });


        </script>



    </body>


</html>
