document.querySelector('#regform').addEventListener('submit',e =>{
          e.preventDefault();
          let form= document.querySelector('#regform');
          const data = new URLSearchParams();
          for(const p of new FormData(form)){
              data.append(p[0],p[1]);
          }
         fetch('server.php',{
              method: 'POST',
              body: data
          }).then(response => response.text()).then(response =>{
                 document.querySelector('#reg').innerHTML = response;
          }).catch(error => console.log(error));
    });