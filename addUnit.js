var drop=document.getElementById("scname");
var form = document.getElementById("loginForm2");
var drop2 = document.getElementById("scname2");
var drop3 = document.getElementById("scunit");

db.collection("course").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
         //console.log(doc.id, " => ", doc.data());
         var data = doc.data();
         console.log(data.name);
         drop.innerHTML+= `<option value="${data.name}">${data.name}</option>`;
         drop2.innerHTML+= `<option value="${data.name}">${data.name}</option>`;
    });
});

db.collection("unit").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
         //console.log(doc.id, " => ", doc.data());
         var data = doc.data();
         console.log(data.unit);
         drop3.innerHTML+= `<option value="${data.unit}">${data.unit}</option>`;
        
    });
});


// db.collection('course').get()
// .then(snapshot => {
//   snapshot.forEach(doc => {
   
//     alert('login sucessful');
    
//   })


// }).catch(evt =>{
//     alert("not in database");
// });

form.addEventListener('submit',evt =>{
    alert('submitted');
    evt.preventDefault();
    console.log(document.getElementById("nuname").value);

    const details ={
        course:drop.value,
        unit: document.getElementById("nuname").value

    }

    db.collection("unit").add(details).then(evt=>{
        alert("Success");
    }).catch(err=>{
        alert("Not successful");
    })
    
});
