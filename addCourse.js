const courseNameForm = document.getElementById("loginForm");


courseNameForm.addEventListener('submit',evt=>{
    evt.preventDefault();
    // alert("submitted");

    const details ={
        name: document.getElementById("cname").value,
        coordinator: document.getElementById("co").value
       

    }

    db.collection('course').add(details).then(evt =>{
        alert("success");
    }
        

    ).catch(err =>{
        alert("not success");
    }
        
    );

});