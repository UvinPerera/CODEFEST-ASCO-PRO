var card = document.getElementById("cards");


db.collection("course").get().then(function(querySnapshot) {
    var it=""; 
    querySnapshot.forEach(function(doc) {
        
        // doc.data() is never undefined for query doc snapshots
         //console.log(doc.id, " => ", doc.data());
    
         var data = doc.data();
         it="";
         //console.log(data.name);
         //console.log(data.coordinator);
         db.collection("unit").where("course","==",data.name).get().then(function(qsh){
             qsh.forEach(function(dc){
                 var dt = dc.data();
                 console.log(dt.course);
                 console.log(dt.unit);
                 it=it+"<div class='col-12'>"+dt.unit+"</div>";
                 console.log(it);
               

             })
         }).catch(err=>{

         });
         
         
         setTimeout(()=>{
            cards.innerHTML +=
            `<div class="row users">
            <div class="col-sm-10 col-6"><h4></i>COURSE NAME:- ${data.name} </h4></div>
            <div class="col-sm-2 col-6 pt-2"><button type="button" class="btn btn-success">Edit</button></div>
            <div class="col-12"> Course Cordinator:- ${data.coordinator}</div>
            <div class="container-fluid details">
                <hr>
                <div class="row">
                <div class='col-12'>Course Content</div>
                    ${it}
                </div>
            </div>
        </div>`;
        console.log(it);

         },2000)
        


        
        
    });
}).catch(err=>{
    alert("faliure");
});