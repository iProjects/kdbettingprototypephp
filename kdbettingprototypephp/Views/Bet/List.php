<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Bets | Maasai Integrated Development Initiatives</title>
        <link href="../../Images/Dollar.ico" rel="shortcut icon" type="image/x-icon" /> 
        <link rel="stylesheet" href="../../Content/jquery-ui-1.8.11.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/jquery.dataTables.css"
              type="text/css" media="all" />
        <link rel="stylesheet" href="../../Content/Site.css" type="text/css"
              media="all" />
        <script src="../../Scripts/jquery-2.0.3.js" type="text/javascript"></script>
        <script src="../../Scripts/jquery-migrate-1.2.1.js"></script>
        <script src="../../Scripts/jquery-ui-1.8.11.js"></script>
        <script src="../../Scripts/MainMenu.js"></script> 
        <script src="../../Scripts/loginutil.js"></script>
        <script src="../../Scripts/Utils.js"></script> 
        <script src="../../Scripts/jquery.dataTables.min.js"></script>


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
                    <h2 class="page-title">Bets[ 
                        <?php
                        include ("../../DAL/MySqlConnection.php");
                        $sql_select = "SELECT * FROM kdbets";
                        $stmt = $conn->query($sql_select);
                        $bets = $stmt->fetchAll();
                        echo count($bets);
                        $stmt->closeCursor();
                        ?> ]</h2>
                </hgroup>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div id="listBetsResult" style="clear: both">

                    <?php
                    try {

                        $sql_select = "SELECT * FROM kdbets";
                        $stmt = $conn->query($sql_select);
                        $bets = $stmt->fetchAll();

                        echo "<table id='listBetsTable'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Description</th>";
                        echo "<th>Game Id</th>";
                        echo "<th>User Id</th>";
                        echo "<th>Single Bet</th>";
                        echo "<th>Multiple Bet</th>";
                        echo "<th>IsValid</th>";
                        echo "<th>Closed</th>";
                        echo "<th>Status</th>";
                        echo "<th>Date Created</th>";
                        echo "<th>Expiry Date</th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                        if (count($bets) > 0) {

                            foreach ($bets as $bet) {
                                echo "<tr>";
                                echo "<td>" . $bet['id'] . "</td>";
                                echo "<td>" . $bet['description'] . "</td>";
                                echo "<td>" . $bet['gameid'] . "</td>";
                                echo "<td>" . $bet['userid'] . "</td>";
                                echo "<td>" . $bet['singlebet'] . "</td>";
                                echo "<td>" . $bet['multiplebet'] . "</td>";
                                echo "<td>" . $bet['betvalidity'] . "</td>";
                                echo "<td>" . $bet['betclosed'] . "</td>";
                                echo "<td>" . $bet['status'] . "</td>";
                                echo "<td>" . $bet['datecreated'] . "</td>";
                                echo "<td>" . $bet['expirydate'] . "</td>";
                                echo '<td><a href="#" onclick="Edit(' . $bet['id'] . ')">Edit</a>';
                                echo '<td><a href="#" onclick="Detail(' . $bet['id'] . ')">Detail</a>';
                                echo '<td><a href="#" onclick="Delete(' . $bet['id'] . ')">Delete</a>';
                                echo "</tr>";
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";

                        $stmt->closeCursor();

                        CloseConnection();
                    } catch (Exception $e) {
                        $msg .= $e->getMessage();
                        if ($e->getTraceAsString() != NULL) {
                            $msg .= "<br/>" . $e->getTraceAsString();
                        }
                        echo($msg);
                        return $msg;
                    }
                    ?>

                </div>

                <form action="../../DAL/DeleteBet.php" method="POST" id="form-delete-dialog">
                    <div id="div-delete-dialog">  
                    </div>
                </form>

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
                        .push('<li><div class="floatleft"><div><a href="../../Views/Bet/Create.php" style="cursor: pointer;" >Create</a></div></div></li>');
                SubMenu.push('</ul></div>');

                $("#SubMenu").html(SubMenu.join(" "));
            }

            $(document).ready(function () {
                CreateSubMenu();

                $('#listBetsTable').DataTable(
                        {
                            "aLengthMenu": [[5, 10, 20, 50, 100, -1],
                                [5, 10, 20, 50, 100, "All"]],
                            "iDisplayLength": 5
                        });

            });

            function Delete(id) {
                // Define the Dialog and its properties.
                $("#div-delete-dialog").dialog({
                    autoOpen: false,
                    modal: true,
                    title: "Confirm Delete",
                    resizable: true,
                    draggable: true,
                    closeOnEscape: true,
                    buttons: {
                        "Yes": function () {
                            $("#apiResults").html('Processing...');
                            $('#form-delete-dialog').submit();
                            $(this).dialog('close');
                        },
                        "No": function () {
                            $(this).dialog('close');
                        }
                    }
                });

                $("#div-delete-dialog").html('<input type="hidden" name="txtid" value="' + id + '" />' +
                        "Are you sure you want to delete Bet [ " + id + " ]");
                $("#div-delete-dialog").parent().appendTo($("#form-delete-dialog"));
                $("#div-delete-dialog").dialog("open");
            }

        </script>



    </body>


</html>
