<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function setCookie(name, value, days) {
            if (days) {
                let date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                let expires = "; expires=" + date.toGMTString();
            } else let expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function getCookie(name) {
            let nameEQ = name + "=";
            let ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c[0] == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function deleteCookie(name) {
            setCookie(name, "", -1);
        }
        //setCookie('Firstname', 'Guni')

        function checkCookie(name) {
            let cookie = getCookie(name)
            if (cookie) {
                alert('yes');
            } else {
                alert('no');
            }
        }

        checkCookie('Lastname');
        //setCookie('Firstname', 'Guni')
        //setCookie('Lastname', 'Randolf')
        console.log(getCookie('Firstname'))
        setTimeout(() => deleteCookie('Firstname'), 5000)
    </script>
</body>

</html>
