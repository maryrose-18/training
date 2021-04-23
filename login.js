$(document).ready(function(){
  LOGIN.load();
})

const LOGIN = (()=>{

    let this_data = {};

    this_data.submit = () =>
    {
        $.ajax({
            url: 'loginData.php?action=submit',
            type: 'POST',
            dataType: 'json',
            data: 
            {
                username: $('#username').val(),
                password: $('#password').val()
            },
            success: data => 
            {
                if(data == 1)
                {
                    window.location.href = 'registration.php'
                }
                console.log(data);
            }
        })
    }

    this_data.load = () =>
    {
        $.ajax({
            url: 'loginData.php?action=loadData',
            type: 'GET',
            dataType: 'json',
            success: data =>
            {
                console.log(data);
                // $.each(data, function(key,value) {
                //     const {username, password} = value;

                //     console.log(`username : ${username}`);
                // }); 

                // for (let i = 0; i < data.length; i++) {
                //     const {username, password} = data[i];

                //     console.log(`password : ${password}`);
                // }

                // data.forEach(element => {
                //     const {username, password} = element;
                    
                //     console.log(`username :  ${username} password : ${password}`);
                // });
            }
        })
    }
    return this_data;

})()



