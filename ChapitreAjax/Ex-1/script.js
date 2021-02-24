const xhr = new XMLHttpRequest();
xhr.open('GET', 'https://reqres.in/api/users?page=1');

xhr.addEventListener('readystatechange', function (){
    if(xhr.readyState === 4 && xhr.status === 200){
        const data = JSON.parse(xhr.response).data;

       data.forEach(user => {
           `${user.first_name} ${user.last_name}`;
        });
        console.log(data)
    };
});
xhr.send();
