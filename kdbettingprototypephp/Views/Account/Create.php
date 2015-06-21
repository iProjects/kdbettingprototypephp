<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Create Account | Maasai Integrated Development Initiatives</title>
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
                    <h2 class="page-title">Create Account</h2>
                </hgroup>

                <div style="float: left; clear: both">
                    <input id="btnCreate" type="submit" value="Loading please wait..." form="form-createaccount" 
                           style="cursor: wait; background-color: grey; color: red;" disabled />
                    <input type="button" value="Back"
                           onclick="window.history.go(-1);
                                   return false;" />
                </div>

                <div id="apiResults" style="float: left; clear: both"></div>
                <div id="successmessage" style="float: left; clear: both"></div>
                <div id="errormessage" style="float: left; clear: both"></div>

                <div style="float: left; clear: both">

                   <form id="form-createaccount"  action="../../DAL/CreateAccount.php" method="post" enctype="multipart/form-data">

                        <fieldset>
                            <legend>Create Account</legend>

                            <div id="column-div" class="clearboth">

                                <article class="col1">
                                    <div class="pad">

                                        <div>
                                            <label for="txtaccountName">Account Name</label> <input
                                                id="txtaccountName" placeholder="Account Name" type="text"
                                                autocomplete autofocus></input>
                                        </div>

                                        <div>
                                            <label for="txtaccountNo">Account No</label> <input
                                                id="txtaccountNo" placeholder="Account No" type="text"
                                                autocomplete></input>
                                        </div>

                                        <div>
                                            <label for="txtinterestRate">Interest Rate</label> <input
                                                id="txtinterestRate" placeholder="Interest Rate"
                                                type="number" min="0"></input>
                                        </div>

                                        <div>
                                            <label for="txtcustomer">Customer</label> <input
                                                id="txtcustomer" placeholder="Customer" type="number" min="0"></input>
                                        </div>

                                        <div>
                                            <label for="cbocoadet">Chart Of Account</label> <select
                                                id="cbocoadet" style="width: 95%;">
                                                <option value="" selected="selected">(Select Chart
                                                    Of Account)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cboaccounttype">Account Type</label> <select
                                                id="cboaccounttype" style="width: 95%;">
                                                <option value="" selected="selected">(Select Account
                                                    Type)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbopassFlag">Pass Flag</label><select
                                                id="cbopassFlag" style="width: 95%;">
                                                <option value="" selected="selected">(Select Pass
                                                    Flag)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbolimitFlag">Limit Flag</label><select
                                                id="cbolimitFlag" style="width: 95%;">
                                                <option value="" selected="selected">(Select Limit
                                                    Flag)</option>
                                            </select>
                                        </div>

                                    </div>
                                </article>

                                <article class="col2">
                                    <div class="pad">

                                        <div>
                                            <label for="txtintPayAccount">Pay Account</label><input
                                                id="txtintPayAccount" placeholder="Pay Account" type="number"
                                                min="0"></input>
                                        </div>

                                        <div>
                                            <label for="cbointerestComputationMethod">Interest
                                                Computation Method</label><select id="cbointerestComputationMethod"
                                                                              style="width: 95%;">
                                                <option value="" selected="selected">(Select
                                                    Interest Computation Method)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbointerestComputationTerm">Interest
                                                Computation Term</label><select id="cbointerestComputationTerm"
                                                                            style="width: 95%;">
                                                <option value="" selected="selected">(Select
                                                    Interest Computation Term)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbointerestAccrualInterval">Interest
                                                Accrual Interval</label><select id="cbointerestAccrualInterval"
                                                                            style="width: 95%;">
                                                <option value="" selected="selected">(Select
                                                    Interest Accrual Interval)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="cbointerestApplicationMethod">Interest
                                                Application Method</label><select id="cbointerestApplicationMethod"
                                                                              style="width: 95%;">
                                                <option value="" selected="selected">(Select
                                                    Interest Application Method)</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="txtaccruedInt">Accrued Interest</label> <input
                                                id="txtaccruedInt" placeholder="Accrued Interest"
                                                type="number" min="0"></input>
                                        </div>

                                        <div>
                                            <label for="txtinterestRateSusp">Interest Rate In
                                                Suspense</label> <input id="txtinterestRateSusp"
                                                                    placeholder="Interest Rate In Suspense" type="number" min="0"></input>
                                        </div>

                                        <div>
                                            <label for="txtaccruedIntInSusp">Accrued Interest In
                                                Suspense</label> <input id="txtaccruedIntInSusp"
                                                                    placeholder="Accrued Interest In Suspense" type="number"
                                                                    min="0"></input>
                                        </div>

                                        <div>
                                            <label for="txtlimitCheckFlag">Limit Check Flag</label> <input
                                                id="txtlimitCheckFlag" placeholder="Limit Check Flag"
                                                type="number" min="0" max="1"></input>
                                        </div>

                                    </div>
                                </article>

                                <article class="col3">
                                    <div class="pad">

                                        <div>
                                            <label for="dtpmaturityDate">Maturity Date</label> <input
                                                id="dtpmaturityDate" placeholder="Maturity Date" type="date"></input>
                                        </div>

                                        <div>
                                            <label for="dtplastIntAccrualDate">Last Interest
                                                Accrual Date</label> <input id="dtplastIntAccrualDate"
                                                                        placeholder="Last Interest Accrual Date" type="date"></input>
                                        </div>

                                        <div>
                                            <label for="dtpnextIntAccrualDate">Next Interest
                                                Accrual Date</label> <input id="dtpnextIntAccrualDate"
                                                                        placeholder="Next Interest Accrual Date" type="date"></input>
                                        </div>

                                        <div>
                                            <label for="dtplastIntAppDate">Last Interest
                                                Application Date</label> <input id="dtplastIntAppDate"
                                                                            placeholder="Last Interest Application Date" type="date"></input>
                                        </div>

                                        <div>
                                            <label for="dtpnextIntAppDate">Next Interest
                                                Application Date</label> <input id="dtpnextIntAppDate"
                                                                            placeholder="Next Interest Application Date" type="date"></input>
                                        </div>

                                        <div>
                                            <label for="txtbranch">Branch</label> <input autocomplete
                                                                                         id="txtbranch" placeholder="Branch" type="text"></input>
                                        </div>

                                        <div>
                                            <label for="chkaccrueInSusp">Accrual In Suspense</label> <input
                                                id="chkaccrueInSusp" placeholder="Limit Check Flag"
                                                type="checkbox"></input>
                                        </div>

                                        <div>
                                            <label for="chkclosed">Closed</label> <input id="chkclosed"
                                                                                         placeholder="Closed" type="checkbox"></input>
                                        </div>

                                    </div>
                                </article>

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

            $(document).ready(function () {
                $("#btnCreate").removeAttr('style');
                $("#btnCreate").removeAttr('disabled');
                $("#btnCreate").val('Create');
            });

            $("#btnCreate").on("click", function (e) {

                e.preventDefault();

                var errormsg = '';
                $('#errorList').remove();
                $('#error-display-div').empty();
                errormsg += '<ul id="errorList">';
                var error_free = true;

                // Validate the entries
                var _accountName = document.getElementById('txtaccountName').value; 
                var _customer = document.getElementById('txtcustomer').value;
                var _coadet = document.getElementById('cbocoadet').value;
                var _accounttype = document.getElementById('cboaccounttype').value; 
                var _limitFlag = document.getElementById('cbolimitFlag').value;
                var _passFlag = document.getElementById('cbopassFlag').value;  

                if (_accountName.length == 0) {
                    errormsg += '<li>' + " Account Name cannot be null " + '</li>';
                    error_free = false;
                }
                if (_customer.length == 0) {
                    errormsg += '<li>' + " Customer ID cannot be null " + '</li>';
                    error_free = false;
                }
                if (_coadet.length == 0 || _coadet == -1) {
                    errormsg += '<li>' + " Select Chart Of Account " + '</li>';
                    error_free = false;
                }
                if (_accounttype.length == 0 || _coadet == -1) {
                    errormsg += '<li>' + " Select Account Type " + '</li>';
                    error_free = false;
                }
                if (_limitFlag.length == 0) {
                    errormsg += '<li>' + " Select Limit Flag " + '</li>';
                    error_free = false;
                }
                if (_passFlag.length == 0) {
                    errormsg += '<li>' + " Select Pass Flag " + '</li>';
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
                    $("#form-createaccount").submit();
                }
            });

        </script>



    </body>


</html>
