function change_data(id) {

    var value = "";
    switch (id) {
        case 1:
            value = document.getElementById('1').textContent;
            break;
        case 2:
            value = document.getElementById('2').textContent;
            break;
        case 3:
            value = document.getElementById('3').textContent;
            break;
        case 4:
            value = document.getElementById('4').textContent;
            break;
        case 5:
            value = document.getElementById('5').textContent;
            break;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('response').innerHTML = this.responseText
            return;
        }
    };
    xmlhttp.open("POST", "email-update.php?id=" + id + "&value=" + value, true);
    xmlhttp.send();
}

function dailyhire(id) {
    var d1 = document.getElementById('d1').value;
    var d1_5 = document.getElementById('d1-5').value;
    var d5_20 = document.getElementById('d5-20').value;
    var d20 = document.getElementById('>20').value;
    var m = document.getElementById('m').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (id == 'd')
            document.getElementById('note').style.display = "inline";
        else
            document.getElementById('note1').style.display = "inline";
        if (this.readyState == 4 && this.status == 200) {
            if (id == 'd')
                document.getElementById('note').style.display = "none";
            else
                document.getElementById('note1').style.display = "none";
            alert(this.responseText);
            return;
        }
    };
    xmlhttp.open("POST", "commision-update.php?id=" + id + "&d1=" + d1 + "&d1_5=" + d1_5 + "&d5_20=" + d5_20 + "&d20=" + d20 + "&m=" + m, true);
    xmlhttp.send();
}

function deleteWorkerReview(id) {
    swal({
        title: "Do you really want to permanantly delete selected review ? ",
        buttons: {
            cancel: true,
            confirm: true,
        }
    }).then(function(isConfirm) {
        if (isConfirm) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    swal(
                        'Deletion Success !',
                        'Review deleted successfully !',
                        'success'
                    );
                    document.location.reload(true)
                    return;
                }
            };
            xmlhttp.open("POST", "wdelete.php?id=" + id, true);
            xmlhttp.send();
        } else {
            swal(
                'Deletion cancel !',
                'Review is not deleted.',
                'warning'
            );
        }
    })
}

function ssreviewdelete(id) {
    swal({
        title: "Do you really want to permanantly delete selected review ? ",
        buttons: {
            cancel: true,
            confirm: true,
        }
    }).then(function(isConfirm) {
        if (isConfirm) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    swal(
                        'Deletion Success !',
                        'Review deleted successfully !',
                        'success'
                    );
                    document.location.reload(true)
                    return;
                }
            };
            xmlhttp.open("POST", "ssdelete.php?id=" + id, true);
            xmlhttp.send();
        } else {
            swal(
                'Deletion cancel !',
                'Review is not deleted.',
                'warning'
            );
        }
    })
}