<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pikachu</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body >
<button onclick="vamsi()" >VAMSI-RAAJI</button>
<table id="ben10"   border="1" cellpadding="10" width="80%" align="center">

</table>

    <script >
        //when the particular button is triggored then  the below function will be executed
        //why we r using this ajax ? ----- the thing is----without reloading the entire page, we are updating the parts of the webpage
        function vamsi(){

                $.ajax({
                url:"https://jsonplaceholder.typicode.com/users",
                //when the page is loaded successfully , then only we are getting the data from the url
                success:function(x){//x ---- here we are getting the data from jsonplaceholder site
        
        let ssmb=`<thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>username</th>
            <th>email</th>
            <th>address</th>
        </tr>
    </thead>`

    for(v of x){
        ssmb+=`<tbody>
        <tr>
            <td>${v.id}</td>
            <td>${v.name}</td>
            <td>${v.username}</td>
            <td>${v.email}</td>
            <td>${v.address.street}, ${v.address.suite}, ${v.address.city} - ${v.address.zipcode}</td>
        </tr>
    </tbody>`
}
document.querySelector("#ben10").innerHTML = ssmb; //#ben10 represents the id selector
                //console.log(x);
                },
                error:function(x){
                    //console.log(x);
                }
            }); 
        }
    </script>




</body>
</html>
