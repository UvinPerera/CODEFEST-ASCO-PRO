const form = document.getElementById("loginForm");
const uType ='student';

form.addEventListener('submit',evt =>{
    console.log('submitted');
    evt.preventDefault();
    const password = document.getElementById("password").value;
    var hash = CryptoJS.MD5(password);
   // alert(hash);
    db.collection(uType).where("username", "==", document.getElementById("userName").value).where("password", "==", hash.toString()).get()
.then(snapshot => {
  snapshot.forEach(doc => {
    
    //sessionStorage.setItem('utype',uType);
    //localStorage.setItem('utype',uType);
     var data = doc.data();
    // var dataArray = [
    //     data.username,
    //     data.email
        


    // ] ;

    
    document.cookie="utype="+data.type;
    document.cookie="userData="+data.username;
    document.cookie="userEmail="+data.email;
    if(data.type=="student")
        window.location.href = "studenthome.php";
    else if(data.type=="moderator")
        window.location.href = "moderCourseView.php";
    else if(data.type=="admin")
        window.location.href = "memberUpdate.php";
    // var val=sessionStorage.getItem("utype");
    // alert(val);
    //console.log(doc);
   // var data = doc.data();
    //console.log(data.checkIn);
   // alert('login sucessful');
    
  })


}).catch(evt =>{
    alert("not in database");
});
});

