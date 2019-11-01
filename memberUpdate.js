var card = document.getElementById("card");
setTimeout(()=>{
    $(".changeType").click(function(){
        var drop = $(this).parent().parent().find(".utype").val();
        var name=$(this).parent().parent().find(".memname").val();
        db.collection("student").where("id","==",name).get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                // doc.data() is never undefined for query doc snapshots
                 //console.log(doc.id, " => ", doc.data());
                 var data = doc.data();
                 var details = {
                     type:drop,

                 }
                db.collection("student").ref(name).update(details);
                 console.log(data.unit);
                 drop3.innerHTML+= `<option value="${data.unit}">${data.unit}</option>`
                
            });

        }

        ).catch(err=>{

        });
      });

 },2000)

  
db.collection("student").get().then(function(querySnap){
    querySnap.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
         //console.log(doc.id, " => ", doc.data());
         var data = doc.data();
         console.log(data.Name);
        var id = doc.id;
         card.innerHTML+=`<div class="row users">
         <div class="col-sm-19 col-6"><h4></i>${data.fName}</h4></div>
         <div class="col-12 col-sm-3">
            <input type="hidden" value="${doc.id}" name="memname" class="memname">
             <select id="utype" name="utype" class="form-control utype" style="width:80%; height: 50px;">
                 <option>Select Type</option>
                 <option value="moderator">Moderator</option>
                 <option value="admin">Admin</option>
             </select>
             </div>
             <div class="col-12 col-sm-3"><button type="button" name="changeType" class="btn btn-success changeType">Change Type</button></div>
         <div class="container-fluid details">
             <hr>
             <div class="row">
                 <div class="col-12 col-sm-6">Name:- ${data.fName} ${data.lName}</div>
                 <div class="col-12 col-sm-6">Email:-${data.email} </div>
                 <div class="col-12 col-sm-6">Type:- ${data.type}</div>
             </div>
         </div>
     </div>`;
       
    });
}).catch(err=>{

});