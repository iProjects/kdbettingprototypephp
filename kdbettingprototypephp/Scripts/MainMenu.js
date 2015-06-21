function CreateMainMenu() {
    var MainMenu = [];
    MainMenu.push('<div class="nav"><ul class="menu">');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Home/Index.php" style="cursor: pointer;" >Home</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Account/List.php" style="cursor: pointer;" >Accounts</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/AccountType/List.php" style="cursor: pointer;" >Account Types</a></div></div></li>');
     MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/TransactionType/List.php" style="cursor: pointer;" >Transaction Types</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Coa/List.php" style="cursor: pointer;" >Chart Of Accounts</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Customer/List.php" style="cursor: pointer;" >Customers</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Asset/List.php" style="cursor: pointer;" >Assets</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Tender/List.php" style="cursor: pointer;" >Tenders</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/ProjectType/List.php" style="cursor: pointer;" >Project Types</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Project/List.php" style="cursor: pointer;" >Projects</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/WorkSchedule/List.php" style="cursor: pointer;" >Work Schedules</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Employee/List.php" style="cursor: pointer;" >Employees</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Menu/List.php" style="cursor: pointer;" >Menus</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Right/List.php" style="cursor: pointer;" >Rights</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/Role/List.php" style="cursor: pointer;" >Roles</a></div></div></li>');
    MainMenu
            .push('<li><div class="floatleft"><div><a href="../../Views/User/List.php" style="cursor: pointer;" >Users</a></div></div></li>');

    MainMenu.push('</ul></div>');

    $("#MainMenu").html(MainMenu.join(" "));
}

$(document).ready(function () {

    CreateMainMenu();

//    var loggedinuser = JSON.parse(sessionStorage.getItem('loggedinuser'));
//    if (loggedinuser === null || loggedinuser === undefined) {
//
//    } else {
//        CreateMainMenu();
//    }
});