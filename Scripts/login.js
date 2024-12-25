function login() {
    let username = document.getElementById("usernameInput").value;
    let password = document.getElementById("passwordInput").value;

    if (username != "" && password != "") {
        fetch('../../Includes/login.php', {
            method: 'POST', // or POST if your backend doesn't support PUT
    
            headers: {
              'Content-Type': 'application/json',
            },
    
            body: JSON.stringify({
                userValue: username,
                passValue: password,
            }),
        })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not OK');
            }
                return response.text();
            })
        .then((data) => {
            let result = JSON.parse(data);
            window.location.href = result.redirect
        })
        .catch((error) => {
            console.error('Error updating record:', error);
        });
    } else {
        console.log("No changes made")
    }
}