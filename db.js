//add to db
const fName = document.getElementById("fname").value;
const lName = document.getElementById("lname").value;
const dob = document.getElementById("dob").value;
const email = document.getElementById("email").value;
const address = document.getElementById("address").value;
const username = document.getElementById("userName").value;
const password = document.getElementById("password").value;
const form = document.getElementById("loginForm");
const uType="student";



form.addEventListener('submit', evt => {
  evt.preventDefault();
  console.log("submitted");
  const password = document.getElementById("password").value;
  var hash = CryptoJS.MD5(password);
  //alert(hash);
  const details = {
    address: document.getElementById("address").value,
    dob: document.getElementById("dob").value,
    email: document.getElementById("email").value,
    fName: document.getElementById("fname").value,
    lName: document.getElementById("lname").value,
    password: hash.toString(),
    username: document.getElementById("userName").value,
    type: uType

    //password: form.pwd.value
  }

  db.collection("student").add(details).then(evt =>{
    console.log("success");


    window.location.href = "Login.php";
    //sessionStorage.utype=uType;
    //sessionStorage.setItem("utype",uType);
    
    // document.getElementById("address").value= "";
    // document.getElementById("dob").value="";
    // document.getElementById("email").value="";
    // document.getElementById("fname").value="";
    // document.getElementById("lname").value="";
    // document.getElementById("password").value="";
    // document.getElementById("userName").value="";
  

}
    
  );


 // var count = 0;
//   db.collection('attendants').where("email", "==", details.email).get()
//     .then(snapshot => {
//       snapshot.forEach(doc => {
//         count++;
//         //console.log(doc);
//         var data = doc.data();
//         //console.log(data.checkIn);
//         alert('login sucessful');
//         const signInSuccess = document.getElementById('form');
//         const loaderSign = document.getElementById('login');
//         loaderSign.innerHTML = "";
//         if(data.checkIn==="false")
//         {
//           signInSuccess.innerHTML = `<div class='text-center'><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=${doc.id}&choe=UTF-8" title="Registration Key" /></div>`;
//         }

//         else
//         {
//           signInSuccess.innerHTML = `<div class='text-center'><img src="../assets/img/Tick.png"/></div>`
//         }
        


//       });


//     })
//     .catch(err => {
//       //console.log(err);
//       alert('Invalid Login Credentails');

//     });



//   function timeOutFunc() {
//     if (count < 1) {
//       alert('request timed out, please check your login credentials and try again');
//       const loaderSign = document.getElementById('login');
//       loaderSign.innerHTML = "";
//     }
//   }

//   setTimeout(timeOutFunc, 10000)






//   form.email.value = '';


});