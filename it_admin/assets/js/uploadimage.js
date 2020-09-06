function uploada() {
    //get your select image
    var image=document.getElementById("image").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="OnBoard Page Customer";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("onBoardPageCustomer").set(url);
             console.log("Complete");
        });
    });
}


function uploadb() {
    //get your select image
    var image=document.getElementById("image2").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="OnBoard Page Worker";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("onBoardPageWorker").set(url);
             console.log("Complete");
        });
    });
}


function uploadc() {
    //get your select image
    var image=document.getElementById("image3").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="Select Page Customer";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("selectPageCustomer").set(url);
             console.log("Complete");
        });
    });
}


function uploadd() {
    //get your select image
    var image=document.getElementById("image4").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="Select Page Customer";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("selectPageWorker").set(url);
             console.log("Complete");
        });
    });
}

function uploade() {
    //get your select image
    var image=document.getElementById("image5").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="Signin Page Customer";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("signinPageCustomer").set(url);
             console.log("Complete");
        });
    });
}


function uploadf() {
    //get your select image
    var image=document.getElementById("image6").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
            //get your upload image url here...
            console.log(downloadURL);
            console.log("completed");
            
            var name ="Signin Page Worker";
            var url ={"photoURL": downloadURL,
                       "name": name
        };
            
           firebase.firestore().collection("banner").doc("signinPageWorker").set(url);
             console.log("Complete");
        });
    });
}