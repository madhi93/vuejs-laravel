function check() {
    var pwd1 = document.getElementById('pwd1').value;
    var pwd2 = document.getElementById('pwd2').value;
    if (pwd1 != pwd2) {
        document.getElementById('pwd2').style.border = "2px solid red";
        document.getElementById('reg').disabled = true;
    } else {
        document.getElementById('pwd2').style.border = "2px solid green";
        document.getElementById('reg').disabled = false;
    }
}

function create() {

    var email = document.getElementById('email').value;
    var pwd = document.getElementById('pwd2').value;

    firebase.auth().createUserWithEmailAndPassword(email, pwd).then(
        function() {
            //this function executes when account is successfully created
            alert('User created successfully ! login to continue.')
            window.location = 'login.php';

        }).catch(function(error) {
        //this function handles errors
        var errorMessage = error.message;
        alert(errorMessage);
    });
}

function logincheck() {
    var db = firebase.firestore();
    var email = document.getElementById('email').value;
    var pwd = document.getElementById('Password').value;
    var role = document.getElementById('rr').value;
    var i = 0;
    db.collection("Admins").doc(role).collection("admin").where("email", "==", email)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                i++;
                console.log("inside loop");
            });
            if (i == 1) {
                firebase.auth().signInWithEmailAndPassword(email, pwd).then(function() {
                    //this function works when login successfull
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert(this.responseText);
                            window.location = 'index.php';
                        }
                    };
                    xmlhttp.open("POST", "session-maker.php?id=" + email, true);
                    xmlhttp.send();
                }).catch(function(error) {
                    //this will handle error
                    var errorMessage = error.message;
                    alert(errorMessage);
                });
            } else
                alert("You are not associated with selected role")
        })
        .catch(function(error) {
            alert(error);
        });
}

function forgot() {
    swal({
        content: {
            element: "input",
            attributes: {
                title: "Enter the Email ",
                placeholder: "Enter the Email ",
                type: "email",
            },
        },
    }).then((result) => {
        firebase.auth().sendPasswordResetEmail(result).then(function() {
            swal({
                title: "Reset Password success !",
                text: "Password reset mail sent successfully!",
                icon: "success",
            });
        }).catch(function(error) {
            swal({
                title: "Reset Password Failed !" + error,
                text: "Failed to send password reset mail !",
                icon: "warning",
            });
        });
    });
}

function forgot1() {
    var email = document.getElementById('email2').value;
    firebase.auth().sendPasswordResetEmail(email).then(function() {
        swal({
            title: "Change Password success !",
            text: "Password change mail sent successfully!",
            icon: "success",
        });
    }).catch(function(error) {
        swal({
            title: "Change Password Failed !" + error,
            text: "Failed to send password change mail !",
            icon: "warning",
        });
    });
}

function create_admin() {
    var email = document.getElementById('aemail').value;
    var pwd = document.getElementById('apwd').value;
    alert(pwd);
    alert(email);
    firebase.auth().createUserWithEmailAndPassword(email, pwd).then(
        function() {
            //this function executes when account is successfully created
            alert('New Admin Added ! plase wait, sending login details to mail');

        }).catch(function(error) {
        //this function handles errors
        var errorMessage = error.message;
        alert(errorMessage);
    });
}