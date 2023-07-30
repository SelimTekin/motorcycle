<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Motorcycle</title>
</head>

<body>
    <div>
        <form action="#" id="searchForm">
            <input type="text" name="make" id="make" placeholder="make"><br /><br />
            <input type="text" name="model" id="model" placeholder="model"><br /><br />

            <button>Submit</button>
        </form>

        <div id="result">Deneme</div>
    </div>

    <script>
        let searchFormElement = document.getElementById("searchForm");
        let resultElement = document.getElementById("result");

        searchFormElement.addEventListener("submit", (e) => {

            e.preventDefault();

            let xhr = new XMLHttpRequest();

            xhr.open('POST', '../curl.php');

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    xhr.onload = function(e) {
                        resultElement.innerHTML = xhr.responseText;
                    }
                    console.log(xhr.responseText);
                }
            }

            // Formdaki verileri userData değişkenine atadık.
            let userData = new FormData(searchFormElement);

            xhr.send(userData);
        });
    </script>
</body>

</html>