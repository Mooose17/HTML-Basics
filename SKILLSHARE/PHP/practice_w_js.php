<!DOCTYPE html>
<html lang="en">
<head>
    <title>GetElementByID</title>
</head>
<body>
    <h1 id="test" class="straight">HELLO WORLD</h1>
    <h2 id="penis" class="gay"> Penis World</h2>

    <script>
        var test = document.getElementById("test");
        test.innerHTML = "Hello welcome to javascript for beginners";
        var penis = document.getElementById("penis");
        penis.innerText = "Penispenispenis";
    </script>
    
</body>
</html>