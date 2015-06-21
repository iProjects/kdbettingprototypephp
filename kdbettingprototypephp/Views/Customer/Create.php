<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Create Customer | Maasai Integrated Development Initiatives</title>
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
				<h2 class="page-title">Create Customer</h2>
			</hgroup>

			<div style="float: left; clear: both">
				<input id="btnCreate" type="submit" value="Loading please wait..."
					style="cursor: wait; background-color: grey; color: red;" disabled />
				<input type="button" value="Back"
					onclick="window.history.go(-1); return false;" />
			</div>

			<div id="apiResults" style="float: left; clear: both"></div>
			<div id="successmessage" style="float: left; clear: both"></div>
			<div id="errormessage" style="float: left; clear: both"></div>

			<div style="float: left; clear: both">

				<form action="javascript:void(0);">

					<fieldset>
						<legend>Create Customer</legend>

						<div id="column-div" class="clearboth">

							<article class="col1">
								<div class="pad">

									<div>
										<label for="txtname">Name</label> <input id="txtname"
											placeholder="Name" type="text" autocomplete autofocus></input>
									</div>

									<div>
										<label for="txtemail">Email</label> <input id="txtemail"
											placeholder="Email" type="text" autocomplete></input>
									</div>

									<div>
										<label for="txttelephone">Telephone</label> <input
											id="txttelephone" placeholder="Telephone" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="txtaddress">Address</label> <input id="txtaddress"
											placeholder="Address" type="text" autocomplete></input>
									</div>

									<div>
										<label for="txtcustomerNo">Customer No</label> <input
											id="txtcustomerNo" placeholder="Customer No" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="cboorganization">Organization</label><select
											id="cboorganization" style="width: 95%;">
											<option value="" selected="selected">(Select
												Organization)</option>
										</select>
									</div>

								</div>
							</article>

							<article class="col2">
								<div class="pad">

									<div>
										<label for="txtbillToName">Bill To Name</label> <input
											id="txtbillToName" placeholder="Bill To Name" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="txtbillToEmail">Bill To Email</label> <input
											id="txtbillToEmail" placeholder="Bill To Email" type="text"
											autocomplete></input>
									</div>

									<div>
										<label for="txtbillToTelephone">Bill To Telephone</label> <input
											id="txtbillToTelephone" placeholder="Bill To Telephone"
											type="text" autocomplete></input>
									</div>

									<div>
										<label for="txtbillToAddress">Bill To Address</label> <input
											id="txtbillToAddress" placeholder="Bill To Address"
											type="text" autocomplete></input>
									</div>

									<div>
										<label for="txtbranch">Branch</label> <input id="txtbranch"
											placeholder="Branch" type="text" autocomplete></input>
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

        </script>



    </body>


</html>
