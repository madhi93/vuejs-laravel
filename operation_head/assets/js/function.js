function summary(value) {
    if (value == 'state') {
        document.getElementById('state').style.display = 'inline';
        document.getElementById('gender').style.display = 'none';
        document.getElementById('age-group').style.display = 'none';
        document.getElementById('membership').style.display = 'none';
        document.getElementById('demo').style.display = 'none';
    } else if (value == 'gender') {
        document.getElementById('state').style.display = 'none';
        document.getElementById('gender').style.display = 'inline';
        document.getElementById('age-group').style.display = 'none';
        document.getElementById('membership').style.display = 'none';
        document.getElementById('demo').style.display = 'none';
    } else if (value == 'age') {
        document.getElementById('state').style.display = 'none';
        document.getElementById('gender').style.display = 'none';
        document.getElementById('age-group').style.display = 'inline';
        document.getElementById('membership').style.display = 'none';
        document.getElementById('demo').style.display = 'none';
    } else if (value == 'membership') {
        document.getElementById('state').style.display = 'none';
        document.getElementById('gender').style.display = 'none';
        document.getElementById('age-group').style.display = 'none';
        document.getElementById('membership').style.display = 'inline';
        document.getElementById('demo').style.display = 'none';
    }

}

function statechange(state) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = this.responseText.split(" ", 2);
            document.getElementById('lab').innerHTML = res[0];
            document.getElementById('cust').innerHTML = res[1];
        }
    };
    xmlhttp.open("POST", "getdashboard-data.php?for=state" + "&value=" + state, true);
    xmlhttp.send();
}

function genderchange(gender) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var res = this.responseText.split(" ", 2);
            document.getElementById('lab').innerHTML = res[0];
            document.getElementById('cust').innerHTML = res[1];
        }
    };
    xmlhttp.open("POST", "getdashboard-data.php?for=gender" + "&value=" + gender, true);
    xmlhttp.send();
}



google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(ini);

function revenue(mh, tn, k, mp, up) {
    var data = google.visualization.arrayToDataTable([
        ['State', 'Labours'],
        ['Maharashtra', mh],
        ['Tamil Nadu', tn],
        ['Karnataka', k],
        ['Madhya Pradesh', mp],
        ['Utter Pradesh', up],
    ]);
    var options = {
        'title': 'Revenue',
        'width': 350,
        'height': 250
    };
    var chart = new google.visualization.PieChart(document.getElementById('revenue'));
    chart.draw(data, options);
    status();
}

//Status chart
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(status);

function status(completed, pending, cancel) {
    var data = google.visualization.arrayToDataTable([
        ['Status', 's'],
        ['Completed', completed],
        ['In_Progress', pending],
        ['Rejected', cancel],

    ]);
    var options = {
        'title': 'Status',
        'width': 350,
        'height': 250
    };
    var chart = new google.visualization.PieChart(document.getElementById('status'));
    chart.draw(data, options);
}