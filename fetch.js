fetch('data.php').then((res) => res.json())
.then(response =>{
      console.log(response[0].NAME);
      let output='';
      for(let i in response){
         output += '<tr><td>'+ response[i].S_NO +'</td><td>'+ response[i].NAME +'</td><td>'+ response[i].EMAIL +'</td><td>'+ response[i].PASSWORD +'</td><td>'+ response[i].DATE +'</td><td>'+ response[i].EDUCATION +'</td></tr>';
      }

      document.querySelector('.tbody').innerHTML = output;
}).catch(error=> console.log(error));
