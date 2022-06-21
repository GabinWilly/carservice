<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="flex items-center mt-16 w-full">
        <div class="lg:mx-auto mx-6 border-2 rounded  w-4/6 lg:p-4 p-2 bg-gray-400">
            <form action="{{ route('car') }}" method="POST" class="lg:space-y-4 text-xl" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <h1 class="text-center lg:text-3xl text-xl py-2 lg:py-0 font-bold text-red-600 underline"> Ajoutez un article</h1>
                <label for="" class="  font-semibold">nom de l'article</label>
                <input type="text" class="rounded focus:ring-2 border w-full" name="name" id="name">
                <br>
                <label class="  font-semibold" for="marque">marque</label>
                <input type="text" class="rounded  focus:ring-2 border w-full" name="marque" id="marque">
                <br>
                <label class="  font-semibold" for="prix">prix_car</label>
                <input type="text" class="rounded focus:ring-2 border w-full" name="prix" id="prix">
                <br>
                <label for="km">km</label>
                <input type="text" class="rounded focus:ring-2 border w-full" name="km" id="km">
                <label for="image" class="text-red-600 p-4 text-center"> veuillez choisir les photos associées à l'article </label>
                <input type="file" multiple="multiple" name="imgFile[]" class=" w-full" id="images">
                <br>
                <br>
                <button type="submit"
                    class="rounded-lg bg-gray-600 px-4 hover:bg-green-100 hover:text-black border py-1 text-white">
                    Ajoutez
                </button>
            </form>
        </div>
    </div>
</body>

</html>
