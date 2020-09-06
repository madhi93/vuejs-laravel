function othersetting(id) {
    var gst = document.getElementById('gstvalue').value;
    var cancelvalue = document.getElementById('cancelvalue').value;
    var nearbyd = document.getElementById('nearbyd').value;
    var nearbym = document.getElementById('nearbym').value;
    var silver = document.getElementById('membersilver').value;
    var gold = document.getElementById('membergold').value;
    var platinum = document.getElementById('memberplatinum').value;
    var time = document.getElementById('timedays').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        switch (id) {
            case 1:
                document.getElementById('GST').style.display = "inline";
                break;
            case 2:
                document.getElementById('cancel').style.display = "inline";
                break;
            case 3:
                document.getElementById('nearby').style.display = "inline";
                break;
            case 4:
                document.getElementById('nearby').style.display = "inline";
                break;
            case 5:
                document.getElementById('member').style.display = "inline";
                break;
            case 6:
                document.getElementById('member').style.display = "inline";
                break;
            case 7:
                document.getElementById('member').style.display = "inline";
                break;
            case 8:
                document.getElementById('time').style.display = "inline";
                break;
        }
        if (this.readyState == 4 && this.status == 200) {
            switch (id) {
                case 1:
                    document.getElementById('GST').style.display = "none";
                    break;
                case 2:
                    document.getElementById('cancel').style.display = "none";
                    break;
                case 3:
                    document.getElementById('nearby').style.display = "none";
                    break;
                case 4:
                    document.getElementById('nearby').style.display = "none";
                    break;
                case 5:
                    document.getElementById('member').style.display = "none";
                    break;
                case 6:
                    document.getElementById('member').style.display = "none";
                    break;
                case 7:
                    document.getElementById('member').style.display = "none";
                    break;
                case 8:
                    document.getElementById('time').style.display = "none";
                    break;
            }
            alert(this.responseText);
            return;
        }
    };
    xmlhttp.open("POST", "other-setting-update.php?id=" + id + "&gst=" + gst + "&cancelvalue=" + cancelvalue + "&nearbyd=" + nearbyd + "&nearbym=" + nearbym + "&silver=" + silver + "&gold=" + gold + "&platinum=" + platinum + "&time=" + time, true);
    xmlhttp.send();

}