

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="app">
        <div class="container">
            <button @click="getList">Scopri la lista</button>
            <p>{{myList}}</p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Inserisci altro</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>