//Admin Page
$(document).ready( function() {
    $("#crAcc").on("click", function() {
        $("#contents").load("CreateAccount.php");
    });
});

$(document).ready( function() {
    $("#crSchYr").on("click", function() {
        $("#contents").load("CreateSchoolYear.php");
    });
});

$(document).ready( function() {
    $("#schYrsList").on("click", function() {
        $("#contents").load("ListOfSchoolYears.php");
    });
});

$(document).ready( function() {
    $("#accList").on("click", function() {
        $("#contents").load("ListOfAccounts.php");
    });
});

$(document).ready( function() {
    $("#newEnroll").on("click", function() {
        $("#contents").load("../Enrollment/EnrollmentNew.php");
    });
});


//Registrar Page
$(document).ready( function() {
    $("#studList").on("click", function() {
        $("#contents").load("ListOfStudents.php");
    });
});

$(document).ready( function() {
    $("#newEnroll").on("click", function() {
        $("#contents").load("../Enrollment/EnrollmentNew.php");
    });
});
