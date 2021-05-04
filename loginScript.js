function ajax_post() {
    let xhr = new XMLHttpRequest();
    let url = "process.php";
    let username = document.getElementById('user').value;
    let password = document.getElementById('pass').value;
    let sendVar = "username=" + username + "&password=" + password;
    xhr.open("POST", url);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let return_data = xhr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    xhr.send(sendVar)
}